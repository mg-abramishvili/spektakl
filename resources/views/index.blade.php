@extends('layouts.front')
@section('content')

<div class="wrapper" style="background-image: url(/img/bg01.png);">
    @if (\App\Models\Ticket::all()->where('date', \Carbon\Carbon::today()->format('Y-m-d'))->count() <= 75)
        <a href="/front-shows" class="btn-standard" style="position: absolute; bottom: 100px; left: 0; right: 0; margin: 0 auto; padding: 30px; width: 300px;">Выбрать сеанс</a>
    @else
        <p style="position: absolute; left: 50px; right: 50px; text-align: center; font-size: 32px; line-height: 1.5; bottom: 80px; color: #555;">К сожалению, билеты на сегодня закончились. <br>Пожалуйста, приходите завтра.</p>
    @endif
</div>

@endsection