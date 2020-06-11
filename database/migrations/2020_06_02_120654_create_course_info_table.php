<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_info', function (Blueprint $table) {

            $table->increments('cr_id');
            //course_name.......................................
            $table->string('course_1');
            $table->string('course_2');
            $table->string('course_3');
            $table->string('course_4');
            $table->string('course_5');
            $table->string('course_6');

            //marks..............................................
            $table->decimal('mark_1');
            $table->decimal('mark_2');
            $table->decimal('mark_3');
            $table->decimal('mark_4');
            $table->decimal('mark_5');
            $table->decimal('mark_6');

            //credits.............................................
            $table->double('credit_1');
            $table->double('credit_2');
            $table->double('credit_3');
            $table->double('credit_4');
            $table->double('credit_5');
            $table->double('credit_6');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course_info');
    }
}

