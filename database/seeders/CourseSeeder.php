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
                ['name' => 'guitar1'],
                ['name' => 'guitar2'],
                ['name' => 'guitar3'],
                ['name' => 'drums1'],
                ['name' => 'drums2'],
                ['name' => 'drums3'],
                ['name' => 'piano1'],
                ['name' => 'piano2'],
                ['name' => 'piano3'],
                ['name' => 'theory1'],
            ))
            ->hasProfessor()
            ->hasStudents(30)
            ->create();
    }
}
