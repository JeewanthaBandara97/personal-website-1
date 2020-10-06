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

<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Vidyuth Jamwal </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

	
</head>
  
  <br><br>
  
  <div class="container col-75">
  
			  <div class="col mb-4">
			    <a class="btn btn-primary btn-sm" href="cart.php?id=" role="button"> <i class="fa fa-cart-arrow-down" aria-hidden="true"></i>Go Back</a>
				<br><br>
				<div class="card bg-light " >
				  <div class="card-body">
					<!--<form class="needs-validation" novalidate>-->
					  <h3>Your Details</h3>
					  
					  <div class="form-row">
						<div class="col-md-6 mb-3">
						  <label for="validationTooltip01">Full Name</label>
						  <input type="text" class="form-control" id="validationTooltip01" value="" required>
						  <div class="valid-tooltip">
							Looks good!
						  </div>
						</div>
						<div class="col-md-6 mb-3">
						  <label for="validationTooltip02">Email</label>
						  <input type="text" class="form-control" id="validationTooltip02" value="" required>
						  <div class="valid-tooltip">
							Looks good!
						  </div>
						</div>
					  </div>
					  
					  <div class="form-row">
						<div class="col-md-6 mb-3">
						  <label for="validationTooltip03">Address</label>
						  <input type="text" class="form-control" id="validationTooltip03" required>
						  <div class="invalid-tooltip">
							Please provide a valid city.
						  </div>
						</div>
						<div class="col-md-3 mb-3">
						  <label for="validationTooltip03">City</label>
						  <input type="text" class="form-control" id="validationTooltip03" required>
						  <div class="invalid-tooltip">
							Please provide a valid city.
						  </div>
						</div>
						<div class="col-md-3 mb-3">
						  <label for="validationTooltip05">Zip</label>
						  <input type="text" class="form-control" id="validationTooltip05" required>
						  <div class="invalid-tooltip">
							Please provide a valid zip.
						  </div>
						</div>			
					  </div>
					  
					  <hr>
					  
					  <h3>Credit Card Details</h3>
					  <div class="form-row">
						<div class="col-md-6 mb-3">
						  <label for="validationTooltip03">Name on Card</label>
						  <input type="text" class="form-control" id="validationTooltip03" required>
						  <div class="invalid-tooltip">
							Please provide a valid city.
						  </div>
						</div>
						<div class="col-md-3 mb-3">
						  <label for="validationTooltip03">Credit card number</label>
						  <input type="text" class="form-control" id="validationTooltip03" required>
						  <div class="invalid-tooltip">
							Please provide a valid city.
						  </div>
						</div>
						<div class="col-md-3 mb-3">
						  <label for="validationTooltip05">Exp Month/Year</label>
						  <input type="text" class="form-control" id="validationTooltip05" required>
						  <div class="invalid-tooltip">
							Please provide a valid zip.
						  </div>
						</div>
						<div class="col-md-3 mb-3">
						  <label for="validationTooltip05">CVV</label>
						  <input type="text" class="form-control" id="validationTooltip05" required>
						  <div class="invalid-tooltip">
							Please provide a valid zip.
						  </div>
						</div>				
					  </div>

                      <hr>
					  <table class="table table-bordered">
						  <thead>
							<tr align="right">
                                     <?php $OID=$_GET['OID']; 	?>
									 <?php $TOTAL=$_GET['total']; 	?>						
							  <th><h4>Order ID- <?php echo $OID; ?> </h4></th>
                              <th><h4>Total - $<?php echo $TOTAL; ?> </h4></th>							  
							</tr>
						  </thead>
						  <tbody>
							<tr align="right">
							  <td></td>
							  
                              <td>
								 <form action="option/pay.php" method="post">
									<button type="submit" name="submit" class="btn btn-primary">Pay</button>
								 </form>							  
                              </td>							  
							</tr>
						  </tbody>					  
					  <table>
					  
					  
					  
					<!--</form>-->
					
					
				  </div>
				</div>
			  </div>
  
	</div>	
		
</html>	
 <?php } ?>	