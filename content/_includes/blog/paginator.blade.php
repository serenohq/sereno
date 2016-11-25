<div class="pagination">
    @if($next_page)
        <a class="button is-primary" href="@url($next_page)">Newer posts</a>
    @endif

    @if($prev_page)
        <a class="button is-primary" href="@url($prev_page)">Previous posts</a>
    @endif
</div>