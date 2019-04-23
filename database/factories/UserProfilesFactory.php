<?php

use App\UserProfiles;
use Faker\Generator as Faker;

$factory->define(UserProfiles::class, function (Faker $faker) {
    return [
      'firstname' => $faker->firstName,
      'lastname' => $faker->lastName,
      'skill' => $faker->catchPhrase,
      'skillpro' => $faker->randomDigitNotNull
    ];
});
