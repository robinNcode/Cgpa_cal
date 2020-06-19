<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>
            @yield('title')
        </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <style>
            .head{
            background-image: url("https://ontargetnews.com/wp-content/uploads/2020/04/Graduation-3-scaled.jpeg");
            height: 200px;
            }
        </style>
        @yield('custom_style')

    </head>
    <body>
        <nav class="navbar navbar-expand-sm navbar-dark bg-info fixed-top text-dark">
            <a class="navbar-brand" href="#">Result Checker</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent" >
                <ul class="navbar-nav mr-auto" >
                    <li class="nav-item active" style="float:right;">
                        <a class="nav-link" href="/form">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/all">All students List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.facebook.com/arrobinkhan34/">Contact Me</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>

        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

        @yield('content')


        <!-- ..................................Footer ............................................... -->
        <div class="head pt-4" style=""></div>
        <div class="footer">
            <hr style="background-color: blue;">
            <div class="text-center center-block">
                <a href="https://www.facebook.com/arrobinkhan34/"><i id="social-fb" class="fab fa-facebook-square fa-3x social"></i></a>
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

        <!--......................................Data table CDN ...................................... -->
        @yield('custom_script')
        
        
        
    </body>
</html>

