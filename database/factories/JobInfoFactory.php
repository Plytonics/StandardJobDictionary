<?php

use App\JobInfo;
use Faker\Generator as Faker;

$factory->define(JobInfo::class, function (Faker $faker) {
    return [
      'title' => $faker->jobTitle,
      'description' => $faker->bs,
      'skillreq' => $faker->catchPhrase,
      'skillreqpro' => $faker->randomDigitNotNull
    ];
});
