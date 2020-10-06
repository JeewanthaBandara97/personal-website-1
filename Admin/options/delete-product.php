<?php 
session_start();
error_reporting(0);

include('../includes/config.php');

if(strlen($_SESSION['alogin'])==0)
{	
header('location:../../Login.php');
}
else{

	if(isset($_GET['del']))
	{
	$id=$_GET['del'];

	$select_stmt= $dbh->prepare("SELECT * FROM product WHERE id ='$id' "); //sql select query
	$select_stmt->bindParam(':id',$id);
	$select_stmt->execute();
	$row=$select_stmt->fetch(PDO::FETCH_ASSOC);
	unlink("../../Image/Products/".$row['Image1']); 
	unlink("../../Image/Products/".$row['Image2']); 
    unlink("../../Image/Products/".$row['Image3']); 
	unlink("../../Image/Products/".$row['Image4']); 
			
	//delete an orignal record from db
	$delete_stmt = $dbh->prepare("DELETE FROM product WHERE id ='$id' ");
	$delete_stmt->bindParam(':id',$id);
	$delete_stmt->execute();  

	header('Location: ../Shop.php?Product_delete');

	}
}
 ?>