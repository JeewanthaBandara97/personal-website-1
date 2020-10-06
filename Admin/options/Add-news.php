<?php 
session_start();
error_reporting(0);

include('../includes/config.php');

if(strlen($_SESSION['alogin'])==0)
	{	
         header('location:../../Login.php');
    }
    else{
		
		if(isset($_POST['submit']))
		{ 
		
		$topic=$_POST['topic'];
		$link=$_POST['link'];
        $date=date("Y/m/d");

		$image= time() . '-' .$_FILES["img"]["name"];


		$newfilename = round(microtime(true)) . '.' . end($temp);

		move_uploaded_file($_FILES["img"]["tmp_name"],"../../Image/News/" .$image);		


		$sql = "INSERT INTO news(Topic,Link,Date,Image) 
				VALUES(:topic,:link,:date,:image)";
				  
		$query = $dbh->prepare($sql);

		$query->bindParam(':topic',$topic,PDO::PARAM_STR);
		$query->bindParam(':link',$link,PDO::PARAM_STR);
		$query->bindParam(':date',$date,PDO::PARAM_STR);
		$query->bindParam(':image',$image,PDO::PARAM_STR);

		$query->execute();

		if($query)
		{
		header('Location: ../News.php?news_added');
		}
		else 
		{
		header('Location: Add-news.php?news_notadded');

		}

		}
?>

<html>
<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Panel</title>	
	<!--Bootstrap CSS -->
	<link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/bootstrap/css/bootstrap-grid.css">
	<link rel="stylesheet" href="../assets/bootstrap/css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="../assets/bootstrap/css/bootstrap-reboot.css">
	<link rel="stylesheet" href="../assets/bootstrap/css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="../assets/bootstrap/css/stylee.css">		

    <!-- Font -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" />
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

	
	<link rel="stylesheet" href="../assets/css/stylee.css">
	
</head>




<nav class="navbar navbar-dark navbar-expand-lg bg-dark fixed-top">
  <a class="navbar-brand" href="../index.php"><font color="#ff3333">Admin</font>Panel</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
  
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0" class="nav nav-pills">
	
      <li class="nav-item ">
        <a class="nav-link" href="../index.php">Dashboard <span class="sr-only">(current)</span></a>
      </li>
	  
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Gallery
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="../Gallery.php">Gallery</a>
		  <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="Add-image.php">Add Image</a>
		  <div class="dropdown-divider"></div>
        </div>
      </li>
	  
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          News
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item " href="../News.php">Posted News</a>
		  <div class="dropdown-divider"></div>
          <a class="dropdown-item active" href="Add-news.php">Add News</a>
        </div>
      </li> 
      <li class="nav-item dropdown ">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Shop
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="../Shop.php">Posted Product</a>
		  <div class="dropdown-divider"></div>
          <a class="dropdown-item " href="Add-Product.php">Add Product</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../Messages.php">Messages <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="../Other.php">Other <span class="sr-only"></span></a>
      </li>	  		  
    </ul>
	<ul class="nav navbar-nav ml-auto">
		<li class="nav-item dropdown">
			<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="fa fa-users" aria-hidden="true"></i></a>
			<div class="dropdown-menu dropdown-menu-right">
				<a href="Settings.php" class="dropdown-item">Settings</a>
				<div class="dropdown-divider"></div>
				<a href="../includes/logout.php"class="dropdown-item">Logout</a>
			</div>
		</li>
	</ul>
  </div>
  
</nav>

<br><br><br>

<body>
		<div class="container" id="1">

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
						
						
			<nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="../News.php">News</a></li>
				<li class="breadcrumb-item active" aria-current="page">Add News </li>
			  </ol>
			</nav>
		</div>
		
<div class="container" id="2">
	  <div class="title">
		   <font size="6" color="#ff1a1a">Enter News Details</font>
	  </div> 
	 <form action="Add-news.php" method="POST" enctype="multipart/form-data">
	  <div class="form-row">	  	  
			<div class="form-group col-md-6">
			  <label for="">Topic</label>
			  <input type="text" class="form-control" id="" name="topic" required>
			</div>
			<div class="form-group col-md-6">
			  <label for="">Link</label>
			  <input type="text" class="form-control" id="" name="link" required>
			</div>				
	  </div>	   
	  <br>
	  <div class="form-row">
	    <div class="form-group col-md-8">
		  <div class="custom-file">
			  <label>Choose image 1...</label>
			  <input type="file" name="img" class="input" >
		  </div>
		</div>  
 	  </div>

	  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
	</form>
</div>

		
<?php
include ("../include/footer.php");
?>


</body>

	
    <!-- JavaScript -->		
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

	<!--Bootstrap JS -->
	<script src="../assets/bootstrap/js/bootstrap.bundle.js"></script>
	<script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="../assets/bootstrap/js/bootstrap.js"></script>
	<script src="../assets/bootstrap/js/bootstrap.min.js"></script>	

    <!-- Jquery core JavaScript -->
    <script src="../assets/bootstrap/jquery/jquery.min.js"></script>
	<script src="../assets/bootstrap/jquery/jquery.js"></script>
    <script src="../assets/bootstrap/jquery/jquery.slim.min.js"></script>
	<script src="../assets/bootstrap/jquery/jquery.slim.js"></script>
	
    <script src="../assets/js/right-click-dissable.js"></script>
</html>
 <?php } ?>