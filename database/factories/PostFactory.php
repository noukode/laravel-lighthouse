<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'author_id' => rand(1,10),
            'title' => $this->faker->sentence(rand(3,4)),
            'content' => $this->faker->sentence(10)
        ];
    }
}
