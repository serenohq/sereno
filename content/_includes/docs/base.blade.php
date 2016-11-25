@extends('_includes.base')

@section('extra-nav')
    <div class="docs hidden-lg-up">
        <div class="sidebar">
            <h1>Documentation</h1>
            {!! $index !!}
        </div>
    </div>
@endsection

@section('body')
    <div class="docs">
        <div class="docs-wrapper container">
            <div class="row">
                <section class="sidebar col-lg-3 mt-1 mb-1 hidden-md-down">
            		{!! $index !!}
            	</section>

            	<article class="col-xs-12 col-lg-9">
            		@yield('doc_content')
            	</article>
            </div>
        </div>
    </div>
@endsection
