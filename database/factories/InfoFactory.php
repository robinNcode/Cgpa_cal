<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\StudentInfo;
use Faker\Generator as Faker;

$factory->define(App\StudentInfo::class, function (Faker\Generator $faker) {
    return [
    	'name' => $faker -> name,
    	'email' => $faker -> email,
    	'phone' => $faker -> phone,
    ];
});