<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mahasiswa>
 */
class MahasiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $numberend = fake()->unique()->numberBetween(1, 999);
        $numberend = str_pad($numberend, 3, '0', STR_PAD_LEFT);
        return [
            //
            'nama' => fake()->name(),
            'nim' => "2255201" . $numberend,
            'class_mahasiswa_id' => mt_rand(1,6),
            'tempat'=> fake()->city,
            'lahir' => fake()->date()

        ];
    }
}
