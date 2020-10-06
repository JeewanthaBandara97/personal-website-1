<?php 

include('../includes/config.php');

if(isset($_POST['submit']))
{ 

	
		$sql = " DROP TABLE test ";
	
        $query = $dbh->prepare($sql);
		$query->execute();
		
		if($query)
		{			
			header("Location: ../services.php?success");		
		}
		else 
		{
		     header('Location: ../services.php?error');
		}		  
		  
}	


		
?>