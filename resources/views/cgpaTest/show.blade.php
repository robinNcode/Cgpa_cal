@extends('cgpaTest.layout')

@section('title')
    Student details - Cgpa Calculator
@endsection

@section('content')


    <form method="POST" action="{{url('doing')}}">
        {{ csrf_field() }}
        <div class="container shadow p-3 mb-5 bg-white rounded">
            <legend class="bg-primary">
                <center><i class="fas fa-fw fa-briefcase"></i>Student Details</center>
            </legend>
            <div class="card-body border border-primary ">
                <fieldset>
                    <table class="table table-hover">
                        <tbody >
                            <?php
                                 echo "<pre>"; 
                                // //return response ()->json($stud_info);
                                 //var_dump($info);
                                 //var_dump($uni_info);
                                 //var_dump($cr_info);
                            ?>
                            <tr>
                                <b><td>Name</td></b>
                                <b><td>:</td></b>
                                <td>{{ $info->name }}</td>
                            </tr>
                            <tr>
                                <b><td>University ID</td></b>
                                <b><td>:</td></b>
                                <td>{{ $uni_info -> uni_id }}</td>
                            </tr>
                            <tr>
                                <b><td>University Name</td></b>
                                <b><td>:</td></b>
                                <td>{{ $uni_info -> uni_name }}</td>
                            </tr>
                            <tr>
                                <b><td>Program</td></b>
                                <b><td>:</td></b>
                                <td>{{ $uni_info -> pogram }}</td>
                            </tr>
                            <tr>
                                <b><td>Semester</td></b>
                                <b><td>:</td></b>
                                <td>{{ $uni_info -> semster }}</td>
                            </tr>
                            <tr>
                                <b><td>Phone</td></b>
                                <b><td>:</td></b>
                                <td>{{ $info -> phone }}</td>
                            </tr>
                            <tr>
                                <b><td>Email</td></b>
                                <b><td>:</td></b>
                                <td>{{ $info -> email }}</td>
                            </tr>
                        </tbody>
                    </table>
                </fieldset>
            </div>
        </div>
       <div class="container pt-4 shadow p-3 mb-5 bg-white rounded" >
            <legend class="bg-primary">
                <center><i class="fas fa-fw fa-briefcase"></i>Course Details</center>
            </legend>
            <div class="card-body border border-primary">
                <fieldset>
                    <table class="table table-hover ">
                        <tbody>
                            <tr>
                                <th colspan="2">Course Name</th>
                                <th>Marks</th>
                                <th>Credits</th>
                            </tr>
                        
                            <tr>
                                <td colspan="2">{{$cr_info -> course_1}}</td>
                                <td>{{$cr_info -> mark_1}}</td>
                                <td>{{$cr_info -> credit_1}}</td>
                            </tr>
                            <tr>
                                <td colspan="2">{{$cr_info -> course_2}}</td>
                                <td>{{$cr_info -> mark_2}}</td>
                                <td>{{$cr_info -> credit_2}}</td>
                            </tr>
                            <tr>
                                <td colspan="2">{{$cr_info -> course_3}}</td>
                                <td>{{$cr_info -> mark_3}}</td>
                                <td>{{$cr_info -> credit_3}}</td>
                            </tr>
                            <tr>
                                <td colspan="2">{{$cr_info -> course_4 }}</td>
                                <td>{{$cr_info -> mark_4 }}</td>
                                <td>{{$cr_info -> credit_4 }}</td>
                            </tr>
                            <tr>
                                <td colspan="2">{{$cr_info -> course_5 }}</td>
                                <td>{{$cr_info -> mark_5 }}</td>
                                <td>{{$cr_info -> credit_5 }}</td>
                            </tr>
                            <tr>
                                <td colspan="2">{{$cr_info -> course_6}}</td>
                                <td>{{$cr_info -> mark_6}}</td>
                                <td>{{$cr_info -> credit_6}}</td>
                            </tr>
                    
                        </tbody>
                    </table>
                </fieldset>
            </div>
            <div class="card-footer pt-4">
                <h5>Want to check CGPA again,then click the button ->
                    <a href="{{'home'}}" class="btn btn-outline-info">Check Again
                    </a></h5>
            </div>
    </form>
</div>
</div>
</div>
</div>
</div>

@endsection