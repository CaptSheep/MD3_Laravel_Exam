<?php

namespace Database\Factories;

use App\Models\Dealers;
use App\Models\Status;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dealers>
 */
class DealersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->name,
            'phoneNumber'=>$this->faker->phoneNumber,
            'email'=>$this->faker->safeEmail,
            'address'=>$this->faker->address,
            'owner'=>$this->faker->name,
            'status_id'=>Status::all()->random()->id
        ];
    }
}
