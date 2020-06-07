<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentUni extends Model
{
    protected $table = 'uni_info';

    protected $fillable = [
        'uni_id','uni_name','semster','pogram',
    ]; 
}
