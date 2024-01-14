<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class SectionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->  unique() -> randomElement(['طب الأسنان','قسم الجراحة','قسم العظام','قسم القلب','الطب النفسي']),
        'name_en' => $this->faker-> unique() ->randomElement(['Dental medicine','Department of Surgery','Orthopedic department','Department of the heart','Psychiatry']),
            'description' => $this->faker->text,



        ];
    }
}
