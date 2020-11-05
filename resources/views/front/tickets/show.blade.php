@extends('layouts.front')
@section('content')

<div class="wrapper" style="">

    <div class="bg" style="background: url(/img/1.jpg) top center; background-size: cover;"></div>

    <div class="logo"><img src="/img/logo.png" alt=""></div>


    <h1>{{ $tk->id }}</h1>
    <h2>{{ $tk->number }}</h2>

    <p>{{ $tk->schedule->time }}</p>
    <p>{{ $tk->schedule->show->title }}</p>
    <span>{{ Carbon\Carbon::parse($tk->date)->locale('ru')->isoFormat('dddd, D MMMM YYYY') }}</span>


</div>

@endsection