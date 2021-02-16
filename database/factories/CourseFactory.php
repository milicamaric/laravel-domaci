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
        $days = array('Mon', 'Tue', 'Wed', 'Thu', 'Fri');
        // baci kocku za broj dana u nedelji kada se drzi cas
        $schedule_len = $this->faker->numberBetween(1, 5);
        // inicijalizuj promenljivu
        $schedule = array();
        for ($i = 0; $i < $schedule_len; $i++) {
            $random = random_int(1, count($days)) - 1;
            $chosen = array_splice($days, $random, 1);
            array_push($schedule, array_pop($chosen));
        }

        return [
            'name' => $this->faker->bs(),
            'start_date' => $this->faker->dateTimeBetween('-1 years', 'now'),
            'classroom' => $this->faker->bs(),
            'length' => $this->faker->numberBetween(4, 56) . ' weeks',
            'schedule' => implode(", ", $schedule)
        ];
    }
}
