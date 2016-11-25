@if($collection)
    <a class="text-link float-lg-right" data-toggle="collapse" href="#collection" aria-expanded="false" aria-controls="collection">
            <small>This article is part of a collection.</small>
    </a>

    <div class="collapse" id="collection">
        <div class="card card-block my-2">
            <div class="row">
                <div class="col-xs-12 col-lg-5">
                    <h3>{{ $collection->name }}</h3>
                    <p>Let's take you through the journey of building your website. Build a stunning blog or personal website with Sereno.</p>
                </div>
                <div class="col-xs-12 col-lg-7">
                    <h5>Checkout articles in this collection:</h5>
                    <ul class="list-unstyled collection-list">
                        @foreach($collection->posts as $post)
                            <li class="pl-1">
                                <a class="@active($post->path)" href="@url($post->path)">{{ $post->title }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endif
