<?php

use Illuminate\Support\Facades\Route;


//Route::get('/form/{name}','FrontEnd@show');
// Route::get('/form','FrontEnd@index');
// Route::post('/proccess','FrontEnd@proccess');
// Route::get('/delete_info/{id}','FrontEnd@delete_info');
// Route::get('/update_info/{id}','FrontEnd@update_info');
// Route::post('/rewrite_info/{id}','FrontEnd@rewrite_info');


//Route::get('/vari/{name}','demo@show');

//cgpa area
// Route::get('cgpa','StudentModel@form');
// Route::get('home','StudentModel@form');
// Route::get('result/user/{lol_id}/university/{uni_info}/course/{cr_info}','StudentModel@result');
// Route::match(['get','post'], 'doing','StudentModel@doing');
//Route::match(['get','post'],'doing','StudentModel@doing')->name('insert');

// .............................. Using Resource Controller Here ....................................

Route::resource('/','CgpaController');
Route::post('store','CgpaController@store')->name('ajaxdata.postdata');
Route::get('/showing/{id}','CgpaController@show');
Route::get('/editing/{id}/edit','CgpaController@edit');
Route::put('/updating/{id}','CgpaController@update')->where('id', '[\d]+');
Route::delete('/deleting/{id}','CgpaController@destroy');
Route::get('all/student','CgpaController@allJson')->name('allJson');

Route::get('/form','CgpaController@create');
Route::get('all','StudentModel@all');

            
        