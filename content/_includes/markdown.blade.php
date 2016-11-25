@extends('_includes.base')

@section('body')
    <div class="container py-2">
        <div class="row">
            <div class="col-xs-12 col-lg-8 offset-lg-2">
                @yield('markdown-body')
            </div>
        </div>
    </div>
@endsection
