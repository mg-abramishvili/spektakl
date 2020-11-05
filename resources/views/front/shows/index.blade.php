@extends('layouts.front')
@section('content')

<div class="wrapper" style="">

    <div class="bg" style="background: url(/img/1.jpg) top center; background-size: cover;"></div>

    <div class="logo"><img src="/img/logo.png" alt=""></div>

    @foreach($shows as $show)

        {{ $show->title }}

        <div class="show-image">
            <img src="/img/1.jpg" style="width:100%;">
        </div>

        <div class="schedule-list">
            @foreach($show->schedule as $schedule)
            <div class="schedule-item">
                <a href="/front-schedules/{{ $schedule->id }}" class="btn-standard">
                    {{ $schedule->time }}
                </a>
            </div>
            @endforeach
        </div>

    @endforeach

</div>

@endsection