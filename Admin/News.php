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

    <!-- Font -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
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
	
      <li class="nav-item ">
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
		  <div class="dropdown-divider"></div>
        </div>
      </li>
	  
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          News
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item active" href="Posted-Design.php">Posted News</a>
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
        <a class="nav-link" href="Messages.php">Messages <span class="sr-only">(current)</span></a>
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

<!-- ############################################## Start search ################################-->
<div class="container">

	<div class="alert alert-info alert-dismissible fade show" role="alert">
	  <strong>Notification</strong> You should check in on some of those fields below.
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	  </button>
	</div>
				<script>
					$('#myAlert').on('close.bs.alert', function () {
					  // do something…
					})
				</script>
				
	<form action="News.php" method="POST">
			<div class="input-group md-form form-sm form-2 pl-0">
			 
				  <input class="form-control my-0 py-1 amber-border" id="search" name="keyword" type="text" placeholder="Search" aria-label="Search">
				  <div class="input-group-append">
					<button class="input-group-text amber lighten-3"  type="submit"  name="search" id="basic-text1"><i class="fas fa-search text-grey" aria-hidden="true"></i></button>
				  </div>
			  
			</div>
	</form>
</div>
<!-- ############################################## End search ##################################-->


<br>
<!-- ############################################## Start Fetch Data ############################-->
<?php  
if(isset($_POST['search'])){
	?>	
<div class="container">

	<?php $keyword = $_POST['keyword']; ?>
	<nav aria-label="breadcrumb">
	  <ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="News.php">News</a></li>
		<li class="breadcrumb-item active" aria-current="page">Search Result - <?php echo $keyword ; ?> </li>
	  </ol>
	</nav>
	
    <div class="row row-cols-1 row-cols-md-3">
	
					<?php					

					$keyword = $_POST['keyword'];
					
					$query = $dbh->prepare("SELECT * FROM News WHERE id LIKE '%%$keyword%%' OR Topic LIKE '%$keyword%'  ORDER BY id DESC ");
					$query->execute();
					
					while($row = $query->fetch()) {
					?>	

				  <div class="col mb-4">
					<div class="card h-100">
					  <img src="../Image/News/<?php echo $row['Image']; ?>" class="card-img-top" alt="" height="250px" width="300px">
					  <div class="card-body">
						<h5 class="card-title"><b><?php echo $row['Topic']; ?></b> </h5>
						<h6>Link: <a href=" <?php echo $row['Link']; ?>" >Go</a></h6>
						
							<p class="card-text"><font color="#b3b3b3">
							   <?php echo $row['Date']; ?>
							
							</font></p>
							<center>
								<a href="options/edit-news.php?id=<?php echo $row['id']; ?>" class="btn btn-primary btn-sm" >Edit Details</a>  						
								<a href="options/delete-news.php?del=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure, you want to delete this News?');">Delete</a>
						</center>
					  </div>
					</div>
				  </div>
				  
               <?php } ?>	 
    </div>
</div>
<?php
}else{
?>	

<div class="container">
    <div class="row row-cols-1 row-cols-md-3">
	
					<?php					
					
					$query = $dbh->prepare("SELECT * FROM News ORDER BY id DESC ");
					$query->execute();
					
					while($row = $query->fetch()) {
					?>	

				  <div class="col mb-4">
					<div class="card h-100">
					  <img src="../Image/News/<?php echo $row['Image']; ?>" class="card-img-top" alt="" height="250px" width="300px">
					  <div class="card-body">
						<h5 class="card-title"><b><?php echo $row['Topic']; ?></b></h5>
						<h6>Link: <a href=" <?php echo $row['Link']; ?>" >Go</a></h6>
						
							<p class="card-text"><font color="#b3b3b3">
							   <?php echo $row['Date']; ?>
							
							</font></p>
							<center>
								<a href="options/edit-news.php?id=<?php echo $row['id']; ?>" class="btn btn-primary btn-sm">Edit Details</a>  						
								<a href="options/delete-news.php?del=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure, you want to delete this product?');">Delete</a>
						</center>
					  </div>
					</div>
				  </div>
					<?php } ?>	 
    </div>
</div>

<?php
}
?>
<!-- ############################################## End Fetch Data ##########################-->

		
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