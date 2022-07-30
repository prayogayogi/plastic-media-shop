<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->randomElement(["Plastik kantong", "Plastik Es", "Plastik Tanaman", "Plastik Polibek", "Plastik Es", "Plastik Galon", "Plastik Loundry"]);
        return [
            "name" => $name,
            "slug" => Str::slug($name)
        ];
    }
}
