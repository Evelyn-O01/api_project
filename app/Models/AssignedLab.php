<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssignedLab extends Model
{
    use HasFactory;

    protected $table = 'assigned_labs';

    protected $fillable = [
        'laboratory_id',
        'subject_id',
        'group_id',
        'teacher_id',
        'cycle_id',
        'assignment_priority',
    ];

    // Relaciones (opcional si luego quieres cargar datos relacionados)
    public function laboratory()
    {
        return $this->belongsTo(Laboratory::class);
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function group()
    {
        return $this->belongsTo(Group::class);
    }

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }

    //public function cycle()
    //{
        //return $this->belongsTo(Cycle::class);
    //}
}
