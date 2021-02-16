<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Course::factory()
            ->count(10)
            ->state(new Sequence(
                ['classroom' => 'black',  'name' => 'guitar1'],
                ['classroom' => 'red',    'name' => 'guitar2'],
                ['classroom' => 'blue',   'name' => 'guitar3'],
                ['classroom' => 'white',  'name' => 'drums1'],
                ['classroom' => 'green',  'name' => 'drums2'],
                ['classroom' => 'gray',   'name' => 'drums3'],
                ['classroom' => 'yellow', 'name' => 'piano1'],
                ['classroom' => 'purple', 'name' => 'piano2'],
                ['classroom' => 'pink',   'name' => 'piano3'],
                ['classroom' => 'brown',  'name' => 'theory1'],
            ))
            ->hasProfessor()
            ->hasStudents(30)
            ->create();
    }
}
