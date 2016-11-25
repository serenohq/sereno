@if(count($blog_posts))
    <h4>From the blog</h4>
    <p>
        @foreach(array_slice($blog_posts, 0, 5) as $post)
            <a href="@url($post['path'])">{{ $post['title'] }}</a><br>
        @endforeach
    </p>
    <p>
        Want to read more? <br>
        <a href="@url('blog')">Check all posts</a>
    </p>

    <footer class="mt-2 mb-1">
        <hr style="margin-bottom: .5rem">
        <small>Built with &hearts; by <a href="http://github.com/znck/sereno">Sereno</a></small>
    </footer>
@endif
