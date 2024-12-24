<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>Freshshop - Ecommerce Bootstrap 4 HTML Template</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	</style>
	body {
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  font-family: 'Poppins', sans-serif;
  background-color: #212121;
  overflow: hidden;
}

.box {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 350px));
  grid-gap: 5vw;
  justify-content: space-around;
  width: 100%;
  max-width: 1400px;
  margin-left: auto;
  margin-right: auto;
  padding-left: 20px;
  padding-right: 20px;
}

.card {
  position: relative;
  background-color: #fff;
  height: 35vw;
  border-radius: 4px;
  box-shadow: 0 2px 10px rgba(#000, 0.2);
  
  &::before,
  &::after {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border-radius: inherit;
    background-color: inherit;
    box-shadow: inherit;
    transition: 0.5s;
    z-index: -1;
  }
  
  &:hover {
    &::before {
      transform: rotate(20deg);
      transition-delay: 0.1s;
    }
    
    &::after {
      transform: rotate(10deg);
    }
  }
}

.card__picture {
  position: absolute;
  top: 10px;
  left: 10px;
  right: 10px;
  bottom: 10px;
  z-index: 1;
  background-color: #222;
  border-radius: 3px;
  overflow: hidden;
  transition: 0.5s;
  
  img {
    display: block;
    width: 100%;
    max-width: 100%;
    height: 100%;
    object-fit: cover;
  }
  
  .card:hover & {
    bottom: 80px;
  }
}

.card__details {
  position: absolute;
  left: 10px;
  right: 10px;
  bottom: 15px;
  font-weight: 500;
  font-size: 16px;
  text-align: center;
  text-transform: uppercase;
  color: #777;
}

.card__details-name {
  margin: 0;
  font-weight: 600;
  font-size: 20px;
}

.card__details-post {
  color: #f38695;
  display: block;
}
</style>

</head>

<body>
    <!-- Start Main Top -->
    <div class="main-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="right-phone-box">
                        <p>Call US :- <a href="#"> +91 900 800 100</a></p>
                    </div>
                    <div class="our-link">
                        <ul>
                            <li><a href="#"><i class="fa fa-user s_color"></i> My Account</a></li>
                            <li><a href="#"><i class="fas fa-location-arrow"></i> Our location</a></li>
                            <li><a href="#"><i class="fas fa-headset"></i> Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="login-box">
						<select id="basic" class="selectpicker show-tick form-control" data-placeholder="Sign In">
							<option>Register Here</option>
							<option>Sign In</option>
						</select>
					</div>
                   <div class="text-slid-box">
                        <div id="offer-box" class="carouselTicker">
                            <ul class="offer-box">
                                <li>
                                    <i class="fab fa-opencart"></i> 20% off Entire Purchase Promo code: offT80
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> 50% - 80% off on flower bouquet
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> Off 10%! Shop flowers
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> Off 50%! Shop Now
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> Off 10%! on decoration events
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> 50% - 80% off on flower bouquet
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> 20% off Entire Purchase Promo code: offT30
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> Off 50%! Shop Now 
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Main Top -->

    <!-- Start Main Top -->
    <header class="main-header">
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
            <div class="container">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
				 <a class="navbar-brand" href="index.html"><img src="img/bloom.png" class="logo" alt="" width="180px" height="150px"></a>
                </div>
                <!-- End Header Navigation -->

                 <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="nav-item "><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
              
                           <li class="nav-item"><a class="nav-link" href="shop.php">Shop</a></li>
                    
                        <li class="nav-item active"><a class="nav-link " href="gallery.php">Events</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact-us.php">Contact Us</a></li>
						<li class="nav-item"><a class="nav-link" href="sig.php">SignIn/Login</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->

                <!-- Start Atribute Navigation -->
                
            <!-- End Side Menu -->
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Main Top -->

    <!-- Start Top Search -->
    <div class="top-search">
        <div class="container">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
        </div>
    </div>
    <!-- End Top Search -->

    <!-- Start All Title Box -->
   

            <div class="box">
  <div class="card">
    <div class="card__picture">
      <img src="img/reg1.jpg" alt="Joshua Gibson">
    </div>
    <div class="card__details">
      <h2 class="card__details-name">Joshua Gibson</h2>
      <span class="card__details-post">Founder</span>
    </div>
  </div>
  <div class="card">
    <div class="card__picture">
      <img src="https://images.unsplash.com/photo-1529932260967-af9d3bbd8138?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" alt="Amanda Reed">
    </div>
    <div class="card__details">
      <h2 class="card__details-name">Amanda Reed</h2>
      <span class="card__details-post">Director</span>
    </div>
  </div>
  <div class="card">
    <div class="card__picture">
      <img src="https://images.unsplash.com/photo-1526667458881-3455b57a7c50?ixlib=rb-1.2.1&auto=format&fit=crop&w=675&q=80" alt="Melissa Myers">
    </div>
    <div class="card__details">
      <h2 class="card__details-name">Melissa Myers</h2>
      <span class="card__details-post">Producer</span>      
    </div>
  </div>
</div>
    <!-- End Gallery  -->

   <!-- Start Instagram Feed  -->
    <div class="instagram-box">
        <div class="main-instagram owl-carousel owl-theme">
            <div class="item">
                <div class="ins-inner-box">
                    <img src="e1.jpg" alt="" />
                    <div class="hov-in">
                        
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="e2.jpg" alt="" />
                    <div class="hov-in">
                        
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="e3.jpg" alt="" />
                    <div class="hov-in">
                       
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="e10.png" alt="" />
                    <div class="hov-in">
                       
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="e6.jpg" alt="" />
                    <div class="hov-in">
                        
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="e7.jpg" alt="" />
                    <div class="hov-in">
                        
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="e4.jpg" alt="" />
                    <div class="hov-in">
                        
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="e8.jpeg" alt="" />
                    <div class="hov-in">
                        
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="e9.jpg" alt="" />
                    <div class="hov-in">
                       
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="e5.jpg" alt="" />
                    <div class="hov-in">
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Instagram Feed  -->


    <!-- Start Footer  -->
    <footer>
        <div class="footer-main">
            <div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-12 col-sm-12">
						<div class="footer-top-box">
							<h3>Business Time</h3>
							<ul class="list-time">
								<li>Monday - Friday: 08.00am to 05.00pm</li> <li>Saturday: 10.00am to 08.00pm</li> <li>Sunday: <span>Closed</span></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-4 col-md-12 col-sm-12">
						<div class="footer-top-box">
							<h3>Newsletter</h3>
							<form class="newsletter-box">
								<div class="form-group">
									<input class="" type="email" name="Email" placeholder="Email Address*" />
									<i class="fa fa-envelope"></i>
								</div>
								<button class="btn hvr-hover" type="submit">Submit</button>
							</form>
						</div>
					</div>
					<div class="col-lg-4 col-md-12 col-sm-12">
						<div class="footer-top-box">
							<h3>Social Media</h3>
							<p>To know more about us follow our handels on social media.</p>
							<ul>
                                <li><a href="https://www.facebook.com/irisfloristsmangalore"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="https://www.instagram.com/iris_florists_official/"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                                 <li><a href="https://api.whatsapp.com/send?phone=+919448770777&amp;text=Hi,%20I%20contacted%20you%20Through%20your%20website."><i class="fab fa-whatsapp" aria-hidden="true"></i></a></li>
								
                            </ul>
						</div>
					</div>
				</div>
				<hr>
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-widget">
                            <h4>About The Bloom Flower Shop</h4>
                            <p>The Bloom Flower Shop is flower decoration event company with more than 10 years of experience in the industry our work revolves around selling flower products and event decoration.</p> 
							<p>Our company always tries to give best quality product that satisfies our customer.we think our customer as our family and always try to fullfill their wishes.</p> 							
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link">
                            <h4>Information</h4>
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Customer Service</a></li>
                                <li><a href="#">Our Sitemap</a></li>
                                <li><a href="#">Terms &amp; Conditions</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Delivery Information</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link-contact">
                            <h4>Contact Us</h4>
                            <ul>
                                <li>
                                    <p><i class="fas fa-map-marker-alt"></i>Address: Shop No.13, West Gate Centre, Kankanady, Pumpwell,<br>Mangalore,Dakshinakannada<br> karnataka-575002, India  </p>
                                </li>
                                <li>
                                    <p><i class="fas fa-phone-square"></i>Phone: <a href="tel:+1-888705770">+91 9888 705 770</a></p>
                                </li>
                                <li>
                                    <p><i class="fas fa-envelope"></i>Email: <a href="mailto:contactinfo@gmail.com">contactinfo@gmail.com</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer  -->

    <!-- Start copyright  -->
    <div class="footer-copyright">
        <p class="footer-company">All Rights Reserved. &copy; 2018 <a href="#">ThewayShop</a> Design By :
            <a href="https://html.design/">html design</a></p>
    </div>
    <!-- End copyright  -->

    <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

    <!-- ALL JS FILES -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/jquery.superslides.min.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="js/inewsticker.js"></script>
    <script src="js/bootsnav.js."></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/baguetteBox.min.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>