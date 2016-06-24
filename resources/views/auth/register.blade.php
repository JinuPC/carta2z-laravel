<?php
    global $admin_url, $login_url, $register_url;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Mobirise v2.6.1, mobirise.com">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta name="description" content="bootstrap carousel">
    <title>Distributed System</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:700,400&amp;subset=cyrillic,latin,greek,vietnamese">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/animate.css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/socicon/css/socicon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/mobirise/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/mobirise-slider/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/mobirise-gallery/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/mobirise/css/mbr-additional.css') }}" type="text/css">
    <link href="{{ asset('assets/css/font-awesome.css') }}" rel="stylesheet">
    <style type="text/css">
        input {
            text-align: center;
            font-weight: bold;
            font-size: 30px;
            letter-spacing: 8px;
            word-spacing: 16px;
        }
        ::-webkit-input-placeholder {
           color: black;
           text-align: center;
           font-weight: bold;
           font-size: 20px;
           letter-spacing: 3px;
            word-spacing: 9px;
        }
        select {
            text-align: center;
            font-weight: bold;
            font-size: 30px;
            text-indent: 25%;
            letter-spacing: 8px;
            word-spacing: 16px;
        }

        :-moz-placeholder { /* Firefox 18- */
           color: black;  
        }

        ::-moz-placeholder {  /* Firefox 19+ */
           color: black;  
        }

        :-ms-input-placeholder {  
           color: black;  
        }
    </style>
</head>

<body>

<section class="mbr-navbar mbr-navbar--freeze mbr-navbar--absolute mbr-navbar--transparent mbr-navbar--sticky mbr-navbar--auto-collapse" id="menu-20">
    <div class="mbr-navbar__section mbr-section">
        <div class="mbr-section__container container">
            <div class="mbr-navbar__container">
                <div class="mbr-navbar__column mbr-navbar__column--s mbr-navbar__brand">
                    <span class="mbr-navbar__brand-link mbr-brand mbr-brand--inline">
                        <span class="mbr-brand__logo fa fa-shopping-cart" style="display: inline-block; float: left;font-size: 50px; color: #ff6666;"></span>
                        
                        <span class="mbr-brand__name"><a class="mbr-brand__name" style="color:white; font-size:40px; font-family: "Raleway", sans-serif;" href="/">Cart&nbsp;</a><a class="mbr-brand__name" style="color: #ff6666; font-size: 40px; font-family: "Raleway", sans-serif;" href="/">A2Z</a></span>
                    </span>
                </div>
                <div class="mbr-navbar__hamburger mbr-hamburger text-white"><span class="mbr-hamburger__line"></span></div>
                <div class="mbr-navbar__column mbr-navbar__menu">
                    <nav class="mbr-navbar__menu-box mbr-navbar__menu-box--inline-right">
                        <div class="mbr-navbar__column">
                            <ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-decorator mbr-buttons--active">
                                <li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="/">HOME</a></li>                                
                                                 
                            </ul>
                        </div>
                        <div class="mbr-navbar__column">
                            <ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active">
                                <li class="mbr-navbar__item"><a class="mbr-buttons__btn btn btn-default" href="{{$login_url}}"><RP>LOGIN</RP></a></li>

                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>






<section class="mbr-box mbr-section mbr-section--relative mbr-section--fixed-size  mbr-section--bg-adapted mbr-parallax-background" id="header1-22" style="background-image: url(assets/images/registerback.jpg);">
    <div class="mbr-box__magnet mbr-box__magnet--sm-padding mbr-box__magnet--center-left">
        <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(41, 105, 176);"></div>
        <div class="mbr-box__container mbr-section__container container">
            <div class="mbr-box mbr-box--stretched"><div class="mbr-box__magnet mbr-box__magnet--center-left">
                <div class="row"><div class=" col-sm-6">
                    <div class="mbr-hero animated fadeInUp">
                    	<br><br><br><br>
                    	<h1 class="mbr-hero__text">CREATE ACCOUNT </h1>                        
                        <p class="mbr-hero__subtext">Please Enter your Detials<br></p>
                    </div>
                    <div class="mbr-buttons btn-inverse mbr-buttons--left">

                    
					@if (count($errors) > 0)
						<ol class="alert alert-danger">
							@foreach ($errors->all() as $error)
							<li>{!! $error !!}</li>
							@endforeach
						</ol>
					@endif

                    <form class="animated fadeInUp delay " method="post">
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
							<input type="email" class="form-control" name="email" placeholder="Email Address" required="" value="{{ Input::old('email') }}" />
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="tin_no" placeholder="Tin Number" required="" autofocus value="{{ Input::old('tin_no') }}" />
						</div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="phone_no" placeholder="Phone Number" required="" autofocus value="{{ Input::old('phone_no') }}" />
                        </div>
						<div class="form-group">
							<input type="password" class="form-control" name="password" placeholder="Password" required="" /> 
						</div>
						<div class="form-group">
							<input type="password" class="form-control" name="password_confirmation" placeholder="Repeat Password" required="" /> 
						</div>
						<div class="form-group">
							<select class="form-control" name="role" required onfocusout="return(educationValidation());" onfocusin="educationonfocus();">
					    		<option value="no" disabled selected hidden >Business Type</option>
					    		<option value="retailer">Retail</option>
					    		<option value="seller">wholesale</option>
					    		
					    	</select>
						</div>			
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<button class="mbr-buttons__btn btn-lg btn btn-default btn-primary btn-block btn-info animated fadeInUp delay" type="submit">SIGN UP</button>   
					</form>
					<br><br><br><br><br>
                    </div>
                </div></div>
            </div></div>
        </div>
        
    </div>
</section>







<section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="contacts2-36" style="background-color: rgb(60, 60, 60);">
    
    <div class="mbr-section__container container">
        <div class="mbr-contacts mbr-contacts--wysiwyg row">
            <div class="col-sm-6">
                <figure class="mbr-figure mbr-figure--wysiwyg mbr-figure--full-width mbr-figure--no-bg">
                    <div class="mbr-figure__map mbr-figure__map--short mbr-google-map">
                        <p class="mbr-google-map__marker" data-coordinates="12.9219464,77.5501887"></p>
                    </div>
                </figure>
            </div>
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-sm-5 col-sm-offset-1">
                        <p class="mbr-contacts__text"><strong>ADDRESS</strong><br>
                        382, 2nd Cross,<br>
                        Bhanashankari 3rd Stage,<br>Banglore,<br>
                        Karnataka, India. PIN:560068<br><br>
                        <strong>CONTACTS</strong><br>
                        Email: support@ethino.com<br>
                        Phone: (+91) 80 4222 7849<br>
                        Mobile: (+91) 7 411 311 811</p>
                    </div>
                    <div class="col-sm-6"><p class="mbr-contacts__text"><strong>Our Applications</strong></p>
                        <ul class="mbr-contacts__list">
                            <li><a href="#" class="text-gray">The StyleCart</a>
                            <a class="mbr-contacts__link text-gray" href="#"></a>
                            </li>
                            <li><a href="#" class="text-gray">Unimarket</a>
                            <a class="mbr-contacts__link text-gray" href="#"></a></li>
                            <li><a href="#" class="text-gray">EthinoSoft</a></li>
                            <li><a href="#" class="text-gray">Carta2z</a></li>
                            <li><br></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




  <script src="assets/jquery/jquery.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js"></script>
  <script src="assets/smooth-scroll/SmoothScroll.js"></script>
  <script src="assets/bootstrap-carousel-swipe/bootstrap-carousel-swipe.js"></script>
  <script src="assets/jarallax/jarallax.js"></script>
  <script src="assets/masonry/masonry.pkgd.min.js"></script>
  <script src="assets/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/social-likes/social-likes.js"></script>
  <script src="assets/mobirise/js/script.js"></script>
  <script src="assets/mobirise-gallery/script.js"></script>
  
  
</body>
</html>