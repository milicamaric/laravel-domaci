<?php

namespace Database\Factories;

use App\Models\Professor;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProfessorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Professor::class;

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
            'birthday_date' => $this->faker->dateTimeBetween('-80 years', '-30 years'),
            'join_date' => $this->faker->dateTimeBetween('-10 years', '-1 years'),
            'phone' => $this->faker->phoneNumber(),
            'email' => $this->faker->safeEmail()
        ];
    }
}
