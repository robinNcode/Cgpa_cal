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
</html><!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        Form
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
                <h1 style="color: aqua" class="bg-dark"> >>> STUDENT'S FORM <<< </h1>
            </center>
            <marquee>
                <h6 style="color: black">Please input all fields with true data to get desiered CGPA</h6>
            </marquee>
        </div>
        <div class="col-1">
        </div>
    </div>
    
    <br>
    <form method="POST" action="{{url('doing')}}">
        {{ csrf_field() }}
        <div class="container">
            <legend class="bg-primary">
                <center><i class="fas fa-fw fa-briefcase"></i>Student Details</center>
            </legend>
            <div class="card-body border border-primary">
                <fieldset>
                    <!--name -->
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="name_id">Name:
                            <span class="text-danger font-weight-bold">*</span> </label>
                        <div class="col-md-7">
                            <input class="form-control" type="text" name="name" id="name_id" placeholder="Your Name"  />
                        </div>
                    </div>
                    <!--Varsity Id-->
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="var_id">University ID:
                            <span class="text-danger font-weight-bold">*</span> </label>
                        <div class="col-md-7">
                            <input class="form-control" type="text" name="uni_id" id="var_id" placeholder="Your varsity ID No.."  />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="program_id">
                            Program:
                            <span class="text-danger font-weight-bold">*</span>
                        </label>
                        <div class="col-md-7">
                            <select id="program_id" class="form-control" name="pogram" required="">
                                <option value="">Select a Option</option>
                                <option value="{{'B.Sc in CSE'}}">B.Sc in CSE</option>
                                <option value="{{'B.Sc in Civil'}}">B.Sc in Civil</option>
                                <option value="{{'B.Sc in EEE'}}">B.Sc in EEE</option>
                                <option value="{{'B.Sc in Mechanical'}}">B.Sc in Mechanical</option>
                                <option value="{{'B.Sc in ECE'}}">B.Sc in ECE</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="phone_id">Phone Number:
                            <span class="text-danger font-weight-bold">*</span> </label>
                        <div class="col-md-7">
                            <input class="form-control" type="text" name="phone" id="phone_id" placeholder="Please Enter your Phone number"  />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="email_id">Email ID:
                            <span class="text-danger font-weight-bold">*</span> </label>
                        <div class="col-md-7">
                            <input class="form-control" type="email" name="email" id="email_id" placeholder="Enter your Email here.."  />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="versity_id">
                            University Name:
                            <span class="text-danger font-weight-bold">*</span>
                        </label>
                        <div class="col-md-7">
                            <select id="versity_id" class="form-control" name="uni_name" required>
                                <option value="">Select a Option</option>
                                <option value="{{'Sonargaon University'}}">Sonargaon University</option>
                                <option value="{{'Institute of Science & Technology'}}">Institute of Science & Technology</option>
                                <option value="{{'City University'}}">City University</option>
                                <option value="{{'Dhaka International University'}}">Dhaka International University</option>
                                <option value="{{'World University'}}">World University</option>
                                <option value="{{'University of Dhaka'}}">University of Dhaka</option>
                                <option value="{{'University of Chittagong'}}">University of Chittagong</option>
                                
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="semester">
                            Semester:
                            <span class="text-danger font-weight-bold">*</span>
                        </label>
                        <div class="col-md-7">
                            <select id="semester_id" class="form-control" name="semster" required>
                                <option value="">Select a Option</option>
                                <option value="{{'1st'}}">1st</option>
                                <option value="{{'2nd'}}">2nd</option>
                                <option value="{{'3rd'}}">3rd</option>
                                <option value="{{'4th'}}">4th</option>
                                <option value="{{'5th'}}">5th</option>
                                <option value="{{'6th'}}">6th</option>
                                <option value="{{'7th'}}">7th</option>
                                <option value="{{'8th'}}">8th</option>
                                <option value="{{'9th'}}">9th</option>
                                <option value="{{'10th'}}">10th</option>
                                <option value="{{'11th'}}">11th</option>
                                <option value="{{'12th'}}">12th</option>
                            
                            </select>
                        </div>
                    </div>
                    
                </fieldset>
            </div>
        </div>

       <div class="container pt-4">
            <legend class="bg-primary">
                <center><i class="fas fa-fw fa-briefcase"></i>Course Details</center>
            </legend>
            <div class="card-body border border-primary">
                <fieldset>
                    <div class="form-group row">
                    
                        <div class="col-md-6">
                            <label for="category" for="course_name">Course Name:
                                <span class="text-danger font-weight-bold">*</span>
                            </label>
                            <input type="text" class="form-control" id="course_name" name="course_1" required=""><br>
                            <input type="text" class="form-control" id="course_name" name="course_2" required=""><br>
                            <input type="text" class="form-control" id="course_name" name="course_3" required=""><br>
                            <input type="text" class="form-control" id="course_name" name="course_4" required=""><br>
                            <input type="text" class="form-control" id="course_name" name="course_5" required=""><br>
                            <input type="text" class="form-control" id="course_name" name="course_6" required="">
                        </div>
                        

                        <div class="col-md-3">
                            <label for="mark">Mark:
                                <span class="text-danger font-weight-bold">*</span> </label>
                            <input type="number" step="1" min="40" max="100" id="mark" class="form-control" name="mark_1" value=""  required=""><br>
                            <input type="number" step="1" min="40" max="100" id="mark" class="form-control" name="mark_2" value=""  required=""><br>
                            <input type="number" step="1" min="40" max="100" id="mark" class="form-control" name="mark_3" value=""  required=""><br>
                            <input type="number" step="1" min="40" max="100" id="mark" class="form-control" name="mark_4" value="" required="" ><br>
                            <input type="number" step="1" min="40" max="100" id="mark" class="form-control" name="mark_5" value=""  required=""><br>
                            <input type="number" step="1" min="40" max="100" id="mark" class="form-control" name="mark_6" value=""  required="">
                        </div>
                    

                        <div class="col-md-3">
                            <label for="credit">Credit:
                                <span class="text-danger font-weight-bold">*</span> </label>
                            <input type="number" step="1" min="1" max="6" id="credit" class="form-control" name="credit_1" value="" required=""><br>
                            <input type="number" step="1" min="1" max="6" id="credit" class="form-control" name="credit_2" value="" required=""><br>
                            <input type="number" step="1" min="1" max="6" id="credit" class="form-control" name="credit_3" value="" required=""><br>
                            <input type="number" step="1" min="1" max="6" id="credit" class="form-control" name="credit_4" value="" required=""><br>
                            <input type="number" step="1" min="1" max="6" id="credit" class="form-control" name="credit_5" value="" required=""><br>
                            <input type="number" step="1" min="1" max="6" id="credit" class="form-control" name="credit_6" value="" required="">
                        </div>

                    </div>
                </fieldset>
            </div>
            <div class="card-footer pt-4">
                <div class="row">
                    <div class="col-12 text-center">
                        <button type="submit" class="btn btn-outline-warning">Go Back
                        </button>
                    </div>
                </div>
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