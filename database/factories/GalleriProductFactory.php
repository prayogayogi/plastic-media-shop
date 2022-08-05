<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class GalleriProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "product_id" => $this->faker->numberBetween(1, 5),
            "photo" => $this->faker->imageUrl(640, 480, 'animals', true)
        ];
    }
}
