<?php

namespace Database\Factories;
use Faker\Provider\it_IT\Payment as ItPayment;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'),
            'name' => fake()->name(),
            'address' => fake()->unique()->address(),
            'vat_id' => fake()->unique()->numerify('IT###########'),
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }

    /**
     * Define a state with custom data for the user.
     *
     * @param  string  $email
     * @param  string  $name
     * @param  string  $address
     * @param  string  $vat_id
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function withCustomData($email, $name, $address, $vat_id)
    {
        return $this->state(function (array $attributes) use ($email, $name, $address, $vat_id) {
            return [
                'email' => $email,
                'name' => $name,
                'address' => $address,
                'vat_id' => $vat_id,
            ];
        });
    }
}
