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
        $sc = Schedule::with('show')->get();
        $tickets = Ticket::with('schedule.show')->where('schedule_id', $id)->get();
        return view('front.schedules.show', compact('schedule', 'tickets', 'sc'));
    }

    public function store()
    {
        $data = request()->all();
        $tickets = new Ticket();
        $tickets->schedule_id = $data['schedule_id'];
        $tickets->date = $data['date'];
        $tickets->number = $data['number'];
        $tickets->unique = $data['schedule_id'].$data['date'];
        $tickets->save();
        $ticketlast = Ticket::orderBy('created_at', 'desc')->first();
        return redirect('/front-tickets/'.$ticketlast->id);
    }
}
