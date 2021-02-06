<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Student::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'birthday_date' => $this->faker->dateTimeBetween('-80 years', '-15 years'),
            'join_date' => $this->faker->dateTimeBetween('-3 years', 'now'),
            'phone' => $this->faker->phoneNumber(),
            'email' => $this->faker->safeEmail()
        ];
    }
}
