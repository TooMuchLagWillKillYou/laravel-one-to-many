<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [

        'employee_id',
        'title',
        'description'
    ];
}
