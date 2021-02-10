<?php

use App\Models\Course;
use App\Models\Student;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseStudentsRelationship extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_student', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignIdFor(Course::class)->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignIdFor(Student::class)->constrained()->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course_student');
    }
}
