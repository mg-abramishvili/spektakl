@extends('layouts.front')
@section('content')

<div class="wrapper" style="">

    <div class="bg" style="background: url(/img/1.jpg) top center; background-size: cover;"></div>

    <div class="logo"><img src="/img/logo.png" alt=""></div>

    



    <form action="/front-schedules" method="post" enctype="multipart/form-data" style="position: absolute; z-index: 20; left: 0; right: 0; top: 0; bottom: 0; text-align: center;">@csrf
    <h2 style="margin: 0; margin-top: 330px; font-size: 110px; text-transform: uppercase; font-weight: bold; color: #333">{{ $schedule->show->title }} <small style="display: block; line-height: 1; font-size: 26px; margin-top: 40px;">АРТ-ГРУППА AES+F   |   ВОЗРАСТНОЕ ОГРАНИЧЕНИЕ 18+</small></h2>
    
            

            <div class="row align-items-center mb-2" style="opacity:0;">
                <dt class="col-sm-3">
                    Schedule ID
                </dt>
                <dd class="col-sm-9">
                    <input type="text" class="form-control" name="schedule_id" value="{{ $schedule->id }}">
                </dd>
            </div>

            <div class="row align-items-center mb-2" style="opacity: 0;">
                <dt class="col-sm-3">
                    Дата
                </dt>
                <dd class="col-sm-9">
                    @if (\App\Models\Ticket::all()->where('schedule_id', $schedule->id)->where('date', \Carbon\Carbon::today()->format('Y-m-d'))->count() <= 18)
                        <input type="date" class="form-control" name="date" value="{{ \Carbon\Carbon::today()->format('Y-m-d') }}">
                    @elseif (count($tickets) >= 19 && count($tickets) <= 37)
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

            
            
    @if (\App\Models\Ticket::all()->where('schedule_id', $schedule->id)->where('date', \Carbon\Carbon::today()->format('Y-m-d'))->count() <= 18)
        <p style="text-transform: uppercase; font-size: 42px; color: #333; margin-top: 5px;">Сеанс</p>
        <p style="text-transform: uppercase; font-size: 42px; color: #333; margin-top: -25px; margin-bottom: 20px;">
        {{ \Carbon\Carbon::today()->format('d.m.Y') }} {{ $schedule->time }}</p>

    @elseif (\App\Models\Ticket::all()->where('schedule_id', $schedule->id)->where('date', \Carbon\Carbon::today()->format('Y-m-d'))->count() >= 19 && \App\Models\Ticket::all()->where('schedule_id', $schedule->id)->where('date', \Carbon\Carbon::today()->addDays(1)->format('Y-m-d'))->count() <= 19)
        <p style="font-size: 52px; color: #333; margin-top: 300px; margin-bottom: 90px; line-height: 1.5">К сожалению,<br>билеты на этот сеанс закончились.<br>Попробуйте выбрать другое время.</p>
        <!--{{ \Carbon\Carbon::today()->addDays(1)->format('d.m.Y') }} {{ $schedule->time }}--></p> <style>h2 {display:none;} .btn-standard {display:none;}</style>
        <a href="/front-shows" class="btn-standard" style="display:inline-block; padding: 30px 40px; font-size: 40px;">Выбрать сеанс</a>

    @elseif (count($tickets) >= 38 && count($tickets) <= 56)
        {{ \Carbon\Carbon::today()->addDays(2)->format('d.m.Y') }}

    @elseif (count($tickets) >= 57 && count($tickets) <= 75)
        {{ \Carbon\Carbon::today()->addDays(3)->format('d.m.Y') }}

    @endif


            <div class="row align-items-center mb-2"  style="opacity:0;">
                <dt class="col-sm-3">
                    #
                </dt>
                <dd class="col-sm-9">
                @if (\App\Models\Ticket::all()->where('schedule_id', $schedule->id)->where('date', \Carbon\Carbon::today()->format('Y-m-d'))->count() < 1)
                    <input type="text" class="form-control" name="number" value="1">
                @elseif (\App\Models\Ticket::all()->where('schedule_id', $schedule->id)->where('date', \Carbon\Carbon::today()->format('Y-m-d'))->count() == 1)
                    <input type="text" class="form-control" name="number" value="2">
                @elseif (\App\Models\Ticket::all()->where('schedule_id', $schedule->id)->where('date', \Carbon\Carbon::today()->format('Y-m-d'))->count() == 2)
                    <input type="text" class="form-control" name="number" value="3">
                @elseif (\App\Models\Ticket::all()->where('schedule_id', $schedule->id)->where('date', \Carbon\Carbon::today()->format('Y-m-d'))->count() == 3)
                    <input type="text" class="form-control" name="number" value="4">
                @elseif (\App\Models\Ticket::all()->where('schedule_id', $schedule->id)->where('date', \Carbon\Carbon::today()->format('Y-m-d'))->count() == 4)
                    <input type="text" class="form-control" name="number" value="5">
                @elseif (\App\Models\Ticket::all()->where('schedule_id', $schedule->id)->where('date', \Carbon\Carbon::today()->format('Y-m-d'))->count() == 5)
                    <input type="text" class="form-control" name="number" value="6">
                @elseif (\App\Models\Ticket::all()->where('schedule_id', $schedule->id)->where('date', \Carbon\Carbon::today()->format('Y-m-d'))->count() == 6)
                    <input type="text" class="form-control" name="number" value="7">
                @elseif (\App\Models\Ticket::all()->where('schedule_id', $schedule->id)->where('date', \Carbon\Carbon::today()->format('Y-m-d'))->count() == 7)
                    <input type="text" class="form-control" name="number" value="8">
                @elseif (\App\Models\Ticket::all()->where('schedule_id', $schedule->id)->where('date', \Carbon\Carbon::today()->format('Y-m-d'))->count() == 8)
                    <input type="text" class="form-control" name="number" value="9">
                @elseif (\App\Models\Ticket::all()->where('schedule_id', $schedule->id)->where('date', \Carbon\Carbon::today()->format('Y-m-d'))->count() == 9)
                    <input type="text" class="form-control" name="number" value="10">
                @elseif (\App\Models\Ticket::all()->where('schedule_id', $schedule->id)->where('date', \Carbon\Carbon::today()->format('Y-m-d'))->count() == 10)
                    <input type="text" class="form-control" name="number" value="11">
                @elseif (\App\Models\Ticket::all()->where('schedule_id', $schedule->id)->where('date', \Carbon\Carbon::today()->format('Y-m-d'))->count() == 11)
                    <input type="text" class="form-control" name="number" value="12">
                @elseif (\App\Models\Ticket::all()->where('schedule_id', $schedule->id)->where('date', \Carbon\Carbon::today()->format('Y-m-d'))->count() == 12)
                    <input type="text" class="form-control" name="number" value="13">
                @elseif (\App\Models\Ticket::all()->where('schedule_id', $schedule->id)->where('date', \Carbon\Carbon::today()->format('Y-m-d'))->count() == 13)
                    <input type="text" class="form-control" name="number" value="14">
                @elseif (\App\Models\Ticket::all()->where('schedule_id', $schedule->id)->where('date', \Carbon\Carbon::today()->format('Y-m-d'))->count() == 14)
                    <input type="text" class="form-control" name="number" value="15">
                @elseif (\App\Models\Ticket::all()->where('schedule_id', $schedule->id)->where('date', \Carbon\Carbon::today()->format('Y-m-d'))->count() == 15)
                    <input type="text" class="form-control" name="number" value="16">
                @elseif (\App\Models\Ticket::all()->where('schedule_id', $schedule->id)->where('date', \Carbon\Carbon::today()->format('Y-m-d'))->count() == 16)
                    <input type="text" class="form-control" name="number" value="17">
                @elseif (\App\Models\Ticket::all()->where('schedule_id', $schedule->id)->where('date', \Carbon\Carbon::today()->format('Y-m-d'))->count() == 17)
                    <input type="text" class="form-control" name="number" value="18">
                @elseif (\App\Models\Ticket::all()->where('schedule_id', $schedule->id)->where('date', \Carbon\Carbon::today()->format('Y-m-d'))->count() == 18)
                    <input type="text" class="form-control" name="number" value="19">
                @elseif (\App\Models\Ticket::all()->where('schedule_id', $schedule->id)->where('date', \Carbon\Carbon::today()->format('Y-m-d'))->count() == 19)
                    <input type="text" class="form-control" name="number" value="1">
                @elseif (\App\Models\Ticket::all()->where('schedule_id', $schedule->id)->where('date', \Carbon\Carbon::today()->format('Y-m-d'))->count() == 20)
                    <input type="text" class="form-control" name="number" value="2">
                @elseif (\App\Models\Ticket::all()->where('schedule_id', $schedule->id)->where('date', \Carbon\Carbon::today()->format('Y-m-d'))->count() == 21)
                    <input type="text" class="form-control" name="number" value="3">
                @elseif (\App\Models\Ticket::all()->where('schedule_id', $schedule->id)->where('date', \Carbon\Carbon::today()->format('Y-m-d'))->count() == 22)
                    <input type="text" class="form-control" name="number" value="4">
                @elseif (\App\Models\Ticket::all()->where('schedule_id', $schedule->id)->where('date', \Carbon\Carbon::today()->format('Y-m-d'))->count() == 23)
                    <input type="text" class="form-control" name="number" value="5">
                @elseif (\App\Models\Ticket::all()->where('schedule_id', $schedule->id)->where('date', \Carbon\Carbon::today()->format('Y-m-d'))->count() == 24)
                    <input type="text" class="form-control" name="number" value="6">
                @elseif (\App\Models\Ticket::all()->where('schedule_id', $schedule->id)->where('date', \Carbon\Carbon::today()->format('Y-m-d'))->count() == 25)
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

            <button type="submit" class="btn-standard" style="font-family: 'LunatixOT-Bold';padding: 30px 40px; font-size: 40px;">Получить билет</button>

        </form>


<p style="position: absolute; bottom: 50px; left: 0; right: 0; text-align: center; text-transform: uppercase; font-weight: bold; font-family: Arial, sans-serif; color: #777; font-weight: bold;">
        @if (\App\Models\Ticket::all()->where('schedule_id', $schedule->id)->where('date', \Carbon\Carbon::today()->format('Y-m-d'))->count() <= 18)
            
            Свободных мест: {{ 19 - \App\Models\Ticket::all()->where('schedule_id', $schedule->id)->where('date', \Carbon\Carbon::today()->format('Y-m-d'))->count() }}

        @elseif (\App\Models\Ticket::all()->where('schedule_id', $schedule->id)->where('date', \Carbon\Carbon::today()->format('Y-m-d'))->count() >= 19 && \App\Models\Ticket::all()->where('schedule_id', $schedule->id)->where('date', \Carbon\Carbon::today()->addDays(1)->format('Y-m-d'))->count() <= 37)

            <!-- На завтра {{ 19 - \App\Models\Ticket::all()->where('schedule_id', $schedule->id)->where('date', \Carbon\Carbon::today()->addDays(1)->format('Y-m-d'))->count() }} билетов -->

        @endif
        </p>






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

<a href="/front-shows" style="position: absolute; z-index: 20; bottom: 50px; left: 50px;"><img src="/img/home.svg" style="width: 60px;"></a>
</div>

@endsection