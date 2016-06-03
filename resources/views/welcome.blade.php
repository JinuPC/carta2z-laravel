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
    <link rel="shortcut icon"  href="{{ asset('assets/images/discover-mobile-350x350-16.png') }}" type="image/x-icon">
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
                                <li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="doc">Learn More</a></li>  
                                <li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="#features1-21">Learn More</a></li>                               
                            </ul>
                        </div>
                        <div class="mbr-navbar__column">
                            <ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active">
                                <li class="mbr-navbar__item"><a class="mbr-buttons__btn btn btn-default" href="{{$login_url}}"><RP>REGISTER</RP></a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="mbr-slider mbr-section mbr-section--no-padding carousel slide" data-ride="carousel" data-wrap="true" data-interval="5000" id="slider-38" style="background-color: rgb(255, 255, 255);">
    <div class="mbr-section__container">
        <div>
            <ol class="carousel-indicators">
                <li data-app-prevent-settings="" data-target="#slider-38" class="active" data-slide-to="0"></li><li data-app-prevent-settings="" data-target="#slider-38" data-slide-to="1"></li><li data-app-prevent-settings="" data-target="#slider-38" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="mbr-box mbr-section mbr-section--relative mbr-section--fixed-size mbr-section--bg-adapted item dark center mbr-section--full-height active" style="background-image: url(assets/images/slide1.jpg);">
                    <div class="mbr-box__magnet mbr-box__magnet--sm-padding mbr-after-navbar">
                        <div class=" container">
                            <!--
                            <div class="row"><div class="col-sm-8 col-sm-offset-2">
                                <div class="mbr-hero">                                
                                    <h1 class="mbr-hero__text" >FULL SCREEN SLIDER</h1>
                                    
                                </div>

                                
                            </div></div>
                             -->
                        </div>

                    </div>
                </div><div class="mbr-box mbr-section mbr-section--relative mbr-section--fixed-size mbr-section--bg-adapted item dark center mbr-section--full-height" style="background-image: url(assets/images/slide2.jpg);">
                    <div class="mbr-box__magnet mbr-box__magnet--sm-padding mbr-after-navbar">
                        <div class=" container">
                            
                            <div class="row"><div class="col-sm-10 col-sm-offset-2">
                                <div class="mbr-hero">
                                    <h1 class="mbr-hero__text">SIMPLE AND POWERFUL DISTRIBUTION APPLICATION</h1>
                                    <p class="mbr-hero__subtext" >A new system for manufactures and retailers. CartA2Z will manage your wholesale and retail business. Sign up now..!</p>
                                </div>
                                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                                        <div class="mbr-buttons col-sm-10 btn-inverse mbr-buttons--center"><a class="mbr-buttons__btn btn btn-lg btn-warning" href="{{$register_url}}">REGISTER NOW AND START YOUR BUSINESS</a> </div>
                            </div></div>
                        </div>
                    </div>
                </div><div class="mbr-box mbr-section mbr-section--relative mbr-section--fixed-size mbr-section--bg-adapted item dark center mbr-section--full-height" style="background-image: url(assets/images/slide3.jpg);">
                    <div class="mbr-box__magnet mbr-box__magnet--sm-padding mbr-after-navbar">
                        <div class=" container">
                            
                            <div class="row"><div class="col-sm-8 col-sm-offset-2">
                                <div class="mbr-hero">
                                    <h1 class="mbr-hero__text">ONE STOP SAREE MARKET PLACE</h1>
                                    <p class="mbr-hero__subtext" >Now we are dealing with Womes ethinic wears. We have large collection of ethinic wears for the retailers for wholesale price</p>
                                    
                                </div>
                                
                            </div></div>
                        </div>
                    </div>
                </div>
            </div>
            
            <a data-app-prevent-settings="" class="left carousel-control" role="button" data-slide="prev" href="#slider-38">
                <span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a data-app-prevent-settings="" class="right carousel-control" role="button" data-slide="next" href="#slider-38">
                <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>

<section class="content-2 col-4" id="features1-21" style="background-color: rgb(255, 255, 255);">
    
    <div class="container">
        <div class="row">
            <div>
                <div class="thumbnail">
                    <div class="image"><img class="undefined" src="assets/images/google-slides-350x350-16.png"></div>
                    <div class="caption">
                        <div>
                            <h3>BIG SAREE MARKETPLACE</h3>
                            <p>Cart A2Z is a marketplace for woman Indian Ethnic ware Products. We are Banglore based e-commerce solution provider. Cart A2Z listed with bulk amount of sarees and kurtis for retailers to enable their business simple</p>
                        </div>
                        <p class="group"><a href="#" class="btn btn-default">LEARN MORE</a></p>
                    </div>
                </div>
            </div>
            <div>
                <div class="thumbnail">
                    <div class="image"><img class="undefined" src="assets/images/reminders-350x350-18.png"></div>
                    <div class="caption">
                        <div>
                            <h3>EASY PRODUCT LISTING</h3>
                            <p>List your products from one catalog on all the marketplaces in bulk or individually. Cart A2Z's powerful automation will help you expand your business, quickly and easily. Our Unimarket System will handle everything </p>
                        </div>
                        <p class="group"><a href="#" class="btn btn-default">LEARN MORE</a></p>
                    </div>
                </div>
            </div>
            <div>
                <div class="thumbnail">
                    <div class="image"><img class="undefined" src="assets/images/photos-350x350-95.png"></div>
                    <div class="caption">
                        <div>
                            <h3>MARKETPLACE INTEGRATION</h3>
                            <p>Cart A2Z offers marketplace integration with a variety of marketplaces including Amazon and eBay.  With Cart A2Z’s Web Services and integration partner, facilitate two-way integration with existing eCommerce marketplaces.  </p>
                        </div>
                        <p class="group"><a href="#" class="btn btn-default">LEARN MORE</a></p>
                    </div>
                </div>
            </div>
            <div>
                <div class="thumbnail">
                    <div class="image"><img class="undefined" src="assets/images/kindle-350x350-47.png"></div>
                    <div class="caption">
                        <div>
                            <h3>MOBILE FRIENDLY PLATFORM</h3>
                            <p>Cart A2Z is designed for compatible with every system especially for mobiles and tablets . Our website is designed by responsive web model. Android and IPhone apps will be release soon</p>
                        </div>
                        <p class="group"><a href="#" class="btn btn-default">LEARN MORE</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mbr-box mbr-section mbr-section--relative mbr-section--fixed-size mbr-section--full-height mbr-section--bg-adapted mbr-parallax-background" id="header1-22" style="background-image: url(assets/images/welcomeback.jpg);">
    <div class="mbr-box__magnet mbr-box__magnet--sm-padding mbr-box__magnet--center-left">
        <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(41, 105, 176);"></div>
        <div class="mbr-box__container mbr-section__container container">
            <div class="mbr-box mbr-box--stretched"><div class="mbr-box__magnet mbr-box__magnet--center-left">
                <div class="row"><div class=" col-sm-6">
                    <div class="mbr-hero animated fadeInUp">
                        <h1 class="mbr-hero__text">CONTROL YOUR INVENTORY FROM ANYWHERE  </h1>
                        <p class="mbr-hero__subtext">Cart A2Z system is a order inventory management with simple accounting cloud software for small companies to boost productivity drive higher profits Any company buying/selling a physical product can use Cart A2Z system to manage their sales, purchasing, operations, inventory basic accounting process. Company that are doing full or partial trading  can also seamlessly manage orders  purchases. Let Cart A2Z System transform your small business today!<br></p>
                    </div>
                    <div class="mbr-buttons btn-inverse mbr-buttons--left"><a class="mbr-buttons__btn btn btn-lg animated fadeInUp delay btn-info" href="{{$register_url}}">REGISTER NOW</a> <a class="mbr-buttons__btn btn btn-lg btn-default animated fadeInUp delay" href="#">LEARN MORE</a></div>
                </div></div>
            </div></div>
        </div>
        <div class="mbr-arrow mbr-arrow--floating text-center">
            <div class="mbr-section__container container">
                <a class="mbr-arrow__link" href="#features1-23"><i class="glyphicon glyphicon-menu-down"></i></a>
            </div>
        </div>
    </div>
</section>

<section class="content-2 col-4" id="features1-23" style="background-color: rgb(28, 73, 110);">
    
    <div class="container">
        <div class="row">
            <div>
                <div class="thumbnail">
                    <div class="image"><i class="fa fa-list-alt" aria-hidden="true" style=" font-size: 100px; color: #ff6666;"></i></div>
                    <div class="caption">
                        <div>
                            <h3>INVENTORY</h3>
                            <p>Inventory management becomes all the more
                                crucial when you are doing good business.
                                Communicating correct inventory level real time
                                to all channels and allocating inventory to orders
                                are too important to be done manually. That’s why
                                our inventory management software for distribution
                                lets you automate it, define criterias, set
                                priorities so that you never oversell. 
                            </p>
                        </div>
                        <p class="group"><a href="#" class="btn btn-info">LEARN MORE</a></p>
                    </div>
                </div>
            </div>
            <div>
                <div class="thumbnail">
                    <div class="image"><i class="fa fa-tachometer" aria-hidden="true" style=" font-size: 100px; color: #ff6666;"></i></div>
                    <div class="caption">
                        <div>
                            <h3>DASHBOARD</h3>
                            <p>Our Dashboard and Reports will keep you
                                updated on all relevant things you should know about you order processing.
                                Total Sales, Pending orders, Pending deliveries and every such little thing which help you understand exactly where you stand and do a better job of your business.
                                Our Dashboard carefully designed to help you in making the right judgements, take the right calls. 
                            </p>
                        </div>
                        <p class="group"><a href="https://mobirise.com/bootstrap-template/" class="btn btn-info">LEARN MORE</a></p>
                    </div>
                </div>
            </div>
            <div>
                <div class="thumbnail">
                    <div class="image"><i class="fa fa-truck" aria-hidden="true" style=" font-size: 100px; color: #ff6666;"></i></div>
                    <div class="caption">
                        <div>
                            <h3>SHIPMENTS</h3>
                            <p>Cart A2Z's Purchasing
                                Shipments is the backbone of distribution 
                                industry. We understand that. 
                                That’s why all the popular and not so popular 
                                shippers come pre-integrated with Cart A2Z.
                                We will never put any Geographical Restrictions 
                                on your Growth. You can either use our integrated shipping partners or your own shipping services we will maintain all process for you.
                            </p>
                        </div>
                        <p class="group"><a href="#" class="btn btn-info">LEARN MORE</a></p>
                    </div>
                </div>
            </div>
            <div>
                <div class="thumbnail">
                    <div class="image"><i class="fa fa-industry" aria-hidden="true" style=" font-size: 100px; color: #ff6666;"></i>
</div>
                    <div class="caption">
                        <div>
                            <h3>WAREHOUSE</h3>
                            <p>Our Online Warehouse management system is robust enough to handle multiple warehouses and sophisticated enough to handle complexities of ever changing Indian selling scene. The needs of online business are different from a typical physical retail business. That’s why you can easily rely on this online warehouse management system to take care of your warehouse.
                            </p>
                        </div>
                        <p class="group"><a href="#" class="btn btn-info">LEARN MORE</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section mbr-section--relative mbr-parallax-background" id="msg-box5-25" style="background-image: url(assets/images/dashback.jpg);">
    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(0, 168, 133);"></div>
    <div class="mbr-section__container mbr-section__container--isolated container">
        <div class="row">
            <div class="mbr-box mbr-box--fixed mbr-box--adapted">
                <div class="mbr-box__magnet mbr-box__magnet--top-right mbr-section__left col-sm-6">
                    <figure class="mbr-figure mbr-figure--adapted mbr-figure--caption-inside-bottom mbr-figure--full-width"><img class="mbr-figure__img" src="assets/images/overall.jpg"></figure>
                </div>
                <div class="mbr-box__magnet mbr-class-mbr-box__magnet--center-left col-sm-6 mbr-section__right">
                    <div class="mbr-section__container mbr-section__container--middle">
                        <div class="mbr-header mbr-header--auto-align mbr-header--wysiwyg">
                            <h3 class="mbr-header__text">REPORTING SYSTEMS</h3>
                            
                        </div>
                    </div>
                    <div class="mbr-section__container mbr-section__container--middle">
                        <div class="mbr-article mbr-article--auto-align mbr-article--wysiwyg">
                            <p>
                                We believe in leveling the retail playing field, so merchants of all sizes can access customers wherever they shop and have the opportunity to grow their business. We believe that software and technology should be accessible to everyone and that running an online business shouldn’t be complex, expensive or time consuming.

                                We believe simplicity is key to the success for anything, whether building software, a business or a lifestyle. We believe that only when you take the frustration out of things can you realize maximum value and benefit.

                                We believe in doing things better than they’ve ever been done before.
                            </p>
                        </div>
                    </div>
                    
                </div>
                
            </div>
        </div>
    </div>
</section>

<section class="content-2 col-3" id="features1-26" style="background-color: rgb(239, 239, 239);">
    
    <div class="container">
        <div class="row">
            <div>
                <div class="thumbnail">
                    <div class="image"><i class="fa fa-tag" aria-hidden="true" style=" font-size: 100px; color: #432FEC;"></i></div>
                    <div class="caption">
                        <div>
                            <h3>Create & Publish Listings</h3>
                            <p>List your products from one catalog on all the marketplaces in bulk or individually. CartA2Z's powerful automation will help you expand your business, quickly and easily.</p>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div>
                <div class="thumbnail">
                    <div class="image"><i class="fa fa-refresh" aria-hidden="true" style=" font-size: 100px; color: #432FEC;"></i></div>
                    <div class="caption">
                        <div>
                            <h3>Control & Sync Inventory</h3>
                            <p>Add your inventory once and let CartA2Z take it from there. Inventory is adjusted automatically and synchronized across all your listings. Set rules to control your available inventory on each channel.</p>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div>
                <div class="thumbnail">
                    <div class="image"><i class="fa fa-archive" aria-hidden="true" style=" font-size: 100px; color: #432FEC;"></i></div>
                    <div class="caption">
                        <div>
                            <h3>Manage & Fulfill Orders</h3>
                            <p>Ship orders from all channels seamlessly. Deep integrations with ShipStation and Fulfillment By Unimarket help you increase automation, reduce costs, and prevent errors.</p>
                        </div>
                        
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>


<section class="content-2 col-3" id="features1-31" style="background-color: rgb(255, 255, 255);">
    
    <div class="container">
        <div class="row">
            <div>
                <div class="thumbnail">
                    <div class="image"><i class="fa fa-area-chart" aria-hidden="true" style=" font-size: 100px; color: #432FEC;"></i></div>
                    <div class="caption">
                        <div>
                            <h3>Generate Powerful Reports</h3>
                            <p>Get the data and reports that you need, when you need it, to optimize your business and drive more sales. Generate reports with visual graphs, or export your report data to a spreadsheet.</p>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div>
                <div class="thumbnail">
                    <div class="image"><i class="fa fa-table" aria-hidden="true" style=" font-size: 100px; color: #432FEC;"></i></div>
                    <div class="caption">
                        <div>
                            <h3>Ditch the Spreadsheets</h3>
                            <p>Import your existing listings and auto-build products with a single click. CartA2Z will help you streamline and optimize your data for success. Be up and running on Day 1!</p>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div>
                <div class="thumbnail">
                    <div class="image"><i class="fa fa-phone-square" aria-hidden="true" style=" font-size: 100px; color: #432FEC;"></i></div>
                    <div class="caption">
                        <div>
                            <h3>Mind-Blowing Customer Support</h3>
                            <p>Our mission is to create value for sellers and retailers everyday. Our Customer Success team works tirelessly to help you get set up and grow your business. Experience the personal support our customers rave about.</p>
                        </div>
                        
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>




<section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="form1-35" style="background-color: rgb(239, 239, 239);">
    
    <div class="mbr-section__container mbr-section__container--std-padding container">
        <div class="row">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2" data-form-type="formoid">
                        <div class="mbr-header mbr-header--center mbr-header--std-padding">
                            <h2 class="mbr-header__text">CONTACT FORM</h2>
                        </div>
                        <div data-form-alert="true"></div>
                        <form action="" method="post" data-form-title="CONTACT FORM">
                            <input type="hidden" value="" data-form-email="true">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" required="" placeholder="Name*" data-form-field="Name">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" required="" placeholder="Email*" data-form-field="Email">
                            </div>
                            <div class="form-group">
                                <input type="tel" class="form-control" name="phone" placeholder="Phone" data-form-field="Phone">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" placeholder="Message" rows="7" data-form-field="Message"></textarea>
                            </div>
                            <div class="mbr-buttons mbr-buttons--right"><button type="submit" class="mbr-buttons__btn btn btn-lg btn-warning">CONTACT US</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="social-buttons2-30" style="background-color: rgb(240, 240, 240);">
    

    <div class="mbr-section__container container">
        <div class="mbr-header mbr-header--inline row">
            <div class="col-sm-4">
                <h3 class="mbr-header__text">FOLLOW US</h3>
            </div>
            <div class="mbr-social-icons mbr-social-icons--style-1 col-sm-8">
            <a class="mbr-social-icons__icon socicon-bg-twitter" title="Twitter" target="_blank" href="#">
            <i class="socicon socicon-twitter"></i></a>
             <a class="mbr-social-icons__icon socicon-bg-facebook" title="Facebook" target="_blank" href="#"><i class="socicon socicon-facebook"></i></a> 
             <a class="mbr-social-icons__icon socicon-bg-google" title="Google+" target="_blank" href="#"><i class="socicon socicon-google"></i></a> 
             <a class="mbr-social-icons__icon socicon-bg-youtube" title="YouTube" target="_blank" href="#"><i class="socicon socicon-youtube"></i></a> 
             <a class="mbr-social-icons__icon socicon-bg-instagram" title="Instagram" target="_blank" href="#"><i class="socicon socicon-instagram"></i></a> 
             <a class="mbr-social-icons__icon socicon-bg-pinterest" title="Pinterest" target="_blank" href="#"><i class="socicon socicon-pinterest"></i></a>  
             <a class="mbr-social-icons__icon socicon-bg-behance" title="Behance" target="_blank" href="#"><i class="socicon socicon-behance"></i></a>
              <a class="mbr-social-icons__icon socicon-bg-tumblr" title="Tumblr" target="_blank" href="#"><i class="socicon socicon-tumblr"></i></a> 
             <a class="mbr-social-icons__icon socicon-bg-linkedin" title="LinkedIn" target="_blank" href="#"><i class="socicon socicon-linkedin"></i></a> 
             <a class="mbr-social-icons__icon socicon-bg-android" title="Google Play" target="_blank" href="#"><i class="socicon socicon-android"></i></a>
             </div>
        </div>
    </div>
</section>


<section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="contacts2-36" style="background-color: rgb(60, 60, 60);">
    
    <div class="mbr-section__container container">
        <div class="mbr-contacts mbr-contacts--wysiwyg row">
            <div class="col-sm-6">
                <figure class="mbr-figure mbr-figure--wysiwyg mbr-figure--full-width mbr-figure--no-bg">
                    <div class="mbr-figure__map mbr-figure__map--short mbr-google-map">
                        <p class="mbr-google-map__marker" data-coordinates="12.9716,77.5946"></p>
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