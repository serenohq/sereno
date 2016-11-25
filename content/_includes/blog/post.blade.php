@extends('_includes.base')

@section('pageDescription')@yield('post::brief')@endsection

@section('body')
    @if($image)
    <div class="post-banner">
        <img src="@url($image)">
    </div>
    @endif

    <div class="container mt-3">
        <div class="row">
            <article class="blog-post col-xs-12 col-lg-8 offset-lg-2">
                <small>
                    <small class="text-uppercase">
                        <a href="@url('blog')">Back to blog</a>
                    </small>
                </small>

                <h1 class="blog-title">{{ $title }}</h1>

                <div>
                    <small>{{ $date }}</small><br class="hidden-lg-up">
                    @include('_includes.blog.collection')
                </div>

                @yield('post-content')
            </article>
            <div class="col-xs-12 col-lg-8 offset-lg-2">
                @include('_includes.blog.comment')
            </div>
        </div>
    </div>

    @if($next)
        <div class="post-next mt-3" @if($next->image) style="background-image: url(@url($next->image))" @endif>
            <div class="post-title">
                <small>Up next</small>
                <a href="@url($next->path)">{{ $next->title }}</a>
            </div>
        </div>
    @endif
@stop
