
@extends('cgpaTest.layout')

@section('title')
    All students details - Cgpa Calculator
@endsection

@section('content')



         <div class="container">
         <legend class="bg-primary">
            <center><i class="fas fa-fw fa-briefcase"></i>All Student Details</center>
         </legend>
         <div class="card-body border border-primary">
            <fieldset>
               <table class="table table-hover display nowrap " id="example" style="width:100%">
                  <thead>
                     <tr>
                        <th>Serial No.</th>
                        <th>Student Name</th>
                        <th>Phone Number</th>
                        <th> Email</th>
                     </tr>
                  </thead>
                  <tbody>
                    
                        @php
                            $i = 1 ;
                        @endphp
                        @foreach($new_info as $row )
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $row -> name }}</td>
                            <td>{{ $row -> phone }}</td>
                            <td>{{ $row -> email }}</td> 
                        </tr>
                        @endforeach

                  </tbody>
                  
               </table>
            </fieldset>
         </div>
      </div>
      <div class="container pt-4">
         <legend class="bg-primary">
            <center><i class="fas fa-fw fa-briefcase"></i>Course Details</center>
         </legend>
         <div class="card-body border border-primary">
            <fieldset>
            </fieldset>
         </div>
         <div class="card-footer pt-4">
            <div class="row">
               <div class="col-12 text-center">
                  <a href ="/form" type="submit" class="btn btn-outline-warning">Go Back
                  </a>
               </div>
            </div>
         </div>
   </div>
</div>
</div>
</div>
</div>


@endsection