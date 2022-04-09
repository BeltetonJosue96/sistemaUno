<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TablaDosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->name,
            'address'=>$this->faker->address(),
            'phone'=>$this->faker->phoneNumber,
            'category_id'=>$this->faker->numberBetween(1,10),
        ];
    }
}
