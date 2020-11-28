<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'phone' => rand(1000000,10000000000),
            'email' => $this->faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'password' => md5('password'), // password
            'remember_token' => Str::random(10),
        ];
    }
}
