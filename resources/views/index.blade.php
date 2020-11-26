@extends('layouts.front')
@section('content')


    @if (\App\Models\Ticket::all()->where('date', \Carbon\Carbon::today()->format('Y-m-d'))->count() <= 75)
    <div class="wrapper" style="background-image: url(/img/bg01.png);">
        <a href="/front-shows" class="btn-standard" style="position: absolute; bottom: 100px; left: 0; right: 0; margin: 0 auto; padding: 30px; width: 300px;">Выбрать сеанс</a>
        <div class="qr" style="position: absolute; bottom: 50px; right: 50px; width: 150px">
    <img src="/img/qr.jpg" style="width:100%;">
</div>
        </div>
    @else
    <div class="wrapper" style="">
    <div class="logo"><img src="/img/logo.png" alt=""></div>
    <p style="font-size: 52px; color: #333; margin-top: 340px; margin-bottom: 90px; line-height: 1.5;  text-align: center;">К сожалению, <br>билеты на сегодня уже закончились.

    <br>Мы будем рады видеть вас в другой день.

<br><br>Время сеансов: <br>10:00, 12:00, 14:00 и 16:00

<br>Ежедневно</p>
<div class="qr" style="position: absolute; bottom: 50px; right: 50px; width: 150px">
    <img src="/img/qr.jpg" style="width:100%;">
</div>
        </div>
    @endif



@endsection