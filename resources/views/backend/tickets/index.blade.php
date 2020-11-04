@extends('layouts.app')
@section('content')

@if (count($tickets) >= 5)
Билетов больше нет!
@else
<form action="/tickets" method="post" enctype="multipart/form-data">@csrf
            
            <div class="row align-items-center mb-2">
                <dt class="col-sm-3">
                    Schedule ID
                </dt>
                <dd class="col-sm-9">
                    <select name="schedule_id" class="form-control">
                        @foreach($schedules as $schedule)
                            <option value="{{ $schedule->id }}">{{ $schedule->show->title }} {{ $schedule->time }}</option>
                        @endforeach
                    </select>
                </dd>
            </div>

            <div class="row align-items-center mb-2">
                <dt class="col-sm-3">
                    #
                </dt>
                <dd class="col-sm-9">
                    <input type="text" class="form-control" name="number" value="{{ count($tickets) + 1 }}">
                </dd>
            </div>

            <button type="submit" class="btn btn-lg btn-success">Сохранить</button>

        </form>


    
@endif



<table class="table table-bordered table-hover">
@forelse($tickets as $ticket)
<tr>
<td style="text-align: left; padding-left: 20px; padding-right: 20px;">
<h5>{{$ticket->number}}</h5>
<span>{{$ticket->schedule->show->title}}</span> | <span>{{$ticket->schedule->time}}</span>
</td>
<td style="width: 200px;">
<a href="/tickets/delete/{{$ticket->id}}" class="btn btn-sm btn-danger">Удалить</a>
</td>
</tr>
@empty
<tr>
<td style="text-align: center;">
Пусто &#9785;
</td>
</tr>
@endforelse
</table>
@endsection