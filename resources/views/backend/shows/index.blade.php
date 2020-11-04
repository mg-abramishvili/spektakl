@extends('layouts.app')
@section('content')

<a href="/shows/create" class="btn btn-primary mb-4">Добавить</a>

<table class="table table-bordered table-hover">
@forelse($shows as $show)
<tr>
<td style="text-align: left; padding-left: 20px; padding-right: 20px;">
{{$show->title}}
</td>
<td style="width: 200px;">
<a href="/shows/{{$show->id}}/edit" class="btn btn-sm btn-warning">Правка</a>
<a href="/shows/delete/{{$show->id}}" class="btn btn-sm btn-danger">Удалить</a>
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
@endsection