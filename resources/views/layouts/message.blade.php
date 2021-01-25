@if($errors->any())
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-warning alert-dismissable fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                @foreach($errors->all() as $error)
                    <strong>Внимание !</strong> {{$error}}
                @endforeach
            </div>
        </div>
    </div>
@endif

@if(session('success'))
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-success alert-dismissable fade show"  role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong> Успех !</strong> {{session()->get('success')}}
            </div>
        </div>
    </div>
@endif
{{--<div class="alert alert-warning alert-dismissible fade show" role="alert">--}}
{{--    <strong>Holy guacamole!</strong> You should check in on some of those fields below.--}}
{{--    <button type="button" class="close" data-dismiss="alert" aria-label="Close">--}}
{{--        <span aria-hidden="true">&times;</span>--}}
{{--    </button>--}}
{{--</div>--}}
