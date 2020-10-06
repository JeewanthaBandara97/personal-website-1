<?php 
session_start();
error_reporting(0);

include('../includes/config.php');

if(strlen($_SESSION['alogin'])==0)
	{	
    header('location:../../Login.php');
    }
    else{
		
		if(isset($_POST['update1']))
		{
		$id=intval($_GET['id']);
		
		$select_stmt= $dbh->prepare("SELECT * FROM product WHERE id ='$id' "); //sql select query
		$select_stmt->bindParam(':id',$id);
		$select_stmt->execute();
		$row=$select_stmt->fetch(PDO::FETCH_ASSOC);
		unlink("../../Image/Products/".$row['Image1']); //unlink function permanently remove your file

		
		$image= time() . '-' . $_FILES["img1"]["name"];
		$newfilename = round(microtime(true)) . '.' . end($temp);
		move_uploaded_file($_FILES["img1"]["tmp_name"],"../../Image/Products/" .time() . '-'.$_FILES["img1"]["name"]);

		$sql="update product set Image1=:image where id=:id";

		$query = $dbh->prepare($sql);
		$query->bindParam(':image',$image,PDO::PARAM_STR);
		$query->bindParam(':id',$id,PDO::PARAM_STR);
		$query->execute();

		$msg="Image updated successfully";

		header('Location: ../Shop.php?Image-updated-successfully ');

		}	
		
					if(isset($_POST['update2']))
					{
					$id=intval($_GET['id']);
					
					$select_stmt= $dbh->prepare("SELECT * FROM product WHERE id ='$id' "); //sql select query
					$select_stmt->bindParam(':id',$id);
					$select_stmt->execute();
					$row=$select_stmt->fetch(PDO::FETCH_ASSOC);
					unlink("../../Image/Products/".$row['Image2']); //unlink function permanently remove your file

					
					$image2= time() . '-' . $_FILES["img2"]["name"];
					$newfilename = round(microtime(true)) . '.' . end($temp);
					move_uploaded_file($_FILES["img2"]["tmp_name"],"../../Image/Products/" .time() . '-'.$_FILES["img2"]["name"]);

					$sql="update product set Image2=:image2 where id=:id";

					$query = $dbh->prepare($sql);
					$query->bindParam(':image2',$image2,PDO::PARAM_STR);
					$query->bindParam(':id',$id,PDO::PARAM_STR);
					$query->execute();

					$msg="Image updated successfully";

					header('Location: ../Shop.php?Image-updated-successfully ');

					}
		
		
		if(isset($_POST['update3']))
		{
		$id=intval($_GET['id']);
		
		$select_stmt= $dbh->prepare("SELECT * FROM product WHERE id ='$id' "); //sql select query
		$select_stmt->bindParam(':id',$id);
		$select_stmt->execute();
		$row=$select_stmt->fetch(PDO::FETCH_ASSOC);
		unlink("../../Image/Products/".$row['Image3']); //unlink function permanently remove your file

		
		$image3= time() . '-' . $_FILES["img3"]["name"];
		$newfilename = round(microtime(true)) . '.' . end($temp);
		move_uploaded_file($_FILES["img3"]["tmp_name"],"../../Image/Products/" .time() . '-'.$_FILES["img3"]["name"]);

		$sql="update product set Image3=:image3 where id=:id";

		$query = $dbh->prepare($sql);
		$query->bindParam(':image3',$image3,PDO::PARAM_STR);
		$query->bindParam(':id',$id,PDO::PARAM_STR);
		$query->execute();

		$msg="Image updated successfully";

		header('Location: ../Shop.php?Image-updated-successfully ');

		}
    		
?>

<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Panel</title>
	<!--Bootstrap CSS -->
	<link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../ssets/bootstrap/css/bootstrap-grid.css">
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
			  
			  <li class="nav-item dropdown active">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				  Gallery
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
				  <a class="dropdown-item active " href="../Gallery.php">Gallery</a>
				  <div class="dropdown-divider"></div>
				  <a class="dropdown-item " href="Add-image.php">Add Image</a>	
				  <div class="dropdown-divider"></div>
				</div>
			  </li>
			  
			  <li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				  News
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
				  <a class="dropdown-item" href="../News.php">Posted News</a>
				  <a class="dropdown-item " href="Add-news.php">Add News </a>
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
		<li class="breadcrumb-item"><a href="../Shop.php">Products</a></li>
		<li class="breadcrumb-item active" aria-current="page">Add Product </li>
	  </ol>
	</nav>
</div>

<!-- ################################################################################-->

<div class="container">
				<?php 
				$id=intval($_GET['id']);

				$sql ="SELECT * from product where product.id=:id";

				$query = $dbh -> prepare($sql);
				$query-> bindParam(':id', $id, PDO::PARAM_STR);
				$query->execute();
				$results=$query->fetchAll(PDO::FETCH_OBJ);
				$cnt=1;
				if($query->rowCount() > 0)
				{
				foreach($results as $result)
				{	
				?>	
			 <fieldset disabled>
				<div class="form-row form-group  col-md-12 ">				  
                      <input type="text" id="disabledTextInput" class="form-control text-white bg-info " value=" Product - <?php echo htmlentities($result->ProductName);?> || Product ID - <?php echo htmlentities($result->ProductID);?>" >					  
				</div>
			 </fieldset>
			  <?php }} ?>	
</div>	

<!-- ################################################################################-->

<div class="container">
        <div class="row row-cols-1 row-cols-md-3">
	
	
				<?php 
				$id=intval($_GET['id']);

				$sql ="SELECT * from product where product.id=:id";

				$query = $dbh -> prepare($sql);
				$query-> bindParam(':id', $id, PDO::PARAM_STR);
				$query->execute();
				$results=$query->fetchAll(PDO::FETCH_OBJ);
				$cnt=1;
				if($query->rowCount() > 0)
				{
				foreach($results as $result)
				{	
				?>	
            <form action="" method="POST" enctype="multipart/form-data">			
			<div class="col mb-4 form-group">
				<div class="card h-100">
				  <img src="../../Image/Products/<?php echo htmlentities($result->Image1);?>" class="card-img-top" width="310" height="195" style="z-index:1">
				  <div class="card-body">
					<h5 class="card-title"><b>Change Image 1</b></h5>
					<h6></h6>
					 <p class="card-text"><font color="#b3b3b3">
            <input type="file" name="img1" class="input" required >					 
					 </font></p>
					<center>
					<button type="submit" name="update1" class="btn btn-primary">Upload</button>
					</center>
				  </div>
				</div>
			 </div>				
	         </form>
	             <?php }} ?>	
			 
<!-- ################################################################################-->

				<?php 
				$id=intval($_GET['id']);

				$sql ="SELECT * from product where product.id=:id";

				$query = $dbh -> prepare($sql);
				$query-> bindParam(':id', $id, PDO::PARAM_STR);
				$query->execute();
				$results=$query->fetchAll(PDO::FETCH_OBJ);
				$cnt=1;
				if($query->rowCount() > 0)
				{
				foreach($results as $result)
				{	
				?>	
            <form action="" method="POST" enctype="multipart/form-data">			
			<div class="col mb-4 form-group">
				<div class="card h-100">
				  <img src="../../Image/Products/<?php echo htmlentities($result->Image2);?>" class="card-img-top" width="310" height="195" style="z-index:1">
				  <div class="card-body">
					<h5 class="card-title"><b>Change Image 2</b></h5>
					<h6></h6>
					 <p class="card-text"><font color="#b3b3b3">
            <input type="file" name="img2" class="input" required >					 
					 </font></p>
					<center>
					<button type="submit" name="update2" class="btn btn-primary">Upload</button>
					</center>
				  </div>
				</div>
			 </div>				
	         </form>
	             <?php }} ?>	
			 
<!-- ################################################################################-->
				<?php 
				$id=intval($_GET['id']);

				$sql ="SELECT * from product where product.id=:id";

				$query = $dbh -> prepare($sql);
				$query-> bindParam(':id', $id, PDO::PARAM_STR);
				$query->execute();
				$results=$query->fetchAll(PDO::FETCH_OBJ);
				$cnt=1;
				if($query->rowCount() > 0)
				{
				foreach($results as $result)
				{	
				?>	
            <form action="" method="POST" enctype="multipart/form-data">			
			<div class="col mb-4 form-group">
				<div class="card h-100">
				  <img src="../../Image/Products/<?php echo htmlentities($result->Image3);?>" class="card-img-top" width="310" height="195" style="z-index:1">
				  <div class="card-body">
					<h5 class="card-title"><b>Change Image 3</b></h5>
					<h6></h6>
					 <p class="card-text"><font color="#b3b3b3">
            <input type="file" name="img3" class="input" required >					 
					 </font></p>
					<center>
					<button type="submit" name="update3" class="btn btn-primary">Upload</button>
					</center>
				  </div>
				</div>
			 </div>				
	         </form>
	             <?php }} ?>	
		 		 
<!-- ################################################################################-->
   </div>	  
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