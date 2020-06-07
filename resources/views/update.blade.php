<!doctype html>
<html lang="en">
<head>
    <title>Crud</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

<div class="bg-info">
    <center>
        <h1 class="display-1">Information Update Form</h1>
    </center>

</div>
<!-- Form -->
<form action="{{url('/rewrite_info',$newlol->id)}}" method="POST">
    {{csrf_field() }}
    <input type="hidden" name ="id">
    <div class="container">
        <div class="form-group">
            <div class="row">
                <div class="col-4">
                    <label for="name">Name :</label>
                </div>
                <div class="col-8">
                    <input class="form-control" value="{{$newlol->name}}" name="name" id="name" type="text" required>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <label for="Phone">Phone No :</label>
                </div>
                <div class="col-8">
                    <input class="form-control" value="{{$newlol->phone}}" name="phone" id="Phone"  type="text" required>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <label for="exampleFormControlInput1">Email address :</label>
                </div>
                <div class="col-8">
                    <input type="email" value="{{$newlol->email}}" name="email" class="form-control" id="exampleFormControlInput1" required>
                </div>
            </div>

        </div>
        <div style="">
            <center>
                <button type="submit" name="save" class="btn btn-primary mb-2">Update</button>

            </center>
        </div>
    </div>
</form>
</body>
</html>

