@extends('layouts.front')
@section('content')

<div class="wrapper" style="">

    <div class="bg" style="background: url(/img/1.jpg) top center; background-size: cover;"></div>

    <div class="schedule-list">
        @foreach($schedules as $schedule)
            {{ $schedule->show->title }}
                <div class="schedule-item">
                    <a href="/front-schedules/{{ $schedule->id }}" class="btn-standard">
                        {{ $schedule->time }}
                    </a>
                </div>
        @endforeach
    </div>
</div>

@endsection