<?php

namespace App\Observers;

use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;


class CategoryObserver
{
    /**
     *
     * @param Category $category
     */
    public function creating(Category $category)
    {
        $this->setSlug($category);
        $this->createdBy($category);
    }
    /**
     * Handle the Category "created" event.
     *
     * @param  \App\Models\Category  $category
     * @return void
     */
    public function created(Category $category)
    {
        //
    }

    /**
     * Handle the Category "updated" event.
     *
     * @param  \App\Models\Category  $category
     * @return void
     */
    public function updated(Category $category)
    {
        //
    }

    /**
     * Handle the Category "deleted" event.
     *
     * @param  \App\Models\Category  $category
     * @return void
     */
    public function deleted(Category $category)
    {
        //
    }

    /**
     * Handle the Category "restored" event.
     *
     * @param  \App\Models\Category  $category
     * @return void
     */
    public function restored(Category $category)
    {
        //
    }

    /**
     * Handle the Category "force deleted" event.
     *
     * @param  \App\Models\Category  $category
     * @return void
     */
    public function forceDeleted(Category $category)
    {
        //
    }

    public function setSlug(Category  $category)
    {
        $category->slug = Str::slug($category->name,'-');
    }
    public function createdBy(Category $category)
    {
        $category->createdBy = Auth::user()->id;
    }
}
