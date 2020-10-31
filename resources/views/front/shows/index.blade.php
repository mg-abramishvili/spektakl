<div class="row">
    {{ \Carbon\Carbon::now()->locale('ru')->isoFormat('dddd, D MMMM YYYY, h:mm') }} 

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