
<?php 
include('includes/config.php');
require_once("includes/config.php");

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
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
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
                                <h2>Cart</h2>
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
                
				<?php $OID='VJ'.date('yis');	?>
				
		  <div class="col mb-4">
			<div class="card bg-light " >
			  <div class="card-body">
			  	<a class="btn btn-primary btn-sm" href="services.php" role="button"> <i class="fa fa-home" aria-hidden="true"></i> Go Back</a>
			    <p font color="black">Your Order Details || Order ID - <?php echo $OID;?></font></p>
				<table class="table table-bordered">
				  <thead>
					<tr class="table-primary">
					  <th scope="col">Name</th>
					  <th scope="col">Product ID</th>
					  <th scope="col">Quantity</th>
					  <th scope="col">Unit Price</th>
					  <th scope="col">Price</th>
					  <th scope="col">Remove</th>					  
					</tr>
				  </thead>
			  
                                 <?php 
		                			$id=$_GET['id'];
									
									//$sql = "SELECT * FROM test WHERE ProductID='$id' ";
                                    $sql = "SELECT * FROM test ";
									
									$query = $dbh -> prepare($sql);
									$query->execute();
									$results=$query->fetchAll(PDO::FETCH_OBJ);
									$cnt=1;
									if($query->rowCount() > 0)
									{
									foreach($results as $result)
									{  
									
									$total = $result->Price * $result->Quantity ;
									
									?>	
									
									
				  <tbody>
					<tr>
					  <th scope="row"><?php echo htmlentities($result->ProductName);?></th>
					  <td><?php echo htmlentities($result->ProductID);?> </td>
					  <td> <?php echo htmlentities($result->Quantity);?></td>
					  <td>$ <?php echo htmlentities($result->Price);?></td>
					  <td>$ <?php echo $total;?></td>
					  <td align="center"> <i class="fa fa-trash" aria-hidden="true"></i> </td>				  
					</tr>
				  </tbody>

						            <?php }} ?>

				  <tbody>
						<tr class="table-danger">
						  <td colspan="4">Total </td>
						  <td colspan="2" align="Right">$ <?php echo $total;?> </td>
						 
						</tr>
				  </tbody>
				  
				  <tbody>
						<tr>
						  <td colspan="4"></td>
						  <td colspan="2"><center> <a class="btn btn-primary btn-sm" href="Checkout.php?OID=<?php echo $OID;?>&&total=<?php echo $total;?>" role="button">Checkout</a> </center></td>
						
						</tr>
				  </tbody>	
				  
				</table>


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