<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Validation\Rules\Unique;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ClassMahasiswa>
 */
class ClassMahasiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $elements = ['a', 'b', 'c', 'd'];
        $combinations = [];
        $index = 0;

        foreach ($elements as $element) {
            for ($i = 1; $i <= 2; $i++) {
                $uniqueString = STR::upper($element) . $i;
                $combinations[] = $uniqueString;
            }
        }
        return [
            //
            'kelas' => fake()->unique()->randomElement($combinations)

        ];
    }
}
