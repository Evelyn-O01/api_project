<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = [
        'name',
        'semester',
        'created_at',
        'updated_at'
    ];
    public $timestamps = true;
}
