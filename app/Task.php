<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Employee;

class Task extends Model
{
    protected $fillable = [

        'employee_id',
        'title',
        'description'
    ];

    public function employee(){

        return $this->belongsTo(Employee::class);
    }
}
