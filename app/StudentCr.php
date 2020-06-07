<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentCr extends Model
{
    protected $table = 'course_info';

    protected $fillable = [
        'course_1','course_2','course_3','course_4','course_5','course_6',
        'mark_1','mark_2','mark_3','mark_4','mark_5','mark_6',
        'credit_1','credit_2','credit_3','credit_4','credit_5','credit_6',
    ]; 
}
