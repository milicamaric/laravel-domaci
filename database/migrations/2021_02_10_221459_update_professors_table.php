<?php

use App\Models\Course;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateProfessorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('professors', function (Blueprint $table) {
            $table->char('first_name', 32);
            $table->char('last_name', 32);
            $table->date('birthday_date');
            $table->date('join_date');
            $table->char('phone', 20);
            $table->char('email', 64);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('professors', function (Blueprint $table) {
            $table->dropColumn('first_name');
            $table->dropColumn('last_name');
            $table->dropColumn('birthday_date');
            $table->dropColumn('join_date');
            $table->dropColumn('phone');
            $table->dropColumn('email');
        });
    }
}
