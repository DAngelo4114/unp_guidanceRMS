<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Guidance and Counselling System</title>
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/freelancer.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
    <body>
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-left">
                        
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class=" hidden">
                            <a href="#page-top">asdasd</a>
                        </li>
                        <li>
                        <a href="home.php">Home</a>
                        </li>
                        <li class="dropdown"><a href="#" data-toggle="dropdown">Admin<span     class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="deleterecords.php">Delete Record</a></li>
                            <li><a href="deleteuser.php">Delete User</a></li>
                            <li><a href="sign-up.php">Add User</a></li>
                        </ul>       
                        </li>
                        <li>
                            <a href="developers.php">Developers</a>
                        </li>
                        <li>
                            <a href="about.php">About</a>
                        </li>
                        <li class="page-scroll">
                            <a href="logout.php?logout=true">Log Out</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>

        @yield('content')
        
        <footer class="text-center">
            <div class="footer-below">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            Copyright &copy; Guidance Office
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Plugin JavaScript -->
        <!--<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>-->
        <script src="{{ asset('js/jquery.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/classie.js') }}"></script>
        <script src="{{ asset('js/cbpAnimatedHeader.js') }}"></script>

        <!-- Contact Form JavaScript -->
        <script src="{{ asset('js/jqBootstrapValidation.js') }}"></script>
        <script src="{{ asset('js/contact_me.js') }}"></script>

        <!-- Custom Theme JavaScript -->
        <script src="{{ asset('js/freelancer.js') }}"></script>
    </body>
</html>