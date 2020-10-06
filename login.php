<?php
session_start();
include('includes/config.php');

if(isset($_POST['login'])){
    
	$email=$_POST['email'];
	$password=$_POST['password'];
	
	$sql ="SELECT Email,Password,AccType FROM users WHERE Email=:email and Password=:password and AccType='AD' ";
	
	$query= $dbh -> prepare($sql);
	$query-> bindParam(':email', $email, PDO::PARAM_STR);
	$query-> bindParam(':password', $password, PDO::PARAM_STR);
	$query-> execute();
	$results=$query->fetchAll(PDO::FETCH_OBJ);

	$sql2 ="SELECT Email,Password,AccType FROM users WHERE Email=:email and Password=:password and AccType='US' ";
	
	$query2= $dbh -> prepare($sql2);
	$query2-> bindParam(':email', $email, PDO::PARAM_STR);
	$query2-> bindParam(':password', $password, PDO::PARAM_STR);
	$query2-> execute();
	$results2=$query2->fetchAll(PDO::FETCH_OBJ);
	
	if($query->rowCount() > 0)
	{				
	     $_SESSION['alogin']=$_POST['email'];
	     echo "<script type='text/javascript'> document.location = 'Admin/index.php'; </script>";
	}
	else if($query2->rowCount() > 0)
	{
		
	            $email=$_POST['email'];
			    date_default_timezone_set("Asia/Colombo");
				$date=date('Y-m-d H:i:s');
				$time=date('H:i:s');
				$location=$_SERVER['REMOTE_ADDR'];
				$status="Login Success!! User Login";
				
				$sql3 = "INSERT INTO logindetails(Email,LoginDate,LoginTime,Location,Status) 
				VALUES(:email,:date,:time,:location,:status)";
				
				$query3= $dbh -> prepare($sql3);
				$query3->bindParam(':email',$email,PDO::PARAM_STR);				
				$query3->bindParam(':date',$date,PDO::PARAM_STR);
				$query3->bindParam(':time',$time,PDO::PARAM_STR);		
				$query3->bindParam(':location',$location,PDO::PARAM_STR);
				$query3->bindParam(':status',$status,PDO::PARAM_STR);				
				$query3->execute();
				
	     $_SESSION['alogin']=$_POST['email'];
	     echo "<script type='text/javascript'> document.location = 'User/index.php'; </script>";						
	}	
	else
	{				
	     echo "<script>alert('Invalid Login Details');</script>";
	}
	
}

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



//*************************************************************************//
/*		if($query->rowCount() > 0)
		{
			
	            $email=$_POST['email'];
			    date_default_timezone_set("Asia/Colombo");
				$date=date('Y-m-d H:i:s');
				$time=date('H:i:s');
				$location=$_SERVER['REMOTE_ADDR'];
				$status="Login Success";
				
				$sql1 = "INSERT INTO logindetails(Email,LoginDate,LoginTime,Location,Status) 
				VALUES(:email,:date,:time,:location,:status)";
				
				$query1= $dbh -> prepare($sql1);
				$query1->bindParam(':email',$email,PDO::PARAM_STR);				
				$query1->bindParam(':date',$date,PDO::PARAM_STR);
				$query1->bindParam(':time',$time,PDO::PARAM_STR);		
				$query1->bindParam(':location',$location,PDO::PARAM_STR);
				$query1->bindParam(':status',$status,PDO::PARAM_STR);				
				$query1->execute();
				
		        $_SESSION['alogin']=$_POST['email'];

		        echo "<script type='text/javascript'> document.location = 'Admin/index.php'; </script>";
				
		} else{
	            $email=$_POST['email'];
			    date_default_timezone_set("Asia/Colombo");
				$date=date('Y-m-d H:i:s');
				$time=date('H:i:s');
				$location=$_SERVER['REMOTE_ADDR'];
				$status="Not Logged! Wrong Login Details";
				
				$sql1 = "INSERT INTO logindetails(Email,LoginDate,LoginTime,Location,Status) 
				VALUES(:email,:date,:time,:location,:status)";
				
				$query1= $dbh -> prepare($sql1);
				$query1->bindParam(':email',$email,PDO::PARAM_STR);				
				$query1->bindParam(':date',$date,PDO::PARAM_STR);
				$query1->bindParam(':time',$time,PDO::PARAM_STR);		
				$query1->bindParam(':location',$location,PDO::PARAM_STR);
				$query1->bindParam(':status',$status,PDO::PARAM_STR);				
				$query1->execute();

				
		echo "<script>alert('Invalid Login Details');</script>";

		}
*/		
//*************************************************************************//


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
							<h2>Login </h2>
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
					   <font size="6" color="#ff1a1a">User Login</font>
				  </div> 
				  <div class="form">     
						<form name="insert-form" id="contact-form"  method="POST">     
							<br>
							<div class="inputfield">
							  <label>Email address</label>
							  <input type="text" name="email" class="input" placeholder="" required aria-describedby="emailHelp">
							</div>    
							<div class="inputfield">
							  <label>Password</label>
							  <input type="password" name="password" class="input" placeholder="" required>
							</div>  
							<div class="inputfield">
							<input type="submit" name="login" value="Login" class="btn" onclick="window.location.href = 'Admin/index.php';">
							</div>
							<div class="inputfield">    
							<input type="button" value="Cancel" class="btn" onclick="window.location.href = 'index.php';">   
							</div>
							<p>Not a user? <a href="Signup.php">Sign up</a></p>
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