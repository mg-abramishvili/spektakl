<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'show_id', 'time',
    ];

    public function ticket()
    {
        return $this->hasMany('App\Models\Ticket', 'schedule_id', 'id');
    }

    public function show()
    {
        return $this->belongsTo('App\Models\Show', 'show_id', 'id');
    }
}
