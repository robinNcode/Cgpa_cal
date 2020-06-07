<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        RESULT
    </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    
    <style>
        .head{
            background-image: url("https://ontargetnews.com/wp-content/uploads/2020/04/Graduation-3-scaled.jpeg");
            height: 200px;
        }
    </style>
</head>
<body>
<div class=""></div>
<div class="">
    <div class="row head">
        <div class="col-1">
        </div>
        <div class="col-4">
            <center><img src="http://adovasoft.com/images/logo.jpg"></center>
        </div>
        <div class="col-6">
            <center>
                <h1 style="color: aqua" class="bg-dark"> >>> STUDENT'S RESULT<<< </h1>
            </center>
            <marquee>
                <h6 style="color: black">Please input all fields with true data to get desiered CGPA</h6>
            </marquee>
        </div>
        <div class="col-1">
        </div>
    </div>
    <div class="container">
        <form method="POST" action="#">
            {{csrf_field() }} <!--Must needed Line-->

            <div class="row pt-4">
                <div class="col-7">
                </div>
                <div class="col-4">
                    <input class="form-control" type="text" name="id" placeholder="Enter student's id here">
                    <marquee>
                        <h6 style="float:right">To get student's information with CGPA</h6>
                    </marquee>
                </div>
                <div class="col-1">
                    <button type="button" class="btn btn-outline-success">Search</button>
                </div>
            </div>
        </form>
    </div>
    <br>
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

<div class="head pt-4" style="">
</div>

<div class="footer">
    <hr style="background-color: blue;">
    <div class="text-center center-block">
        <a href="https://www.facebook.com/"><i id="social-fb" class="fab fa-facebook-square fa-3x social"></i></a>
        <a href="https://twitter.com/"><i id="social-tw" class="fab fa-twitter-square fa-3x social"></i></a>
        <a href="https://plus.google.com/"><i id="social-gp" class="fab fa-google-plus-square fa-3x social"></i></a>
        <a href="http://robin.adovasoft.com/Beginningworks/myportfolio/contactMe.html"><i id="social-em" class="fa fa-envelope-square fa-3x social"></i></a>
    </div>
    <hr style="background-color: blue;">
</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>
</html>