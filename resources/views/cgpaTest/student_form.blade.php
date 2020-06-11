@extends('cgpaTest.layout')

@section('title')
    Students Form - Cgpa Calculator
@endsection

@section('content')




    <center>
        <h1 style="color: aqua"> >>> STUDENT'S FORM <<< </h1>
    </center>
<br>
<br>
<br>

    <form method="POST" action="{{url('store')}}">
        @csrf 
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
                        <button type="submit" class="btn btn-outline-warning">Submit
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


@endsection