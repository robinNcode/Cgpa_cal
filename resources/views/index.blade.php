<!doctype html>
<html lang="en">
<head>
    <title>Crud</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>

<body>

<div class="bg-info">
    <center>
        <h1 class="display-1">Information Fill Up Form</h1>
    </center>

</div>
<!-- Form -->
<form action="{{url('/proccess')}}" method="POST" class="">
    {{csrf_field() }}
    <input type="hidden" name ="id">
    <div class="container">
        <div class="form-group">
            <div class="row">
                <div class="col-4">
                    <label for="name">Name :</label>
                </div>
                <div class="col-8">
                    <input class="form-control" id="name" name="name" type="text" placeholder="Input your name" required>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <label for="Phone">Phone No :</label>
                </div>
                <div class="col-8">
                    <input class="form-control" id="Phone" name="phone" type="text" placeholder="input Phone number" required>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <label for="exampleFormControlInput1">Email address :</label>
                </div>
                <div class="col-8">
                    <input type="email" class="form-control" id="exampleFormControlInput1" name="email" placeholder="name@example.com" required>
                </div>
            </div>

        </div>
        <div style="">
            <center>
                <button type="submit" name="save" class="btn btn-success mb-2">SAVE</button>

            </center>
        </div>
    </div>
</form>
<!--Session Message -->
@php
    $lol = Session::get('message');
    if($lol){
        echo $lol.'</h2></marquee>';
        Session::put('message',null);
    }
@endphp
<!--Session Message Area -->
<div class="bg-primary">
    <center>
        <h1 class="display-1">Information table</h1>
    </center>

</div>
<table class="table table-hover table-dark">
    <thead>
    <tr>
        <th>Serial No.</th>
        <th>Name</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    @php
        $i = 1 ;
    @endphp
    @foreach( $new_info as $row )
        <tr>
            <th scope="row">{{$i++}}</th>
            <td>{{$row -> name}}</td>
            <td>{{$row -> phone}}</td>
            <td>{{$row -> email}}</td>
            <td>
                <a href="{{URL::to('/delete_info/'.$row->id) }}" type="button" class="btn btn-danger"  >Delete</a>
                <a href="{{URL::to('/update_info/'.$row->id) }}" type="button" class="btn btn-info" >Edit</a>
            </td>
        </tr>

    @endforeach
    </tbody>
</table>

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
</body>
</html>
