<html>
<head>
    <title>Brothers Plastic Company</title>
    <link rel="stylesheet" href="{{ asset('admin/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('admin/bower_components/font-awesome/css/font-awesome.min.css') }}">

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" id="bootstrap-css">
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/design.css') }}" />
    <!-- Ionicons -->
</head>
<body>





<nav class="navbar navbar-expand-lg navbar-dark bg-primary" style="padding-bottom:0px;">
    <a class="navbar-brand" href="#">
       <h1>Brother Plastic Company</h1>

    </a>


    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto link1">

            @if(isset(auth()->user()->id))
                <li class="nav-item">
                    <a class="nav-link" style="font-size:16px;" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><h1 class="logout1">Logout</h1></a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" style="font-size:16px;" href="{{ url('/') }}"><h2 class="customh2">Home</h2></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" style="font-size:16px;" href="{{ url('aboutus') }}"><h2 class="customh2">About Us</h2></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" style="font-size:16px;" href="{{ url('help') }}"><h2 class="customh2">Help</h2></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" style="font-size:16px;" href="{{ url('contactus') }}"><h2 class="customh2">Suggestion</h2></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" style="font-size:16px;" href="{{ url('login') }}"><h2 class="customh2">Login</h2></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" style="font-size:16px;" href="{{ url('register') }}"><h2 class="customh2" color="black">Register</h2></a>
                </li>
            @endif

        </ul>

    </div>


</nav>



@yield('content')
<footer>
    <div class="container-fluid bg-primary py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="row py-0">
                        <div class="col-sm-1 hidden-md-down">
                            <a class="bg-circle bg-info" href="#">
                                <i class="fa fa-2x fa-fw fa-address-card" aria-hidden="true "></i>
                            </a>
                        </div>
                        <div class="col-sm-11 text-white">
                            <div><h4> BPC </h4>
                                <p>   <span class="header-font"></span><span class="header-font"></span>www.brotherplasticcompany.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="d-inline-block">
                        <div class="bg-circle-outline d-inline-block" style="background-color:#3b5998">
                            <a href="https://www.facebook.com/"><i class="fa fa-2x fa-fw fa-facebook text-white"></i>
                            </a>
                        </div>
                        <div class="bg-circle-outline d-inline-block" style="background-color:#4099FF">
                            <a href="https://twitter.com/">
                                <i class="fa fa-2x fa-fw fa-twitter text-white"></i></a>
                        </div>

                        <div class="bg-circle-outline d-inline-block" style="background-color:#0077B5">
                            <a href="https://www.linkedin.com/company/">
                                <i class="fa fa-2x fa-fw fa-linkedin text-white"></i></a>
                        </div>
                        <div class="bg-circle-outline d-inline-block" style="background-color:#d34836">
                            <a href="https://www.google.com/">
                                <i class="fa fa-2x fa-fw fa-google text-white"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>
</html>