<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    protected static ?string $password;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'), // mot de passe par défaut "password"
            'remember_token' => Str::random(10),

            // Champs supplémentaires
            'phone' => $this->faker->phoneNumber(),
            'job' => $this->faker->jobTitle(),
            'company' => $this->faker->company(),
            'address' => $this->faker->address(),
            'role' => $this->faker->randomElement(['user', 'manager', 'lead']),
            'status' => $this->faker->randomElement(['active', 'inactive', 'pending']),
            'created_at' => now(),
'updated_at' => now(),
        ];
    }

    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
