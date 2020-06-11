<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schema;

class CreateEduSscLevelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('edu_ssc_levels', function (Blueprint $table) {

            $table->increments('id');
            $table->bigInteger('people_id');
            $table->exam_level_id();
            $table->board_id();
            $table->group_id();
            $table->string('roll');
            $table->pass_year();
            $table->result_type();
            $table->float('gpa_result');

            $table->timestampsTz();
            $table->softDeletesTz();
        });

        Artisan::call('db:seed', array('--class' => 'EduSscLevelSeeder'));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('edu_ssc_levels');
    }
}
