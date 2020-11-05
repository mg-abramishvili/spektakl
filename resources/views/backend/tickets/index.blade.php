@extends('layouts.app')
@section('content')


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
                    Дата
                </dt>
                <dd class="col-sm-9">
                    @if (count($tickets) <= 2)
                        <input type="date" class="form-control" name="date" value="{{ \Carbon\Carbon::today()->format('Y-m-d') }}">
                    @elseif (count($tickets) >= 3 && count($tickets) <= 5)
                        На сегодня билетов больше нет, забронируйте билет на завтра
                        <input type="date" class="form-control" name="date" value="{{ \Carbon\Carbon::today()->addDays(1)->format('Y-m-d') }}">
                    @elseif (count($tickets) >= 6)
                        На сегодня билетов больше нет, забронируйте билет на послезавтра
                        <input type="date" class="form-control" name="date" value="{{ \Carbon\Carbon::today()->addDays(2)->format('Y-m-d') }}">
                    @endif
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

<table>
    @foreach ($grouped as $date => $ticket_list)
        <tr>
            <th colspan="3"
                style="background-color: #F7F7F7">{{ $ticket_list->count() }} билетов</th>
        </tr>
        @foreach ($ticket_list as $ticket)
            <tr>
            <td><strong>{{$ticket->number}}</strong></td>
                <td>{{$ticket->schedule->show->title}}</td>
                <td>{{ Carbon\Carbon::parse($ticket->date)->locale('ru')->isoFormat('dddd, D MMMM YYYY') }}</td>
                <td>{{$ticket->schedule->time}}</td>
                <td><a href="/tickets/delete/{{$ticket->id}}" class="btn btn-sm btn-danger">Удалить</a></td>
            </tr>
        @endforeach
    @endforeach
    </table>


<table class="table table-bordered table-hover" style="display:none;">
@forelse($tickets as $ticket)
<tr>
<td style="text-align: left; padding-left: 20px; padding-right: 20px;">
<h5>{{$ticket->number}}</h5>
<span>{{$ticket->schedule->show->title}}</span> | <span>{{ Carbon\Carbon::parse($ticket->date)->locale('ru')->isoFormat('dddd, D MMMM YYYY') }}</span> | <span>{{$ticket->schedule->time}}</span>
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