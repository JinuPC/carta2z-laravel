<?php
	global $admin_url, $login_url, $register_url, $document;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>EMS</title>
	<base href="{{ url('/') }}/" />
	<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
	<link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700') }}">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/ionicons.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('font-awesome/css/font-awesome.min.css') }}" type="text/css">
	<link rel="stylesheet" href="{{ asset('css/animate.min.css') }}" type="text/css">
	<link rel="stylesheet" href="{{ asset('css/creative.css') }}" type="text/css">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <h1 class="navbar-brand page-scroll" href="#page-top"><a href= "\" >UniMarket</a></h1>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href= "\">Home</a>
                    </li>
                	<li>
                    	<a href="{{ $register_url }}">SignUp</a>
                    </li>
					<li>
						<a href="{{ $login_url }}">SignIn</a>
					</li>
					

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1>All market places in one website</h1>
                <hr>
                <p>Get an account....! All your business will be done by our Ems System. you can concentrate on your work</p>
                <a href="#about" class="btn btn-primary btn-xl page-scroll">Find Out More</a>
            </div>
        </div>
    </header>

    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">We've got what you need!</h2>
                    <hr class="light">
                    <p class="text-faded">Start Bootstrap has everything you need to get your new website up and running in no time! All of the templates and themes on Start Bootstrap are open source, free to download, and easy to use. No strings attached!</p>
                    <a href="#" class="btn btn-default btn-xl">Get Started!</a>
                </div>
            </div>
        </div>
    </section>



	<script type="text/javascript" src="{{ asset('js/jquery-1.11.3.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{ asset('js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('js/jquery.fittext.js') }}"></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>
 
    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('js/creative.js') }}"></script>
	@include('adminbar')

</body>
</html>