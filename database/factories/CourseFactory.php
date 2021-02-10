<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Course::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $schedule_len = $this->faker->numberBetween(0, 5);
        $schedule = '';
        for ($i = 0; $i < $schedule_len; $i++) {
            $schedule .= $this->faker->dayOfWeek() . ', ';
        }

        return [
            'name' => $this->faker->bs(),
            'start_date' => $this->faker->dateTimeBetween('-1 years', 'now'),
            'classroom' => $this->faker->bs(),
            'length' => $this->faker->numberBetween(4, 56) . ' weeks',
            'schedule' => $schedule
        ];
    }
}
