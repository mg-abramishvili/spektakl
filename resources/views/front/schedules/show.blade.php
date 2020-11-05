@extends('layouts.front')
@section('content')

<div class="wrapper" style="">

    <div class="bg" style="background: url(/img/1.jpg) top center; background-size: cover;"></div>

    <div class="logo"><img src="/img/logo.png" alt=""></div>

    



    <form action="/front-schedules" method="post" enctype="multipart/form-data" style="position: absolute; z-index: 20; top: 100px;">@csrf
            <h2>{{ $schedule->time }}</h2>
            <h2>{{ $schedule->show->title }}</h2>
            <div class="row align-items-center mb-2">
                <dt class="col-sm-3">
                    Schedule ID
                </dt>
                <dd class="col-sm-9">
                    <input type="text" class="form-control" name="schedule_id" value="{{ $schedule->id }}">
                </dd>
            </div>

            <div class="row align-items-center mb-2">
                <dt class="col-sm-3">
                    Дата
                </dt>
                <dd class="col-sm-9">
                    @if (count($tickets) <= 18)
                        <input type="date" class="form-control" name="date" value="{{ \Carbon\Carbon::today()->format('Y-m-d') }}">
                    @elseif (count($tickets) >= 19 && count($tickets) <= 37)
                        К сожалению,<br>
                        свободных мест на данный<br>
                        сеанс нет, выберите пожалуйста<br>
                        другой сеанс.
                        <input type="date" class="form-control" name="date" value="{{ \Carbon\Carbon::today()->addDays(1)->format('Y-m-d') }}">
                    @elseif (count($tickets) >= 38 && count($tickets) <= 56)
                        На сегодня билетов больше нет, забронируйте билет на послезавтра
                        <input type="date" class="form-control" name="date" value="{{ \Carbon\Carbon::today()->addDays(2)->format('Y-m-d') }}">
                    @elseif (count($tickets) >= 57 && count($tickets) <= 75)
                        На сегодня билетов больше нет, забронируйте билет на послепослезавтра
                        <input type="date" class="form-control" name="date" value="{{ \Carbon\Carbon::today()->addDays(3)->format('Y-m-d') }}">
                    @endif
                </dd>
            </div>

            <div class="row align-items-center mb-2">
                <dt class="col-sm-3">
                    #
                </dt>
                <dd class="col-sm-9">
                @if (count($tickets) < 1)
                    <input type="text" class="form-control" name="number" value="1">
                @elseif (count($tickets) == 1)
                    <input type="text" class="form-control" name="number" value="2">
                @elseif (count($tickets) == 2)
                    <input type="text" class="form-control" name="number" value="3">
                @elseif (count($tickets) == 3)
                    <input type="text" class="form-control" name="number" value="4">
                @elseif (count($tickets) == 4)
                    <input type="text" class="form-control" name="number" value="5">
                @elseif (count($tickets) == 5)
                    <input type="text" class="form-control" name="number" value="6">
                @elseif (count($tickets) == 6)
                    <input type="text" class="form-control" name="number" value="7">
                @elseif (count($tickets) == 7)
                    <input type="text" class="form-control" name="number" value="8">
                @elseif (count($tickets) == 8)
                    <input type="text" class="form-control" name="number" value="9">
                @elseif (count($tickets) == 9)
                    <input type="text" class="form-control" name="number" value="10">
                @elseif (count($tickets) == 10)
                    <input type="text" class="form-control" name="number" value="11">
                @elseif (count($tickets) == 11)
                    <input type="text" class="form-control" name="number" value="12">
                @elseif (count($tickets) == 12)
                    <input type="text" class="form-control" name="number" value="13">
                @elseif (count($tickets) == 13)
                    <input type="text" class="form-control" name="number" value="14">
                @elseif (count($tickets) == 14)
                    <input type="text" class="form-control" name="number" value="15">
                @elseif (count($tickets) == 15)
                    <input type="text" class="form-control" name="number" value="16">
                @elseif (count($tickets) == 16)
                    <input type="text" class="form-control" name="number" value="17">
                @elseif (count($tickets) == 17)
                    <input type="text" class="form-control" name="number" value="18">
                @elseif (count($tickets) == 18)
                    <input type="text" class="form-control" name="number" value="19">
                @elseif (count($tickets) == 19)
                    <input type="text" class="form-control" name="number" value="1">
                @elseif (count($tickets) == 20)
                    <input type="text" class="form-control" name="number" value="2">
                @elseif (count($tickets) == 21)
                    <input type="text" class="form-control" name="number" value="3">
                @elseif (count($tickets) == 22)
                    <input type="text" class="form-control" name="number" value="4">
                @elseif (count($tickets) == 23)
                    <input type="text" class="form-control" name="number" value="5">
                @elseif (count($tickets) == 24)
                    <input type="text" class="form-control" name="number" value="6">
                @elseif (count($tickets) == 25)
                    <input type="text" class="form-control" name="number" value="7">
                @elseif (count($tickets) == 26)
                    <input type="text" class="form-control" name="number" value="8">
                @elseif (count($tickets) == 27)
                    <input type="text" class="form-control" name="number" value="9">
                @elseif (count($tickets) == 28)
                    <input type="text" class="form-control" name="number" value="10">
                @elseif (count($tickets) == 29)
                    <input type="text" class="form-control" name="number" value="11">
                @elseif (count($tickets) == 30)
                    <input type="text" class="form-control" name="number" value="12">
                @elseif (count($tickets) == 31)
                    <input type="text" class="form-control" name="number" value="13">
                @elseif (count($tickets) == 32)
                    <input type="text" class="form-control" name="number" value="14">
                @elseif (count($tickets) == 33)
                    <input type="text" class="form-control" name="number" value="15">
                @elseif (count($tickets) == 34)
                    <input type="text" class="form-control" name="number" value="16">
                @elseif (count($tickets) == 35)
                    <input type="text" class="form-control" name="number" value="17">
                @elseif (count($tickets) == 36)
                    <input type="text" class="form-control" name="number" value="18">
                @elseif (count($tickets) == 37)
                    <input type="text" class="form-control" name="number" value="19">
                @elseif (count($tickets) >= 38)
                    <input type="text" class="form-control" name="number" value="{{ count($tickets) + 1 }}">
                @endif
                </dd>
            </div>

            <button type="submit" class="btn btn-lg btn-success">Сохранить</button>

        </form>



        @if (\App\Models\Ticket::all()->where('schedule_id', $schedule->id)->where('date', \Carbon\Carbon::today()->format('Y-m-d'))->count() <= 18)
            
            На сегодня {{ 19 - \App\Models\Ticket::all()->where('schedule_id', $schedule->id)->where('date', \Carbon\Carbon::today()->format('Y-m-d'))->count() }} билетов

        @elseif (\App\Models\Ticket::all()->where('schedule_id', $schedule->id)->where('date', \Carbon\Carbon::today()->format('Y-m-d'))->count() >= 19 && \App\Models\Ticket::all()->where('schedule_id', $schedule->id)->where('date', \Carbon\Carbon::today()->addDays(1)->format('Y-m-d'))->count() <= 19)

            На завтра {{ 19 - \App\Models\Ticket::all()->where('schedule_id', $schedule->id)->where('date', \Carbon\Carbon::today()->addDays(1)->format('Y-m-d'))->count() }} билетов

        @endif







        <table class="table table-bordered table-hover" style="display:none;">
@forelse($tickets as $ticket)
<tr>
<td style="text-align: left; padding-left: 20px; padding-right: 20px;">
<h5>{{$ticket->number}}</h5>
<span>{{$ticket->schedule->show->title}}</span> | <span>{{ Carbon\Carbon::parse($ticket->date)->locale('ru')->isoFormat('dddd, D MMMM YYYY') }}</span> | <span>{{$ticket->schedule->time}}</span> | <span>{{$ticket->unique}}</span>
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


</div>

@endsection