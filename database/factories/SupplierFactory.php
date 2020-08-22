<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Supplier;
use Faker\Generator as Faker;

$factory->define(Supplier::class, function (Faker $faker) {
    return [
        'company_name' => $faker->company,
		'contact_person' => $faker->name ,                               
        'email' => $faker->unique()->safeEmail,
        'address'=>$faker->address,
        'location'=>$faker->country,
        'company_phone'=>$faker->e164PhoneNumber,
        'contact_phone'=>$faker->e164PhoneNumber,
    ];
});
