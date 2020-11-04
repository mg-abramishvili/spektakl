<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schedule;
use App\Models\Show;

class ScheduleController extends Controller
{
    public function index() {
        $schedules = Schedule::all();
        return view('backend.schedules.index', compact('schedules'));
    }

    public function create()
    {
        $shows = Show::all();
        return view('backend.schedules.create', compact('shows'));
    }

    public function edit($id)
    {
        $schedules = Schedule::find($id);
        $shows = Show::all();
        return view('backend.schedules.edit', compact('schedules', 'shows'));
    }

    public function delete($id)
    {
        $schedules = Schedule::find($id);
        $schedules->delete();
        return redirect('/schedules');
    }

    public function store()
    {
        $data = request()->all();
        $schedules = new Schedule();
        $schedules->show_id = $data['show_id'];
        $schedules->time = $data['time'];
        $schedules->save();
        return redirect('/schedules');
    }

    public function update()
    {
        $data = request()->all();
        $schedules = Schedule::find($data['id']);
        $schedules->show_id = $data['show_id'];
        $schedules->time = $data['time'];
        $schedules->save();
        return redirect('/schedules');
    }
}
