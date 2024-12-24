<?php
session_start();
if(isset($_SESSION['floweruser']))
{
	$floweruser=$_SESSION['floweruser'];

?>
<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
       <title>The Bloom Flower Shop</title>
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
<style>
.padding {
    padding: 3rem !important;
    margin-left: 200px
}

.card-img-top{
    height:300px;
}

.card-no-border .card {
    border-color: #d7dfe3;
    border-radius: 4px;
    margin-bottom: 30px;
    -webkit-box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.05);
    box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.05)
}

.card-body {
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    padding: 1.25rem
}

.pro-img {
    margin-top: -80px;
    margin-bottom: 20px
}

.little-profile .pro-img img {
    width: 128px;
    height: 128px;
    -webkit-box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
    border-radius: 100%
}

html body .m-b-0 {
    margin-bottom: 0px
}

h3 {
    line-height: 30px;
    font-size: 21px
}

.btn-rounded.btn-md {
    padding: 12px 35px;
    font-size: 16px
}

html body .m-t-10 {
    margin-top: 10px
}

.btn-primary,
.btn-primary.disabled {
    background: #7460ee;
    border: 1px solid #7460ee;
    -webkit-box-shadow: 0 2px 2px 0 rgba(116, 96, 238, 0.14), 0 3px 1px -2px rgba(116, 96, 238, 0.2), 0 1px 5px 0 rgba(116, 96, 238, 0.12);
    box-shadow: 0 2px 2px 0 rgba(116, 96, 238, 0.14), 0 3px 1px -2px rgba(116, 96, 238, 0.2), 0 1px 5px 0 rgba(116, 96, 238, 0.12);
    -webkit-transition: 0.2s ease-in;
    -o-transition: 0.2s ease-in;
    transition: 0.2s ease-in
}

.btn-rounded {
    border-radius: 60px;
    padding: 7px 18px
}

.m-t-20 {
    margin-top: 20px
}

.text-center {
    text-align: center !important
}

h1,
h2,
h3,
h4,
h5,
h6 {
    color: #455a64;
    font-family: "Poppins", sans-serif;
    font-weight: 400
}

p {
    margin-top: 0;
    margin-bottom: 1rem
}

.form-popup {
  display: none;
 
  top:10px;
 left:100px;
  border: 3px solid #f1f1f1;
  z-index: 9;

  position:relative;
  width:1030px;
  margin-bottom:50px;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=file], .form-container input[type=tel] {
  width: 1000px;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
  
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: deeppink;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 1000px;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: deeppink;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
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
                       <p>Call US :- <a href="#"> +91 9888 705 770</a></p>
                    </div>
                    <div class="our-link">
                        <ul>
                             <li><a href="account.php"><i class="fa fa-user s_color"></i> My Account</a></li>
                            <li><a href="contact-us.php"><i class="fas fa-location-arrow"></i> Our location</a></li>
                            <li><a href="contact-us.php"><i class="fas fa-headset"></i> Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="login-box">
					<<button type="button"  style="background:#e561b9;border-radius:20px;color:white;" onclick="window.location.href='logout.php'">Logout</button>
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
                    <a class="navbar-brand" href="index.php"><img src="img/logo.png" class="logo" alt="" width="100px" height="100px"></a>
                </div>
                <!-- End Header Navigation -->

               <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="nav-item "><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item "><a class="nav-link" href="about.php">About Us</a></li>
              
                           <li class="nav-item active"><a class="nav-link" href="shop.php">Shop</a></li>
                    
                        <li class="nav-item"><a class="nav-link" href="gallery.php">Events</a></li>
						 <li class="nav-item"><a class="nav-link" href="account.php">Account</a></li>
                        <li class="nav-item active "><a class="nav-link" href="contact-us.php">Contact Us</a></li>
						<li class="nav-item "><a class="nav-link" href="myorder.php">Myorder</a></li>
                        
						
                    </ul>
                </div>
                <!-- /.navbar-collapse -->

                <!-- Start Atribute Navigation -->
                
            <!-- End Side Menu -->
			
                
                <!-- End Atribute Navigation -->
            </div>
            <!-- Start Side Menu -->
            
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Main Top -->

    <!-- Start Top Search -->
   
    <!-- End Top Search -->

    <!-- Start All Title Box -->
    <div class="all-title-box" style="background:url(img/com10.jpg) no-repeat center center;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -ms-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    text-align: center;
    background-attachment: fixed;
    padding: 70px 0px;
    position: relative;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Shop</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Shop</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Top Search -->

    <!-- Start All Title Box -->
   


<div class="padding">
    <div class="col-md-8">
        <!-- Column -->
        <div class="card"> <img class="card-img-top" src="https://i.imgur.com/K7A78We.jpg" alt="Card image cap">
            <div class="card-body little-profile text-center">
             <?php

include 'config.php';

$sql1 = "select * from user where email='".$floweruser."' ";

$result1 = mysqli_query($con,$sql1);

$num1=mysqlI_num_rows($result1);

$sl=0;

if($num1 > 0)

{

while($row1 = mysqli_fetch_array($result1))

{

$sl+=1;

$id=$row1[0];
$username=$row1['username'];
$contact=$row1['contact'];
$address=$row1['address'];
$email=$row1['email'];
$image=$row1['image'];



?>
                                                
                                   
                <div class="pro-img"><img src="user/<?php echo $image; ?>" alt="user" id="profile-pic">
</div>
     
      
                  
                                    
                <h3 class="m-b-0" style="font-weight:bold;color:black;"><?php echo $username; ?></h3>
                <p><?php echo $email; ?></p>
<hr>              
                    <h2 style="font-weight:bold;color:black;">Phonenumber</h2>
                              <h3><?php echo $contact; ?></h3>
                              <hr>
                              <h2 style="font-weight:bold;color:black;">Address</h2>
                        <h3 ><?php echo $address; ?></h3>
                                    
                                                <hr>
                   <a onclick="openForm()" class="btn hvr-hover" style="margin-right:-320px;width:140px;height:50px;color:white;">Update</a>
           <?php

}

}

?>
                  
                        <!--<a href="javascript:void(0)" class="m-t-10 waves-effect waves-dark btn btn-primary btn-md btn-rounded" data-abc="true">Edit Profile Photo</a>-->
            </div>
        </div>
    </div>
</div>
<div class="form-popup" id="myForm">
 
 <form method="post" action="#" enctype="multipart/form-data" class="form-container">
    <h1 style="margin-left:470px;">Update</h1>

    <label for="image"><b>Your Profile Picture</b></label><br>
    <input type="file" placeholder="Insert Image" name="image" value="<?php echo $image; ?>" required><br><br>

    <label for="username"><b>Username</b></label><br>
    <input type="text" placeholder="Enter useername" name="username"  value="<?php echo $username; ?>" required value=""><br><br>
      
       <label for="phone" style="margin-left:-90px;"><b>Phonenumber</b></label><br>
    <input type="tel"  name="contact" placeholder="your phonenumber"  value="<?php echo $contact; ?>" required><br><br>
       <label for="address" style="margin-left:-40px;"><b>Address</b></label><br>
    <input type="text"  name="address" placeholder="your address"  value="<?php echo $address; ?>" required><br><br>

    <button type="submit" class="btn" name="submit">submit</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
<?php					 						 
if(isset($_POST['submit']))
{
	error_reporting(1);
	include("config.php");
	    $contact=$_POST['contact'];
		$username=$_POST['username'];
		$address=$_POST['address'];
		$fname=$_FILES["image"]["name"];
		$filename=$name.$fname;
		$tempname=$_FILES["image"]["tmp_name"];
		$folder="user/".$filename;
		if (move_uploaded_file($tempname, $folder))
		{
	        $query="update user set image='".$filename."',contact='".$contact."',username='".$username."',address='".$address."' where email='".$floweruser."' ";
            mysqli_query($con, $query);
			echo "<script>
			        alert(' uploaded Successfully');
			    </script>";
			echo "<script> location.href='account.php'; </script>";
        }else{
	        echo "<script>
                    alert('Upload Failed,IMAGE should be less than 2GB');
                   </script>";
        }

}
?>
</div>
 
<div class="instagram-box">
        <div class="main-instagram owl-carousel owl-theme">
		
			<?php

include 'config.php';

$sql1 = "select * from footer";

$result1 = mysqli_query($con,$sql1);

$num1=mysqlI_num_rows($result1);

$sl=0;

if($num1 > 0)

{

while($row1 = mysqli_fetch_array($result1))

{

$sl+=1;

$id=$row1[0];

$image=$row1['image'];



?>

            <div class="item">
			

                <div class="ins-inner-box">
                    <img src="../admin/footer/<?php echo $image; ?>" alt="" />
                    <div class="hov-in">
                        
                    </div>
                </div>
				
				
				
				
            </div>
            <?php

}

}

?>
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
                                <li><a href="about.php">About Us</a></li>
                                <li><a href="shop.php">Shop</a></li>
                                <li><a href="gallery.php">Events</a></li>
                                <li><a href="contact-us.php">Contact us</a></li>
                                <li><a href="account.php">Account</a></li>
								<li><a href="myorder.php">Myorder</a></li>
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
        <p class="footer-company">All Rights Reserved. &copy; 2023  Design By :
            <a href="https://html.design/">Prathibha S</a></p>
    </div>
    <!-- End copyright  -->

    <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

    <!-- ALL JS FILES -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
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

<?php
}
else
{
	echo"<script>location.href='../sig.php';</script>";
}
?>