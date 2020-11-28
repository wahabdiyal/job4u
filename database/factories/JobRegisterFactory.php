<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\JobRegister;
use Illuminate\Database\Eloquent\Factories\Factory;

class JobRegisterFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = JobRegister::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
             'job_title' => $this->faker->title,
             'job_skill' =>$this->faker->company,
            'posting_date' => now(),
            'city' => $this->faker->city,
            'disctrict' => $this->faker->state,
            'country' => Str::random(5),
            'role_user' => 1,
            'industry' => 'computer',
            'type' => Str::random(5),
            'area' => Str::random(5),
            'employment_type' => Str::random(5),
            'role_category' => Str::random(5),
            'education' => Str::random(5),
            'company_id' => rand(1,10),
            'job_description' => Str::random(50),
           
            // 'email' => $this->faker->unique()->safeEmail,
            // 'active_deactive' => (rand(0,1) == 1) ?'active':'pending',
            // 'registration_date' => now(), 
        ];
    }
}
