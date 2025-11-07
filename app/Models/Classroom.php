<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    protected $fillable = [
        'name',
        'created_at',
        'updated_at'
    ];
    public $timestamps = true;
}
