

<?php
/*
$link = mysqli_connect("localhost", "root", "", "vjdb");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt create table query execution
$sql = "CREATE TABLE persons(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    first_name VARCHAR(30) NOT NULL,
    last_name VARCHAR(30) NOT NULL,
    email VARCHAR(70) NOT NULL UNIQUE
)";
if(mysqli_query($link, $sql)){
	
    echo "Table created successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
*/
?>





<?php 

include('../includes/config.php');


		if(isset($_POST['submit']))
		{ 
		
		$ProductName=$_POST['ProductName'];
		$ProductID=$_POST['ProductID'];
		$Price=$_POST['Price'];
		$Quantity=$_POST['Quantity'];
		
		
		$sql = " CREATE TABLE test (
		id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
		ProductName varchar(20),
		ProductID varchar(10),
		Price varchar(20),
		Quantity int(20)
		)";
	
        $query = $dbh->prepare($sql);
		$query->execute();

		$sql ="INSERT INTO test(ProductName,ProductID,Price,Quantity) VALUES(:ProductName,:ProductID,:Price,:Quantity)";		
		$query2 = $dbh->prepare($sql);
		$query2->bindParam(':ProductName',$ProductName,PDO::PARAM_STR);
		$query2->bindParam(':ProductID',$ProductID,PDO::PARAM_STR);
		$query2->bindParam(':Price',$Price,PDO::PARAM_STR);
		$query2->bindParam(':Quantity',$Quantity,PDO::PARAM_STR);
		$query2->execute();

		
		if($query2)
		{
			$extra = $ProductID;
			header("Location: ../cart.php?id=$extra");
			
		}
		else 
		{
		header('Location: ../services.php');
		}		  
		  
		} 


		
?>