<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentInfo extends Model
{
    protected $table = 'info';
    
    protected $fillable = [
        'name', 'email','phone',
    ];

    protected $hidden = [
    	'created_at','updated_at'
    ];

}
