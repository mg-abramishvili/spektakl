@extends('layouts.app')
@section('content')
<form action="/schedules/{{$schedules->id}}" method="post" enctype="multipart/form-data">@csrf
            @method('PUT')
            <input type="hidden" name="id" value="{{$schedules->id}}">

            <div class="row align-items-center mb-2">    
                <dt class="col-sm-3">
                    Show ID
                </dt>
                <dd class="col-sm-9">
                    <select name="show_id" class="form-control">
                        @foreach($shows as $show)
                            <option value="{{ $show->id }}" {{ ($show->id == $schedules->show_id)? 'selected="selected"' : '' }}>{{ $show->title }}</option>
                        @endforeach
                    </select>
                </dd>
            </div>

            <div class="row align-items-center mb-2">
                <dt class="col-sm-3">
                    Время
                </dt>
                <dd class="col-sm-9">
                    <input type="text" class="form-control" name="time" value="{{$schedules->time}}">
                </dd>
            </div>

            <button type="submit" class="btn btn-lg btn-success">Сохранить</button>
        </form>

    @endsection