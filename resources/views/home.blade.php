@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @dump(auth()->user()->roles)
                    @dump(auth()->user()->permissions)
                    <br>
                    @role('administrator')<a href="{{route('administrator')}}">{{ __('You are logged in! administrator') }}</a>@endrole
                    @role('web-developer') <a href="{{route('administrator')}}">{{ __('You are logged in! developer') }}</a> @endrole
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
