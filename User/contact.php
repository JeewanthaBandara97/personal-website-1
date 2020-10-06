<?php 
include('includes/config.php');

session_start();
error_reporting(0);

include('includes/config.php');

if(strlen($_SESSION['alogin'])==0)
	{	
    header('location:../Login.php');
    }
    else{
  
	if(isset($_POST['submit']))
	  {		  
		$name=$_POST['name'];
		$email=$_POST['email'];
		$subject=$_POST['subject'];
		$message=$_POST['message'];
		$date=date("Y/m/d");


		  $sql = "INSERT INTO messages(Name,Email,Subject,Messages,Date) 
						   VALUES('$name','$email','$subject','$message','$date')";
						   
		$query = $dbh->prepare($sql);

		$query->bindParam(':name',$name,PDO::PARAM_STR);
		$query->bindParam(':email',$email,PDO::PARAM_STR);
		$query->bindParam(':subject',$subject,PDO::PARAM_STR);
		$query->bindParam(':message',$message,PDO::PARAM_STR);
		$query->bindParam(':date',$date,PDO::PARAM_STR);

		$query->execute();
		
		if($query)
		{
		header('Location: contact.php?notification=Succses');
		}
		else 
		{
		header('Location: contact.php?notification=Error');

		}

	}
  
?>


<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Vidyuth Jamwal </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

   <!-- CSS here -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/slicknav.css">
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="assets/css/themify-icons.css">
        <link rel="stylesheet" href="assets/css/themify-icons.css">
        <link rel="stylesheet" href="assets/css/slick.css">
        <link rel="stylesheet" href="assets/css/nice-select.css">
        <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

        <!--? Header Start-->
		<?php
		include ("includes/header.php");
		?>
        <!-- Header End-->
		
    <main>

        <!--? Hero Start -->
        <div class="slider-area ">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 text-center">
                                <h2>Contact Us</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
        <!-- ================ contact section start ================= -->
        <section class="contact-section">
            <div class="container">

<?php

     $msg = $_GET['notification'];


	
     if($msg=="Succses"){                
			echo" <div class=\"alert alert-primary alert-dismissible fade show\" role=\"alert\"> ";
			echo"	<strong>Successfully!</</strong>  Message Send ";
			echo"	<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"> ";
			echo"		<span aria-hidden=\"true\">&times;</span> ";
			echo"	</button> ";
			echo" </div>	 ";
	 }	 
	 else if($msg=="Error"){        
			echo" <div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\"> ";
			echo"	<strong>Error!</strong> Message not Send ";
			echo"	<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"> ";
			echo"		<span aria-hidden=\"true\">&times;</span> ";
			echo"	</button> ";
			echo" </div> ";		 
	 }	 
	 


	 
?>


                <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title"><font color="red">Get in Touch</font></h2>
                    </div>
                    <div class="col-lg-8">
		
						<form  action="" method="post" id="">
							<div class="row">
							
								<div class="col-sm-6">
									<div class="form-group">		
										 <input class="form-control" name="name" id="name" type="text"   placeholder="Enter your Name" required="">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">				
										 <input class="form-control" name="email" id="email" type="text"  placeholder="Enter your Email" required="">
									</div>
								</div>						 
								<div class="col-sm-12">
									<div class="form-group">					
										 <input class="form-control" name="subject" id="subject" type="text"   placeholder="Enter your Subject" required="">
									</div>
								</div>						 
								<div class="col-12">
									<div class="form-group">
										<textarea class="form-control w-100" name="message" id="message" cols="10" rows="9"  placeholder=" Enter Message" required=""></textarea>
									</div>
								</div>

								<div class="col-2">
									<div class="form-group mt-4">					
										 <button  type="submit" id="form-submit" name="submit" class="button button-contactForm boxed-btn">Send Message</button>
									</div>
								</div>						 
									
							</div>
						</form>	
		
                    </div>
						<div class="col-lg-3 offset-lg-1">
							<div class="media contact-info">
								<span class="contact-info__icon"><i class="ti-home"></i></span>
								<div class="media-body">
									<h3>Buttonwood, California.</h3>
									<p>Rosemead, CA 91770</p>
								</div>
							</div>
							<div class="media contact-info">
								<span class="contact-info__icon"><i class="ti-tablet"></i></span>
								<div class="media-body">
									<h3>+1 253 565 2365</h3>
									<p>Mon to Fri 9am to 6pm</p>
								</div>
							</div>
							<div class="media contact-info">
								<span class="contact-info__icon"><i class="ti-email"></i></span>
								<div class="media-body">
									<h3>VidyuthJamwal@web.com</h3>
									<p>Send us your query anytime!</p>
								</div>
							</div>
						</div>
                </div>
            </div>
        </section>
        <!-- ================ contact section end ================= -->

    </main>
	
	
	
         <!--? Footer Start-->
		<?php
		include ("includes/footer.php");
		?>
        <!-- Footer End-->
 
 
 
    <!-- Scroll Up -->
    <div id="back-top" >
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <!-- JS here -->
	
		<!-- All JS Custom Plugins Link Here here -->
        <script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>
		<!-- Jquery, Popper, Bootstrap -->
		<script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="assets/js/jquery.slicknav.min.js"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/slick.min.js"></script>
		<!-- One Page, Animated-HeadLin -->
        <script src="assets/js/wow.min.js"></script>
		<script src="assets/js/animated.headline.js"></script>
		
		<!-- Nice-select, sticky -->
        <script src="assets/js/jquery.nice-select.min.js"></script>
		<script src="assets/js/jquery.sticky.js"></script>
        <script src="assets/js/jquery.magnific-popup.js"></script>

        <!-- contact js -->
        <script src="assets/js/contact.js"></script>
        <script src="assets/js/jquery.form.js"></script>
        <script src="assets/js/jquery.validate.min.js"></script>
        <script src="assets/js/mail-script.js"></script>
        <script src="assets/js/jquery.ajaxchimp.min.js"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>

    </body>
    
</html>
 <?php } ?>