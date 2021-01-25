@extends('layouts.app')

@section('content')
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
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Название карточки</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Подзаголовок карты</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="card-link">Ссылка карты</a>
                    <a href="#" class="card-link">Другая ссылка</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
