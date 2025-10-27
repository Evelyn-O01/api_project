<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = [
        'name',
        'semester',
        'hours_week', 
        'created_at',
        'updated_at'
    ];
    public $timestamps = true;
}
