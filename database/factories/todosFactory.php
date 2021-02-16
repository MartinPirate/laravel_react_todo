<?php

    /** @var \Illuminate\Database\Eloquent\Factory $factory */

    use App\Model;
    use App\Todo;
    use Faker\Generator as Faker;

    $factory->define(Todo::class, function (Faker $faker) {
        return [
            'user_id' => rand(1, 20),
            'title' => $faker->sentence,
            'description' => $faker->paragraph,
            'status' => 'pending'

        ];
    });
