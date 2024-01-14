<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{

    public function definition(): array
    {
        return [

            'name' => $this->faker->name,
            'name_en' => $this->faker->name,
            'price' => $this->faker->numberBetween(500,1500),
            'description' => $this->faker->paragraph,



        ];
    }
}
