@if(config('blog.enable_comments') !== false)
    <div class="blog-comments">
        <div id="disqus_thread"></div>
    </div>

    <script>
    var disqus_config = function () {
        this.page.url = '{{ ($site_url ?? $base_url).$currentUrlPath }}';
        this.page.identifier = '{{ $currentUrlPath }}';
    };
    (function () {
        var d = document, s = d.createElement('script');
        s.src = '//{{ config('blog.disqus_id') }}.disqus.com/embed.js';
        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
    })();
    </script>
    <noscript>
        Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a>
    </noscript>

@endif
