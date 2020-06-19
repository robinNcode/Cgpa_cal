<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;
use Session;
session_start();
use DB;
use Yajra\DataTables\DataTables;

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
        //return view ('cgpaTest.allJson');
        return view ('cgpaTest.allJson');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cgpaTest.student_form');
    }

     /**
     * Store the data into resource.
     */

    public function store(Request $take)
    {
        
        //return view('cgpaTest.student_form');
        // return response()->json($take);

        //validation for all data.............................................
        //dd($_REQUEST);

        $validateData = (object)$take -> validate([
            
            'name' => 'required|max:25|min:4',
            'email' => 'required',
            'phone' => 'required|max:11|min:4',
        ]);

        //data will insert into info table ....................................
        $info = new StudentInfo;

        $info->name = $validateData->name;
        $info->email = $validateData->email;
        $info->phone = $validateData->phone;
      
        if($info->save()) {
            return  response()->json([
                'status'=>true
            ]);
        } 
        else{
            return  response()->json([
                'status'=>false
            ]);
        }
    }

    /**
     * Show the view from the specified resource.
     */
    public function show($id)
    {
        $id = StudentInfo::find($id);
        return $id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     */
    public function edit($id)
    {
        $id = StudentInfo::find($id);
        return $id;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $info = StudentInfo::find($id);
        
        $info->name = $request->name;
        $info->email = $request->email;
        $info->phone = $request->phone;

        if($info->update()) {
            return  response()->json([
                'status' => true
            ]);
        } 
        else{
            return  response()->json([
                'status' => false
            ]);
        }
    }


    /*
     * Remove the specified resource from storage.
     *
     */
    public function destroy($id)
    {

        if(StudentInfo::find($id)->delete()) {
            return  response()->json([
                'status'=>true
            ]);
        } 
        else{
            return  response()->json([
                'status'=>false
            ]);
        }

    }

    /*
     *
     *Read Data As JSON formate
     */

    public function allJson(){

        $info = StudentInfo::all();
        //echo "<pre>";
        //print_r($info);
        //exit();
        return DataTables::of($info)
               ->addColumn('action', function($obj){
                return  '<a onclick="showData('.$obj->id .')" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a> '.
                        '<a onclick="editData('.$obj->id .')" class="btn btn-warning btn-sm"><i class="fas fa-user-edit"></i></a> '.
                        '<a onclick="deleteData('.$obj->id .')" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>';
                           })->make(true);
    }
}
