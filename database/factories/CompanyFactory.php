<?php

namespace Database\Factories;
use Illuminate\Support\Str;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Company::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
             'password' => md5('123456'),
            'email' => $this->faker->unique()->safeEmail,
            'active_deactive' => (rand(0,1) == 1) ?'active':'pending',
            'registration_date' => now(), 
            'mobile_number' => Str::random(5),
            'company_website' => Str::random(5),
            'company_size' => rand(10,99),
            'address' => Str::random(5),
            'company_type' => Str::random(5),
            'detail' => Str::random(20),
        ];
    }
}
