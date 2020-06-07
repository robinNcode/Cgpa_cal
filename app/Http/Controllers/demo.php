<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class demo extends Controller
{
    public function show($name)
    {
    	$var = [
    		'1st' => 'Helloo world',
    		'2nd' => 'This is my 1st WebPage'
    	];

    	return view('vari',['name' => $var[$name] ]);
    } 
    
}
