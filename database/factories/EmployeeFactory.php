<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\employee;

class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
           "name"=> $this->faker->name(),
            "job_title"=> $this->faker->jobTitle(),
            'joining_date'=>$this->faker->date(),
            'salary'=>$this->faker->randomFloat($nbMaxDecimals = 2, $min = 1000, $max = 10000),
            "email"=> $this->faker->safeEmail(),
            "mobile_no"=> $this->faker->phoneNumber(),
            "address"=> $this->faker->address()
        ];
    }
}
