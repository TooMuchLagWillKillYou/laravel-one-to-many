<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Task;
use Faker\Generator as Faker;

$factory->define(Task::class, function (Faker $faker) {
    return [
        
        'employee_id' => $faker -> randomDigit,
        'title' => $faker -> word,
        'description' => $faker -> sentence
    ];
});
