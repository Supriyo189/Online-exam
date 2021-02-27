<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Responsive Homepage design with Bootstrap and Animate css</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.6.2/animate.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('public/coverpage_asset/final-cover-page')}}/style.css">    

</head>
<body>

    <header>
        <nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{action('Coverpage\CoverpageController@coverpage')}}">EXAMON</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="{{action('Coverpage\CoverpageController@coverpage')}}">Home</a></li>
                        <!--<li><a href="#">ABOUT-US</a></li>-->
                        @if (isset(Auth::user()->email))
                        <li><a href="{{ action('DashboardController@dashboard') }}">Dashboard</a></li>
                        @else
                        <li><a href="{{ route('login') }}">LOG-IN</a></li>
                        <li><a href="{{action('RegistrationController@registration')}}">SIGN-UP</a></li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>


        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">           
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <div class="banner" style="background-image: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)),url({{asset('public/coverpage_asset/img/img2.jpg')}});"></div>
                    <div class="carousel-caption">
                        <h2 class="animated bounceInRight" style="animation-delay: 1s"> EXAMON <span></span></h2>
                        <p class="animated bounceInLeft" style="animation-delay: 2s; font-size: 20px;">
                            Online examination referred as e-examination,are the examination conducted through the internet 
                            or in an intarnet for a remote candidate. The system will have the ability to automatically process 
                            the results of examination based on the question database. This is a dynamic exam portam so anyone 
                            can be able to create examinations by composing a set of questions. Once logged in, students will be 
                            able to see the examination due and can take the examination. The system will present a easy to use 
                            interface for Teachers, Students and Administrators.
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </header>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
