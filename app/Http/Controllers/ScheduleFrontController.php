<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schedule;
use App\Models\Show;
use App\Models\Ticket;

class ScheduleFrontController extends Controller
{
    public function index() {
        $schedules = Schedule::with('show')->get();
        return view('front.schedules.index', compact('schedules'));
    }

    public function show($id)
    {
        $schedule = Schedule::find($id);
        $scheduletickets = Schedule::with('ticket')->get();
        $tickets = Ticket::with('schedule.show')->where('schedule_id', $id)->get();
        $shows = Show::all();
        return view('front.schedules.show', compact('schedule', 'scheduletickets', 'tickets', 'shows'));
    }

    public function store()
    {
        $data = request()->all();
        $tickets = new Ticket();
        $tickets->schedule_id = $data['schedule_id'];
        $tickets->date = $data['date'];
        $tickets->number = $data['number'];
        $tickets->save();
        return redirect('/front-schedules/'.$tickets->schedule_id);
    }
}
