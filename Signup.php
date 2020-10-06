<?php
session_start();
include('includes/config.php');


if(isset($_POST['signup']))
{
	$email=$_POST['email'];

    $sql = "SELECT COUNT(Email) AS num FROM users WHERE Email = :email";
    $stmt = $dbh->prepare($sql);
    
    $stmt->bindValue(':email',$email); 
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);	
			
    if($row['num'] > 0){
		echo "<script>alert('That Email Already Exists!');</script>";				
	}
    else{
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$type='US';
		
		$sql = "INSERT INTO users(FirstName,LastName,Email,Password,AccType) VALUES(:fname,:lname,:email,:password,:type)";	
		 
		$query= $dbh -> prepare($sql);
		$query-> bindParam(':fname',$fname, PDO::PARAM_STR);
		$query-> bindParam(':lname',$lname, PDO::PARAM_STR);	
		$query-> bindParam(':email',$email, PDO::PARAM_STR);
		$query-> bindParam(':password',$password, PDO::PARAM_STR);
		$query-> bindParam(':type',$type, PDO::PARAM_STR);
		$query-> execute();
		
		if($query)
		{
		   header('Location: Login.php?success');
		}
		else 
		{
			echo "<script>alert('Invalid Details');</script>";
			header('Location: index.php?error');
		}		
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
		<link rel="stylesheet" href="assets/css/form.css">
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
							<h2>Signup </h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Hero End -->
        
 <section class="home-blog-area section-padding20">
       
            <div class="container">
                <div class="row">
  

                <div class="wrapper">
				  <div class="title">
					   <font size="6" color="#ff1a1a">User Sign Up</font>
				  </div> 
				  <div class="form">     
						<form name="insert-form" id="contact-form"  method="POST">     
							<br>
							<div class="inputfield">
							  <label>First Name</label>
							  <input type="text" name="fname" class="input" placeholder="" required aria-describedby="emailHelp">
							</div> 
							<div class="inputfield">
							  <label>Last Name</label>
							  <input type="text" name="lname" class="input" placeholder="" required aria-describedby="emailHelp">
							</div>   			
							<div class="inputfield">
							  <label>Email address</label>
							  <input type="text" name="email" class="input" placeholder="" required aria-describedby="emailHelp">
							</div>    
							<div class="inputfield">
							  <label>Password</label>
							  <input type="password" name="password" class="input" placeholder="" required>
							</div>  
							<div class="inputfield">
							<input type="submit" name="signup" value="Signup" class="btn" >
							</div>
							<div class="inputfield">    
							<input type="button" value="Cancel" class="btn" onclick="window.location.href = 'index.php?page=Home';">   
							</div>
							<p font color="blue"><a href="login.php">Login</a></font></p>
						</form>
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
        <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
		<!-- Jquery, Popper, Bootstrap -->
		<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="./assets/js/popper.min.js"></script>
        <script src="./assets/js/bootstrap.min.js"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="./assets/js/jquery.slicknav.min.js"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="./assets/js/owl.carousel.min.js"></script>
        <script src="./assets/js/slick.min.js"></script>
		<!-- One Page, Animated-HeadLin -->
        <script src="./assets/js/wow.min.js"></script>
		<script src="./assets/js/animated.headline.js"></script>
		
		<!-- Nice-select, sticky -->
        <script src="./assets/js/jquery.nice-select.min.js"></script>
		<script src="./assets/js/jquery.sticky.js"></script>
        <script src="./assets/js/jquery.magnific-popup.js"></script>

        <!-- contact js -->
        <script src="./assets/js/contact.js"></script>
        <script src="./assets/js/jquery.form.js"></script>
        <script src="./assets/js/jquery.validate.min.js"></script>
        <script src="./assets/js/mail-script.js"></script>
        <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="./assets/js/plugins.js"></script>
        <script src="./assets/js/main.js"></script>

    </body>
    
</html>