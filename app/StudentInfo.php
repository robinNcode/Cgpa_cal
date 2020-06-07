<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentInfo extends Model
{
    protected $table = 'info';
    
    protected $fillable = [
        'name', 'email','phone',
    ];

}
