@extends('layouts.app')
@section('content')

{{ $show->title }}

    @foreach($showschedules->schedule as $schedule)
        <a href="/schedules/{{ $schedule->id }}">{{ $schedule->time }}</a>
    @endforeach

<!--<form action="/front-shows/{{$show->id}}" method="post" enctype="multipart/form-data">@csrf
@method('PUT')
<input type="hidden" name="id" value="{{$show->id}}">


<input type="text" class="form-control" name="seats" value="{{$show->seats}}">

<button type="submit" class="btn btn-lg btn-success">Сохранить</button>
</form>-->

@endsection