<?php

use Illuminate\Database\Seeder;
use App\StudentInfo;

class InfoTable extends Seeder
{
    public function run()
    {
       	factory(App\StudentInfo::class, 20)->create()->each(function($u) {
    		$u->issues()->save(factory(App\StudentInfo::class)->make());
  		});
    }
}
