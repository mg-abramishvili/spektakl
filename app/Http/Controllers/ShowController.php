<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Show;

class ShowController extends Controller
{
    public function index() {
        $shows = Show::all();
        return view('backend.shows.index', compact('shows'));
    }

    public function create()
    {
        return view('backend.shows.create');
    }

    public function edit($id)
    {
        $shows = Show::find($id);
        return view('backend.shows.edit', compact('shows'));
    }

    public function file($type)
    {
        switch ($type) {
            case 'upload':
                return $this->upload();
        }

        return \Response::make('success', 200, [
            'Content-Disposition' => 'inline',
        ]);
    }

    public function upload()
    {
        if (request()->file('image')) {
            $file = request()->file('image');

            $filename = md5(time() . rand(1, 100000)) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path() . '/uploads', $filename);

            return \Response::make('/uploads/' . $filename, 200, [
                'Content-Disposition' => 'inline',
            ]);

        }
    }

    public function delete($id)
    {
        $shows = Show::find($id);
        $shows->delete();
        return redirect('/shows');
    }

    public function store()
    {
        $data = request()->all();
        $shows = new Show();
        $shows->title = $data['title'];
        $shows->description = $data['description'];
        $shows->image = $data['image'];
        $shows->save();
        return redirect('/shows');
    }

    public function update()
    {
        $data = request()->all();
        $shows = Show::find($data['id']);
        $shows->title = $data['title'];
        $shows->description = $data['description'];
        $shows->image = $data['image'];
        $shows->save();
        return redirect('/shows');
    }
}
