@extends('_includes.base')

@section('body')
    <div class="container my-1">
        <div class="my-2">
            <img src="@url('/assets/images/bg.png')" style="width: 100%">
        </div>

        <div class="row">
            <div class="col-xs-12 col-lg-7">
                @yield('content')
            </div>
            <div class="col-xs-12 col-lg-4 offset-lg-1">
                @include('_includes.sidebar')
            </div>
        </div>
    </div>
@stop
