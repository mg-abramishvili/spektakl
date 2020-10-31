@extends('layouts.app')
@section('content')

    <h1>{{ $scheduletickets->show->title }}</h1>

    <h2>{{ $schedule->time }}</h2>

    @foreach($scheduletickets->ticket as $ticket)
        {{ $ticket->number }}
    @endforeach



@endsection