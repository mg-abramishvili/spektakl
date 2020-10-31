<div class="row">
    @foreach($schedules as $schedule)
        <div class="col-4">
            <div class="show-item">
                <a href="/schedules/{{ $schedule->id }}">
                    {{ $schedule->time }}
                </a>
            </div>
        </div>
    @endforeach
</div>