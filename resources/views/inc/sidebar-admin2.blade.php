<div class="wrapper">
        <div class="sidebar" data-color="blue">
            
                <!--
            
                    Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
                    Tip 2: you can also add an image using data-image tag
            
                -->
            
                    <div class="sidebar-wrapper">
                        <div class="logo">
                            <a href="/admin" class="simple-text">
                                ESMS
                            </a>
                        </div>
            
                        <ul class="nav">
                            <li >
                                <a href="/admin">
                                    <i class="pe-7s-home"></i>
                                    
                                    <p>Home</p>
                                </a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
                <div class="main-panel">
                        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
                                <div class="container">
                                    <a class="navbar-brand" href="{{ url('/') }}" style="position: absolute; left: 100px;" >
                                        ESDMS
                                    </a>
                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon" style="width:20px ;height: 20px ; background-color:white"></span>
                                    </button>
                    
                                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                        <!-- Left Side Of Navbar -->
                                        <ul class="navbar-nav mr-auto">
                    
                                        </ul>
                    
                                        <!-- Right Side Of Navbar -->
                                        <ul class="navbar-nav ml-auto">
                                            <!-- Authentication Links -->
                                            @guest
                                                <li><a class="nav-link" href="{{ route('register') }}"></a></li>
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
                            
                            
                        