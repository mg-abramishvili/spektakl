<div class="row">
    @foreach($schedules as $schedule)
        {{ $schedule->show->title }}
        <div class="col-4">
            <div class="show-item">
                <a href="/front-schedules/{{ $schedule->id }}">
                    {{ $schedule->time }}
                </a>
            </div>
        </div>
    @endforeach
</div>