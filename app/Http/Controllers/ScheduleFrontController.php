<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schedule;

class ScheduleController extends Controller
{
    public function index() {
        $schedules = Schedule::all();
        return view('front.schedules.index', compact('schedules'));
    }

    public function show($id)
    {
        $schedule = Schedule::find($id);
        $scheduletickets = Schedule::where('id', $id)->first();
        return view('front.schedules.show', compact('schedule', 'scheduletickets'));
    }
}
