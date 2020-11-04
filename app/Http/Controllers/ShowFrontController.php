<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Show;

class ShowFrontController extends Controller
{
    public function index() {
        $shows = Show::all();
        return view('front.shows.index', compact('shows'));
    }

    public function show($id)
    {
        $show = Show::find($id);
        $showschedules = Show::where('id', $id)->first();
        return view('front.shows.show', compact('show', 'showschedules'));
    }
}
