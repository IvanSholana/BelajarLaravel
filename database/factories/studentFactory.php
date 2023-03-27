<?php

namespace Database\Factories;

use Faker\Factory as fakedata;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\student>
 */
class studentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = fakedata::create();
        return [
            'Nama_Lengkap' => $faker->name(),
            'Jenis_Kelamin' => Arr::random(['L', 'P']),
            'Umur' => mt_rand(20, 25),
            'NIM' => 1203210000 + mt_rand(30, 35),
        ];
    }
}
