<?php

use App\Models\Course;
use App\Models\Professor;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseProfessorRelationship extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_professor', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignIdFor(Course::class)->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignIdFor(Professor::class)->constrained()->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course_professor');
    }
}
