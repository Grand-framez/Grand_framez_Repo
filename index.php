<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Grand FrameZ</title>
    
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
   
    <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="user-menu">
                        <ul>
                            <li><a href="#E-mail"><i class="fa fa-envelope-o"></i> info@grandframez.com.au</a></li>
                            <li><a href="#Phone-1"><i class="fa fa-phone"></i> +61 432290047 </a></li>
                            <li><a href="#Phone-2"><i class="fa fa-phone"></i> +61 405279315 </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
     
    </div> <!-- End header area -->
    
    <div class="site-branding-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="logo">
                        <h1><a href="index.php">G<span>rand</span>F<span>rame</span>Z</a></h1>
                    </div>
                </div>
                
                <div class="col-sm-6">
                    <div class="shopping-item">
                        <a href="login.php">Login <i class="fa fa-user"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End site branding area -->
    
    <div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div> 
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php">Home</a></li>
                        <li><a href="about us.php">About Us</a></li>
                        <li><a href="shop.php">Services</a></li>
                        <li><a href="signup.php">Sign Up</a></li>
                        <li><a href="gallery.php">Gallery</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>  
            </div>
        </div>
    </div> <!-- End mainmenu area -->
    
    <div class="slider-area">
        <div class="zigzag-bottom"></div>
        <div id="slide-list" class="carousel carousel-fade slide" data-ride="carousel">
            
            <div class="slide-bulletz">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <ol class="carousel-indicators slide-indicators">
                                <li data-target="#slide-list" data-slide-to="0" class="active"></li>
                                <li data-target="#slide-list" data-slide-to="1"></li>
                                <li data-target="#slide-list" data-slide-to="2"></li>
                            </ol>                            
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <div class="single-slide">
                        <div class="slide-bg slide-one"></div>
                        <div class="slide-text-wrapper">
                            <div class="slide-text">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6 col-md-offset-6">
                                            <div class="slide-content">
                                                <h2>We are awesome</h2>
                                                <p>Our video service is a specialised video production division dedicated to capturing the excitement and memories of your events.</p>
                                                <p> From large multi-day conferences, exhibitions, forums, meetings and industry panels, to special events like outdoor festivals, awards and gala dinners.</p>
                                                <a href="about us.php" class="readmore">Learn more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="single-slide">
                        <div class="slide-bg slide-two"></div>
                        <div class="slide-text-wrapper">
                            <div class="slide-text">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6 col-md-offset-6">
                                            <div class="slide-content">
                                                <h2>We are great</h2>
                                                <p>You invest so much time, money and resources into an exceptional corporate event, why not commemorate its success with the kind of professional photography that will do it justice? We’ll capture all those key moments at your upcoming event that will make it memorable. The raw emotion under the spot light and those unguarded audience responses. All those nuanced moments that make your event magical. And we’ll do it so swiftly and skillfully you’ll hardly notice we’re there.</p>
                                                <a href="about us.php" class="readmore">Learn more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="single-slide">
                        <div class="slide-bg slide-three"></div>
                        <div class="slide-text-wrapper">
                            <div class="slide-text">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6 col-md-offset-6">
                                            <div class="slide-content">
                                                <h2>We are superb</h2>
                                                <p>We create a professional cinematography story, just like a film that reflects who you are as a couple. We pride ourselves on capturing the emotion, love, tears, laughter, fun and all the moments in between that make your wedding such a special day. </p>
                                                <a href="about us.php" class="readmore">Learn more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>        
    </div> <!-- End slider area -->
    
    <div class="promo-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo">
                        <i class="fa fa-money"></i>
                        <p>Best Price</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo">
                        <i class="fa fa-video-camera"></i>
                        <p>4k Videoraphy</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo">
                        <i class="fa fa-lock"></i>
                        <p>Secure payments</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo">
                        <i class="fa fa-camera-retro"></i>
                        <p>HD Photos</p>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End promo area -->
    
    <div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2 class="section-title">Latest Photoshoots</h2>
                        <div class="product-carousel">
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="img/img21.jpg" alt="Photoshoot">
                                    <div class="product-hover">
                                        <a href="gallery.php" class="view-details-link"><i class="fa fa-photo"></i> View All</a>
                                    </div>
                                </div>
                            </div>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="img/img14.jpg" alt="Photoshoot">
                                    <div class="product-hover">
                                        <a href="gallery.php" class="view-details-link"><i class="fa fa-photo"></i> View All</a>
                                    </div>
                                </div> 
                            </div>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="img/img22.jpg" alt="Photoshoot">
                                    <div class="product-hover">
                                        <a href="gallery.php" class="view-details-link"><i class="fa fa-photo"></i> View All</a>
                                    </div>
                                </div>                                 
                            </div>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="img/img19.jpg" alt="Photoshoot">
                                    <div class="product-hover">
                                        <a href="gallery.php" class="view-details-link"><i class="fa fa-photo"></i> View All</a>
                                    </div>
                                </div>                            
                            </div>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="img/img23.jpg" alt="Photoshoot">
                                    <div class="product-hover">
                                        <a href="gallery.php" class="view-details-link"><i class="fa fa-photo"></i> View All</a>
                                    </div>
                                </div>                                 
                            </div>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="img/img16.jpg" alt="Photoshoot">
                                    <div class="product-hover">
                                        <a href="gallery.php" class="view-details-link"><i class="fa fa-photo"></i> View All</a>
                                    </div>
                                </div>                           
                            </div>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="img/img15.jpg" alt="Photoshoot">
                                    <div class="product-hover">
                                        <a href="gallery.php" class="view-details-link"><i class="fa fa-photo"></i> View All</a>
                                    </div>
                                </div>                           
                            </div>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="img/img13.jpg" alt="Photoshoot">
                                    <div class="product-hover">
                                        <a href="gallery.php" class="view-details-link"><i class="fa fa-photo"></i> View All</a>
                                    </div>
                                </div>                           
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End main content area -->
    
    <div class="brands-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="brand-wrapper">
                        <h2 class="section-title">Brands We Use</h2>
                        <div class="brand-list">
                            <img src="img/img24.png" alt="Photoshop">
                            <img src="img/img25.png" alt="canon eon">
                            <img src="img/img26.png" alt="Sony">
                            <img src="img/img27.png" alt="nikon">
                            <img src="img/img24.png" alt="Photoshop">
                            <img src="img/img25.png" alt="canon eon">
                            <img src="img/img26.png" alt="Sony">
                            <img src="img/img27.png" alt="nikon">                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End brands area -->
    
    <div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2 class="section-title">Creative Solutions</h2>
                        <div class="product-carousel">
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="img/img28.jpg" alt="brochure">
                                    <div class="product-hover">
                                        <a href="shop.php" class="view-details-link"><i class="fa fa-newspaper-o"></i> More Services</a>
                                    </div>
                                </div>
                                
                                <h2><a href="shop.php">Brochure Designing</a></h2>
                                
                                <div class="product-carousel-price">
                                    <ins>$350.00 AUD</ins>
                                </div> 
                            </div>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="img/img29.jpg" alt="businesscard">
                                    <div class="product-hover">
                                        <a href="shop.php" class="view-details-link"><i class="fa fa-paint-brush"></i> More Services</a>
                                    </div>
                                </div>
                                
                                <h2><a href="shop.php">Business Card Design</a></h2>
                                <div class="product-carousel-price">
                                    <ins>$350.00 AUD</ins>
                                </div> 
                            </div>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="img/img30.jpg" alt="LOGO design">
                                    <div class="product-hover">
                                        <a href="shop.php" class="view-details-link"><i class="fa fa-paint-brush"></i> More Services</a>
                                    </div>
                                </div>
                                
                                <h2><a href="shop.php">LOGO designing</a></h2>

                                <div class="product-carousel-price">
                                    <ins>$250.00 AUD</ins>
                                </div>                                 
                            </div>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="img/img31.png" alt="website design">
                                    <div class="product-hover">
                                        <a href="shop.php" class="view-details-link"><i class="fa fa-laptop"></i> More Services</a>
                                    </div>
                                </div>
                                
                                <h2><a href="shop.php">Website Designing</a></h2>

                                <div class="product-carousel-price">
                                    <ins>$1220.00 AUD</ins>
                                </div>                            
                            </div>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="img/img32.jpg" alt="video highlight">
                                    <div class="product-hover">
                                        <a href="shop.php" class="view-details-link"><i class="fa fa-toggle-right"></i> More Services</a>
                                    </div>
                                </div>
                                
                                <h2><a href="shop.php">Video Highlights</a></h2>

                                <div class="product-carousel-price">
                                    <ins>$250.00 AUD</ins>
                                </div>                                 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

 

    
    <div class="footer-top-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="footer-about-us">
                        <h2>G<span>rand</span>F<span>rame</span>Z</h2>
                        <p>At Grand Framez we focus on providing excellent services with the highest level of customer satisfaction. with a variety of services to choose from ,we are sure you will be happy working with us.look around at our website and if you have any question please contact us.</p>
                        <div class="footer-social">
                            <a href="https://www.facebook.com/grandframez" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="https://twitter.com/grandframez" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="https://www.youtube.com/channel/UCiwPYz5XxEbKkB-ohrnp31g" target="_blank"><i class="fa fa-youtube"></i></a>
                            <a href="https://plus.google.com/grandframez" target="_blank"><i class="fa fa-google-plus"></i></a>
                            <a href="https://www.instagram.com/grandframez/" target="_blank"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">User Navigation </h2>
                        <ul>
                            <li><a href="login.php">Login</a></li>
                            <li><a href="contact.php">Contact</a></li>
                            <li><a href="privacypolicy.php">Privacy Policy</a></li>
                            <li><a href="t&c.php">T&C</a></li>
                            <li><a href="index.php">Front page</a></li>
                        </ul>                        
                    </div>
                </div>
                
                <div class="col-md-4 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">Categories</h2>
                        <ul>
                            <li><a href="shop.php">services</a></li>
                        </ul>
                        <ul>
                            <li><a href="admin/adminlogin.php">Admin Login</a></li>
                        </ul>                        
                    </div>
                </div>
                
                
            </div>
        </div>
    </div> <!-- End footer top area -->
    
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="copyright">
                        <p>&copy; 2020 Grand FrameZ. All Rights Reserved.</p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="footer-card-icon">
                        <i class="fa fa-cc-mastercard"></i>
                        <i class="fa fa-cc-paypal"></i>
                        <i class="fa fa-cc-visa"></i>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer bottom area -->
   
    <!-- Latest jQuery form server -->
    <script src="https://code.jquery.com/jquery.min.js"></script>
    
    <!-- Bootstrap JS form CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
    <!-- jQuery sticky menu -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    
    <!-- jQuery easing -->
    <script src="js/jquery.easing.1.3.min.js"></script>
    
    <!-- Main Script -->
    <script src="js/main.js"></script>
  </body>
</html>