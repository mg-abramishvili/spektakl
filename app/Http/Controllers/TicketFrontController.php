<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Show;
use App\Models\Schedule;
use App\Models\Ticket;

class TicketFrontController extends Controller
{
    public function show($id)
    {
        $ticket = Ticket::find($id);
        $tk = Ticket::with('schedule.show')->where('id', $id)->first();
        return view('front.tickets.show', compact('ticket', 'tk'));
    }
}
