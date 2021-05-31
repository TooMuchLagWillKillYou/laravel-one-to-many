<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Task;

class Employee extends Model
{
    protected $fillable = [

        'firstname',
        'lastname',
        'ral'
    ];

    public function tasks(){

        return $this->hasMany(Task::class);
    }
}
