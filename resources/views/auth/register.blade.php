<?php
	global $register_url, $login_url, $register_url;
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
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

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
	<style type="text/css">
		.alert{
			padding-left: 30px;
		}
		.p20{
			padding-top: 20px;
		}		
		header{
			background-image: url(../img/authback.jpg);
			
		}
	</style>
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
                        <a class="page-scroll" href="/">Home</a>
                    </li>                	
					<li>
						<a href="{{ $login_url }}">SignIn</a>
					</li>
					<li>
						<a href="/work">How It works</a>
					</li>
				</ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <header>
        <div class="header-content">        
            <div class="col-md-6 col-md-offset-3 form-wrap">
		<h3>Sign Up</h3>
		@if (count($errors) > 0)
			<ol class="alert alert-danger">
				@foreach ($errors->all() as $error)
				<li>{!! $error !!}</li>
				@endforeach
			</ol>
		@endif
		<form class="form-signin" method="post">
			<div class="form-group">
				<input type="text" class="form-control" name="firstname" placeholder="First Name" required="" autofocus value="{{ Input::old('firstname') }}" />
			</div>
			<div class="form-group">
				<input type="text" class="form-control" name="lastname" placeholder="Last Name" required="" autofocus value="{{ Input::old('lastname') }}" />
			</div>
			<div class="form-group">
				<input type="text" class="form-control" name="username" placeholder="Username" required="" value="{{ Input::old('username') }}" />
			</div>
			<div class="form-group">
				<input type="text" class="form-control" name="email" placeholder="Email Address" required="" value="{{ Input::old('email') }}" />
			</div>
			<div class="form-group">
				<input type="text" class="form-control" name="tin_no" placeholder="Tin Number" required="" autofocus value="{{ Input::old('tin_no') }}" />
			</div>
			<div class="form-group">
				<input type="password" class="form-control" name="password" placeholder="Password" required="" /> 
			</div>
			<div class="form-group">
				<input type="password" class="form-control" name="password_confirmation" placeholder="Repeat Password" required="" /> 
			</div>			
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<button class="btn btn-lg btn-primary btn-block" type="submit">Sign Up</button>   
		</form>
		<div class="p20 text-center">Already have an account? <a href="{{ $login_url }}">Sign In</a></div>
	</div>	
        </div>
    </header>
	
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
</body>












</html>