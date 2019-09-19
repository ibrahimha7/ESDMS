<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ESDMS</title>

        <link href="{{asset('css/material-dashboard.css?v=2.1.1')}}" rel="stylesheet" />
        <!-- CSS Just for demo purpose, don't include it in your project -->
        <link href="{{asset('demo/demo.css')}}" rel="stylesheet" />

            <!-- Styles -->
            <link href="{{ asset('css/light-bootstrap-dashboard.css') }}" rel="stylesheet">
            <!-- Bootstrap core CSS     -->
            <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />

            <!-- Animation library for notifications   -->
            <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet"/>

            <!--  Light Bootstrap Table core CSS    -->
            
            <link href="{{ asset('css/light-bootstrap-dashboard.css.css') }}" rel="stylesheet"/>


            <!--  CSS for Demo Purpose, don't include it in your project     -->
            <link href="{{ asset('css/demo.css') }}" rel="stylesheet" />


            <!--     Fonts and icons     -->
            <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
            <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
            
            <link href="{{ asset('css/pe-icon-7-stroke.css') }}" rel="stylesheet" />
    </head>
    <body>
            <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
                    <div class="container">
                        <a class="navbar-brand" href="{{ url('/') }}">
                            ESDMS
                        </a>
                        
        
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <!-- Left Side Of Navbar -->
                            <ul class="navbar-nav mr-auto">
        
                            </ul>
        
                            <!-- Right Side Of Navbar -->
                            <ul class="navbar-nav ml-auto">
                                <!-- Authentication Links -->
                                @guest
                                  
                                @else
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            {{ Auth::user()->name }} <span class="caret"></span>
                                        </a>
        
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                Logout
                                            </a>
        
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                @endguest
                            </ul>
                        </div>
                    </div>
                </nav>
                

        <div class="container" >
                <section class="jumbotron text-center" style="background-image:url(../img/exam5.jpg) ; background-position: center ;background-size: cover ">
                        <div class="container" >
                                <div class="content">
                                        <section  >
        
                                                <div style="color:white ">
                                                    <div class="card" style="background-color:#38006b;opacity: 0.8; filter: alpha(opacity=50);  padding: 10px;">
                                                    <h1 class="display-3" style="color:white"> Exam Scheduling System (ESDMS)</h1>
                                                </div>
                                                    <br>
                                                    <br>
                                                    
                                                    <div class="card-body" >
                                                            <a class="btn btn-primary btn-lg btn-block" href="{{ route('admin.login') }}">
                                                                    <h4 class="pe-7s-user">           | Admin Login</h4>
                                                                         </a>
                                                            <a class="btn btn-danger btn-lg btn-block" href="{{ route('supervisor.login') }}">
                                                                    <h4 class="pe-7s-users">           | Lecturer Login</h4>
                                                            </a>
                                                            

                                                          </div>
                                                          

                                                </div>
                                            </section>
                                     
                    
                                             

                                                      
                        
        
        
        
        </div>
        </div>
    </body>
</html>
