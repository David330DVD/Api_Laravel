<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    protected $table = 'tasks';
    protected $fillable = ['name', 'due_date', 'completion_date', 'completed'];
}
