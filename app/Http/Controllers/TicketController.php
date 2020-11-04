<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Show;
use App\Models\Schedule;
use App\Models\Ticket;

class TicketController extends Controller
{
    public function index() {
        $shows = Show::all();
        $schedules = Schedule::with('show')->get();
        $tickets = Ticket::with('schedule.show')->get();
        return view('backend.tickets.index', compact('shows', 'schedules', 'tickets'));
        //dd($tickets);
    }

    public function delete($id)
    {
        $tickets = Ticket::find($id);
        $tickets->delete();
        return redirect('/tickets');
    }

    public function store()
    {
        $data = request()->all();
        $tickets = new Ticket();
        $tickets->schedule_id = $data['schedule_id'];
        $tickets->number = $data['number'];
        $tickets->save();
        return redirect('/tickets');
    }
}
