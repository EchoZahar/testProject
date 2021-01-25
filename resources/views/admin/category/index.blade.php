@extends('layouts.app')

@section('content')
    @include('layouts.message')
@include('admin.category.modal.create')
<div class="container">
    <div class="row">
        <div class="col-lg-12 col-sm-12">
            <div class="card">
                <div class="text-lg-right">
                    <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#createCategory">добавить категорию</button>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
    @if($categories->count() > 0)
    @foreach($categories as $category)
    @include('admin.category.modal.deleteCategory')
    @include('admin.category.modal.edit')
    <div class="col-lg-3 col-md-6 col-sm-12 text-center">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{$category->name}}</h5>
                <h6 class="card-subtitle mb-2 text-muted">@if($category->published == 0) не опубликовано @else опубликованно @endif</h6>
                <p class="card-text">@if($category->parentId == 0) это основная категория @endif</p>
                <a href="#" class="card-link text-danger" data-toggle="modal" data-target="#deleteCategory{{ $category->id }}">удалить</a>
                <a href="#" class="card-link" data-toggle="modal" data-target="#editCategory{{$category->id}}">редактировать</a>
            </div>
        </div>
    </div>
    @endforeach
    @else
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-danger">категорий не найдено !</h5>
                </div>
            </div>
    @endif
    </div>
</div>
@endsection
