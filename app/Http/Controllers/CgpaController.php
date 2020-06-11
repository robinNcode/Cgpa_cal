<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;
use Session;
session_start();
use DB;

//Calling model here
use App\StudentInfo;
use App\StudentUni;
use App\StudentCr;


class CgpaController extends Controller
{
    /**
     * Display a listing of the resource.
          */
    public function index()
    {
        //Render list / data 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cgpaTest.student_form');
    }

    public function store(Request $take)
    {
        

        //validation for all data.............................................
        //dd($_REQUEST);

        $validateData = (object)$take -> validate([
            
            'name' => 'required|max:25|min:4',
            'email' => 'required',
            'phone' => 'required|max:11|min:4',

            'uni_name' => 'required|max:50|min:2',
            'uni_id' => 'required|max:25|min:2',
            'pogram' => 'required|max:50|min:2',
            'semster' => 'required|max:5|min:2',
        ]);

        //data will insert into info table
        $info = new StudentInfo;

        $info -> name = $validateData -> name;
        $info -> email = $validateData -> email;
        $info -> phone = $validateData -> phone;
      
        $info -> save(); //insert query


        //data will insert into University info table...........................
        $uni_info = new StudentUni;

        $uni_info -> uni_id = $validateData -> uni_id;
        $uni_info -> uni_name = $validateData -> uni_name;
        $uni_info -> pogram = $validateData -> pogram;
        $uni_info -> semster = $validateData -> semster;

        $uni_info -> save(); //insert query

        //data will insert into Course info table................................
        $cr_info = new StudentCr;

        $cr_info -> course_1 = $take -> course_1;
        $cr_info -> course_2 = $take -> course_2;
        $cr_info -> course_3 = $take -> course_3;
        $cr_info -> course_4 = $take -> course_4;
        $cr_info -> course_5 = $take -> course_5;
        $cr_info -> course_6 = $take -> course_6;

        $cr_info -> mark_1 = $take -> mark_1;
        $cr_info -> mark_2 = $take -> mark_2;
        $cr_info -> mark_3 = $take -> mark_3;
        $cr_info -> mark_4 = $take -> mark_4;
        $cr_info -> mark_5 = $take -> mark_5;
        $cr_info -> mark_6 = $take -> mark_6;

        $cr_info -> credit_1 = $take -> credit_1;
        $cr_info -> credit_2 = $take -> credit_2;
        $cr_info -> credit_3 = $take -> credit_3;
        $cr_info -> credit_4 = $take -> credit_4;
        $cr_info -> credit_5 = $take -> credit_5;
        $cr_info -> credit_6 = $take -> credit_6;

        $cr_info -> save(); //insert query

        //$cr_info->insert_id();
        //echo 'action working....';
        dd($_REQUEST);

        //return Redirect::to('result/user/' . $info->id . '/university/' .$uni_info->id . '/course/' . $cr_info->id);
    }

    
    public function show($info_id , $uni_info , $cr_info)
    {
         //echo $info_id .' =>'. $uni_info .' =>'. $cr_info;
        
        //$uni_info = StudentUni :: latest()->first()
        //$cr_info = StudentCr :: latest()->first();
        // $info = StudentInfo :: find($user_id)->get();
        //return view('show', ['info' => $info]);


        //Getting Data From 3 tables.....................................................

        $info = DB::table('info')->find($info_id);
        $uni_info = DB::table('uni_info')->find($uni_info);
        $cr_info = DB::table('course_info')->where('cr_id',$cr_info)->first();
        // return view('show')->with('new_info',$info);
            
        // //return response()->json($uni_info);
        return view('show',compact('info','uni_info','cr_info'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
    }

    /*
     * Remove the specified resource from storage.
     *
     */
    public function destroy($id)
    {
        //
    }
}
