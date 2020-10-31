<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Show extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
    ];

    public function schedule()
    {
        return $this->hasMany('App\Models\Schedule', 'show_id', 'id');
    }
}
