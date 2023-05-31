<?php

namespace Database\Factories;
use App\Models\User;
use Faker\Provider\ar_EG\Address;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'user' => fake()->randomElement(User::all()->pluck('id')->toArray()),
        'address' => fake()->streetAddress(),
        'number' => fake()->randomNumber(4),
        'complement' => fake()->streetName(),
        'zipcode' => fake()->postcode(),
        'city' => fake()->city(),
        'state' => fake()->city(),
        'status' => rand(0, 1)
        ];
    }
}
