<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'title',
        'course',
        'description',
        'deadline',
        'status',
    ];

    protected $casts = [
        'deadline' => 'datetime',
    ];
}
