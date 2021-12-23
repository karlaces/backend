<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

class UserDomicilioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory()->create()->id,
            'domicilio' => $this->faker->address(),
            'numero_exterior' =>$this->faker->numerify() ,
            'colonia' =>  $this->faker->address(),
            'cp' => $this->faker->numerify(),
            'ciudad' => $this->faker->city(),

        ];
    }
}
