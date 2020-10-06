<?php 
session_start();
error_reporting(0);

include('includes/config.php');

if(strlen($_SESSION['alogin'])==0)
	{	
    header('location:../Login.php');
    }
    else{

?>

<html>
<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Panel</title>
	<!--Bootstrap CSS -->
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.css">
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.css">
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="assets/bootstrap/css/stylee.css">		
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
	
    <!-- Font -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" />
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

	
	<link rel="stylesheet" href="assets/css/stylee.css">
	
</head>

<nav class="navbar navbar-dark navbar-expand-lg bg-dark fixed-top">
  <a class="navbar-brand" href="index.php"><font color="#ff3333">Admin</font>Panel</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
  
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0" class="nav nav-pills">
	
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Dashboard <span class="sr-only">(current)</span></a>
      </li>
	  
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Gallery
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="Gallery.php">Gallery</a>
		  <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="options/Add-image.php">Add Image</a>	
        </div>
      </li>
	  
      <li class="nav-item dropdown ">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          News
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="News.php">Posted News</a>
		  <div class="dropdown-divider"></div>
          <a class="dropdown-item " href="options/Add-news.php">Add News</a>
        </div>
      </li>	  
      <li class="nav-item dropdown ">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Shop
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="Shop.php">Posted Product</a>
		  <div class="dropdown-divider"></div>
          <a class="dropdown-item " href="options/Add-Product.php">Add Product</a>
        </div>
      </li>
	  
      <li class="nav-item">
        <a class="nav-link" href="Messages.php">Messages <span class="sr-only"></span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="Other.php">Other <span class="sr-only"></span></a>
      </li>	  		  
    </ul>
	<ul class="nav navbar-nav ml-auto">
		<li class="nav-item dropdown">
			<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="fa fa-users" aria-hidden="true"></i></a>
			<div class="dropdown-menu dropdown-menu-right">
				<a href="Settings.php" class="dropdown-item">Settings</a>
				<div class="dropdown-divider"></div>
				<a href="includes/logout.php"class="dropdown-item">Logout</a>
			</div>
		</li>
	</ul>	
  </div>
</nav>

<br><br><br>

<body>

<div class="container">
	<div class="alert alert-info alert-dismissible fade show" role="alert">
	  <strong>Wellcome Admin!</strong> You should check in on some of those fields below.
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	  </button>
	</div>
</div>
				<div class="container">
					<div class="accordion" id="accordionExample">

							<div class="card">
								<div class="card-header bg-light " id="headingOne">
								  <h2 class="mb-0">				  
									<div class="alert alert-success  text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
										<center><h5>Total Summery</h5></center>
									</div> 					
								  </h2>
								</div>
								<div id="collapseOne" class="collapse show bg-light" aria-labelledby="headingOne" data-parent="#accordionExample">
									 <div class="card-body">
								  
											 <div class="row">				 
												<div class="col-md-3 col-sm-3 col-xs-6">
													<h5>Admins </h5>
													<div class="alert alert-warning text-center">
														<i class="fa fa-users fa-5x"></i>
														<h3>							
														  <?php								  
																$query	= "SELECT * FROM users WHERE AccType='AD'";
																$query_run = $dbh->query($query);
																$query_exec = $query_run->rowCount();
																echo "$query_exec ";						  			  
														  ?>								  
														</h3>
														 
													</div>
													
												</div>	           
												<div class="col-md-3 col-sm-3 col-xs-6">
													<h5>Users </h5>
													<div class="alert alert-warning text-center">
														<i class="fa fa-user-circle fa-5x"></i>
														<h3>							
														  <?php								  
																$query	= "SELECT * FROM users WHERE AccType='US'";
																$query_run = $dbh->query($query);
																$query_exec = $query_run->rowCount();
																echo "$query_exec ";						  			  
														  ?>								  
														</h3>
														 
													</div>
													
												</div>	
												<div class="col-md-3 col-sm-3 col-xs-6">
													<h5>News </h5>
													<div class="alert alert-warning text-center">
														<i class="fa fa-address-card fa-5x"></i>
														<h3>							
														  <?php								  
																$query	= "SELECT * FROM news";
																$query_run = $dbh->query($query);
																$query_exec = $query_run->rowCount();
																echo "$query_exec ";						  			  
														  ?>								  
														</h3>
														 
													</div>
													
												</div>	
												<div class="col-md-3 col-sm-3 col-xs-6">
													<h5>Products</h5>
													<div class="alert alert-warning text-center">
														<i class="fa fa-university fa-5x"></i>
														<h3>							
														  <?php								  
																$query	= "SELECT * FROM product";
																$query_run = $dbh->query($query);
																$query_exec = $query_run->rowCount();
																echo "$query_exec ";						  			  
														  ?>								  
														</h3>
														 
													</div>
													
												</div>	
												<div class="col-md-3 col-sm-3 col-xs-6">
													<h5>Messages </h5>
													<div class="alert alert-warning text-center">
														<i class="fa fa-envelope-open fa-5x"></i>
														<h3>							
														  <?php								  
																$query	= "SELECT * FROM messages";
																$query_run = $dbh->query($query);
																$query_exec = $query_run->rowCount();
																echo "$query_exec ";						  			  
														  ?>								  
														</h3>
														 
													</div>
													
												</div>							
											 </div> 
									</div>
								 </div>
							</div>
					</div>
				</div>							
				<div class="container">
					<div class="accordion" id="accordionExample">
								<br><br>
								
							<div class="card">
								<div class="card-header bg-light " id="headingTwo">
								  <h2 class="mb-0">				  
									<div class="alert alert-success  text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
										<center><h5>Login Details</h5></center>
									</div> 					
								  </h2>
								</div>
								<div id="collapseTwo" class="collapse show bg-light" aria-labelledby="headingTwo" data-parent="#accordionExample">
									 <div class="card-body">
									 
										 <div class="table-wrapper-scroll-y my-custom-scrollbar">
												<table class="table">
																	<style>		
																	.my-custom-scrollbar {
																	position: relative;
																	height: 400px;
																	overflow: auto;
																	}
																	.table-wrapper-scroll-y {
																	display: block;
																	}
																	</style>				
														  <thead>
															<tr>
															  <th scope="col">Email</th>
															  <th scope="col">Date</th>
															  <th scope="col">Time</th>
															  <th scope="col">Details</th>
															  <th scope="col">Status</th>						  
															</tr>
														  </thead>
														  <tbody>													  
																	<?php $sql = "SELECT * FROM logindetails ORDER BY id DESC";
																	$query = $dbh -> prepare($sql);
																	$query->execute();
																	$results=$query->fetchAll(PDO::FETCH_OBJ);
																	$cnt=1;
																	if($query->rowCount() > 0)
																	{
																	foreach($results as $result)
																	{
																	?>					  			  
															<tr>
															  <td><?php echo htmlentities($result->Email);?></td>
															  <td><?php echo htmlentities($result->LoginDate);?></td>
															  <td><?php echo htmlentities($result->LoginTime);?></td>
															  <td><?php echo htmlentities($result->Location);?></td>
															  <td><?php echo htmlentities($result->Status);?></td>						  
															</tr>
																	<?php }} ?>							
															
														  </tbody>	
												</table>
										 </div> 
									</div>
								 </div>
							</div>
									
					</div>
				</div>
				

<?php
include ("include/footer.php");
?>
	
</body>

	
    <!-- JavaScript -->		
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

	<!--Bootstrap JS -->
	<script src="assets/bootstrap/js/bootstrap.bundle.js"></script>
	<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.js"></script>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>	

    <!-- Jquery core JavaScript -->
    <script src="assets/bootstrap/jquery/jquery.min.js"></script>
	<script src="assets/bootstrap/jquery/jquery.js"></script>
    <script src="assets/bootstrap/jquery/jquery.slim.min.js"></script>
	<script src="assets/bootstrap/jquery/jquery.slim.js"></script>
	
    <script src="assets/js/right-click-dissable.js"></script>    
</html>
 <?php } ?>