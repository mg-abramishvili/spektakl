<div class="row">
    @foreach($shows as $show)
        <div class="col-4">
            <div class="show-item">
                <a href="/shows/{{ $show->id }}">
                    {{ $show->title }}
                </a>
            </div>
        </div>
    @endforeach
</div>