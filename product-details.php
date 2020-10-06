<?php
   include('includes/config.php');
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
            <link rel="stylesheet" href="assets/css/details-page.css">


			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" />

	
	
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
							<h2>Products </h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Hero End -->
	
        <!--? Products Area Start -->
<section class="gallery-area about2 section-padding30 fix">
	<div class="container-fluid p-0">

			
    <div class="product-page-main">
         <div class="container">

				 <?php
				 $id=intval($_GET['id']);

				$sql = "SELECT * FROM product WHERE product.id=:id";

				$query = $dbh -> prepare($sql);
				$query->bindParam(':id',$id, PDO::PARAM_STR);
				$query->execute();
				$results=$query->fetchAll(PDO::FETCH_OBJ);
				$cnt=1;
				if($query->rowCount() > 0)
				{
				foreach($results as $result)
				{  

				?> 
				<?php }} ?> 
		 	 
								<div class="row">
								   <div class="col-md-12">
									  <div class="prod-page-title">
										 <h2> 
											  <ul class="breadcrumb">
												<li><a href="services.php">Shopping</a></li>
												<li>
												  Product - <?php echo htmlentities($result->ProductName);?> || <?php echo htmlentities($result->ProductID);?>
												</li>
											  </ul>
										 </h2>
										  
									  </div>
								   </div>
								</div>
									
							<div class="row">
										
							   <div class="col-md-2 col-sm-4">
								  <div class="left-profile-box-m prod-page">
									 <a href="services.php">All Products</a>
								  </div>
							   </div>
								   
							   <div class="col-md-7 col-sm-8">
								  <div class="md-prod-page">
								  
									 <div class="md-prod-page-in">
										<div class="page-preview">
										   <div class="preview">
											  <div class="preview-pic tab-content">
												 <div class="tab-pane active" id="pic-1"><img src="Image/Products/<?php echo htmlentities($result->Image1);?> " alt="No Image" /></div>
												 
												 <div class="tab-pane" id="pic-2"><img src="Image/Products/<?php echo htmlentities($result->Image2);?>" alt="No Image" /></div>
												 
												 <div class="tab-pane" id="pic-3"><img src="Image/Products/<?php echo htmlentities($result->Image1);?> " alt="No Image" /></div>
												 
												 <div class="tab-pane" id="pic-4"><img src="Image/Products/<?php echo htmlentities($result->Image2);?>" alt="No Image" /></div>
												 
											  </div>
											  <ul class="preview-thumbnail nav nav-tabs">
												 <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="Image/Products/<?php echo htmlentities($result->Image1);?> " alt="No Image" /></a></li>
												 
												 <li><a data-target="#pic-2" data-toggle="tab"><img src="Image/Products/<?php echo htmlentities($result->Image2);?>" alt="No Image" /></a></li>
												 
												 <li><a data-target="#pic-3" data-toggle="tab"><img src="Image/Products/<?php echo htmlentities($result->Image1);?> " alt="No Image" /></a></li>
												 
												 <li><a data-target="#pic-4" data-toggle="tab"><img src="Image/Products/<?php echo htmlentities($result->Image2);?> " alt="No Image" /></a></li>
												 

											  </ul>
										   </div>
										</div>										
									 </div>
									 
									 <div class="description-box">
										<div class="spe-a">
										   <ul>
											  <li class="clearfix">
												 <div class="col-md-4">
													<h5>Specifications</h5>
												 </div>
												 <div class="col-md-12">
													<p><?php echo htmlentities($result->Discription);?> </p>
												 </div>
											  </li>
										   </ul>
										</div>					
									 </div>
									 
									 
								  </div> 
							   </div>
							   
							   <div class="col-md-3 col-sm-12">
								  <div class="price-box-right">
								  	 <h3><?php echo htmlentities($result->ProductName);?></h3>
								  	 <h4>Product ID: <?php echo htmlentities($result->ProductID);?></h4>									 
									 <h4>Price: $<?php echo htmlentities($result->Price);?></h4>                                           
									 <!--<a href="cart.php">Buy Now</a>-->
									 
									 <a href="login.php">Add Cart</a>
								  </div>
							   </div>
							   
							</div>
						 </div>
					  </div>
				 
				 <br><br><br><br>
				
				
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
        <script src="./assets/js/jquery.magnific-popup.js"></script>

		<!-- Nice-select, sticky -->
        <script src="./assets/js/jquery.nice-select.min.js"></script>
		<script src="./assets/js/jquery.sticky.js"></script>
        
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