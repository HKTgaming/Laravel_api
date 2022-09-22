<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\CustomerModel;
use Faker\Generator as Faker;

$factory->define(CustomerModel::class, function (Faker $faker) {
    return [
        'name_customer' =>$faker->firstname,
        'phone_customer' =>$faker->phoneNumber,
        'address_customer' =>$faker->address,
        'email_customer' =>$faker->unique()->safeEmail,
        'city_customer' =>$faker->city
    ];
});
