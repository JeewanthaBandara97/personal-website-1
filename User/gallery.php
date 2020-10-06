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

?>


<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Vidyuth Jamwal </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

		<!-- CSS here -->
            <link rel="stylesheet" href="assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
            <link rel="stylesheet" href="assets/css/slicknav.css">
            <link rel="stylesheet" href="assets/css/flaticon.css">
            <link rel="stylesheet" href="assets/css/animate.min.css">
            <link rel="stylesheet" href="assets/css/magnific-popup.css">
            <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
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
								<h2> Gallery </h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Hero End -->
	
        <!--? Gallery Area Start -->
        <section class="gallery-area about2 section-padding30 fix">
			<div class="container-fluid p-0">					
                <div class="row no-gutters">									
                    
                                 <?php 
		                									
									$sql = "SELECT * FROM gallery ORDER BY id DESC ";

									$query = $dbh -> prepare($sql);
									$query->execute();
									$results=$query->fetchAll(PDO::FETCH_OBJ);
									$cnt=1;
									if($query->rowCount() > 0)
									{
									foreach($results as $result)
									{  
									?>					
					<div class="col-xl-3 col-lg-4 col-md-4 col-sm-4">
                        <div class="gallery-box">
                            <div class="single-gallery">
                                <div class="gallery-img" style="background-image: url(../Image/Gallery/<?php echo htmlentities($result->Image);?>);"></div>
                                <div class="cap-icon">
                                    <a href="../Image/Gallery/<?php echo htmlentities($result->Image);?>" class="ti-fullscreen img-pop-up"></a>
                                </div>
                                <div class="g-caption">
                                    <h4><?php echo htmlentities($result->Details);?></h4>
                                    <p> </p>
                                </div>
                            </div>
                        </div>
					</div>	
						            <?php }} ?>
                    
				</div>
			</div>		               
        </section>	
        <!-- Gallery Area End -->
		
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
        <script src="assets/js/jquery.magnific-popup.js"></script>

		<!-- Nice-select, sticky -->
        <script src="assets/js/jquery.nice-select.min.js"></script>
		<script src="assets/js/jquery.sticky.js"></script>
        
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