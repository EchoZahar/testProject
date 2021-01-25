<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        $delimiter = '-';
        return view('admin.category.index', compact('categories','delimiter'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->input();
        $category = Category::create($data);
        if($category): return back()->with(['msg'=>'Категория успешно добавлена !']);
        else: return back()->withErrors(['Что то пошло не так, смотри ошибки']); endif;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $data = $request->all();
        if($request->has('published')): $data['published'] = 1; else: $data['published'] = 0; endif;
        $update = $category->update($data);
        if($update): return back()->with(['success'=>'Категория "'. $category->name .'" успешно обновлена !']);
        else: return back()->withErrors(['msg' => 'Что то пошло не так, обновите страницу и попробуйте снова !']);
        endif;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        if(!$category): return redirect()->back()->withErrors(['msg'=>'id не найдено !']);endif;
        $delete = $category->delete();
        if($delete): return back()->with(['success'=>'Категория "'.$category->name.'", удалена успешно !']);
        else: return back()->withErrors(['msg'=>'Что то пошло не так, обновите страницу и поробуйте снова !']); endif;
    }
}
