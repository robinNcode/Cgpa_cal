<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;
session_start();

class FrontEnd extends Controller
{
    public function show($name)
    {
        $var = [
            '1st' => 'Helloo world',
            '2nd' => 'This is my 1st WebPage'
        ];

        return view('index',['name' => $var[$name] ]);
    }
    public function index(){
        $info = DB::table('tbl_info')->get();

        return view('index')->with('new_info',$info);
    }
    //To insert data in database....!
    public function proccess(Request $take)
    {
        //echo "Action Complete Boss.....!";
        $data = array();
        $data['name'] = $take -> name;
        $data['phone'] = $take -> phone;
        $data['email'] = $take -> email;

        DB::table('tbl_info')->insert($data);
        Session::put('message','<marquee><h2 class="text-success">Information Saved Successfully !!!</h2></marquee>');
        return Redirect::to('/form');
    }
    //To delete from database....!
    public function delete_info($id)
    {
        DB::table('tbl_info')->where('id',$id)->delete();
        Session::put('message','<marquee><h2 class="text-danger">Deleted Successfully !</h2></marquee>');
        return Redirect::to('/form');
    }

    //To update from database....!
    public function update_info($id)
    {
        $lol = DB::table('tbl_info')->where('id',$id)->first();
        return view('update')->with('newlol',$lol);
    }

    public function rewrite_info(Request $give,$id)
    {
        //echo "Action Complete Boss.....!";
        $data = array();
        $data['name'] = $give -> name;
        $data['phone'] = $give -> phone;
        $data['email'] = $give -> email;

        //echo "</pre";
        //print_r($data);

        DB::table('tbl_info')->where('id',$id)->update($data);

        Session::put('message','<marquee><h2 class="text-info">Updated Successfully !!!</h2></marquee>');
        return Redirect::to('/form');
    }
}
