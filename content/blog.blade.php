@extends('_includes.base')

@section('pageTitle', 'Blog -')

@section('body')
    <div class="container my-2">
        <div class="row">
            <div class="col-xs-12 col-lg-8">
                <h2>Articles</h2>
                
                @foreach($posts as $post)
                    <article>
                        <p>
                            <a href="@url($post->path)">{{ $post->title }}</a>
                            <br>
                            <small>{{ $post->date }}</small>
                            <br>
                            {{ $post->brief }}
                        </p>
                    </article>

                @endforeach

                @include('_includes.blog.paginator')
            </div>
        </div>
    </div>

@stop
