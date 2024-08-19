<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Activity>
 */
class ActivityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $array = ['act1', 'act2', 'act3', 'act4', 'act5', 'act6', 'act7', 'act8'];
        return [

            'type' => $this->faker->randomElement($array),
            'description' => $this->faker->sentence(),
            'user_id' => User::factory(),

        ];
    }
    public function usered(): static
    {
        return $this->state(fn(array $attributes) => [
            'user_id' => '4',
        ]);
    }
}
