<?php
	ini_set('display_errors', 1);
	error_reporting(~0);

include("connectdb.php");
	$sqld = "Delete from customer where id = '".$_GET["id"]."'";
		$query = mysqli_query($conn,$sqld);
		if($query){
			echo "<script type='text/javascript'>";
			echo "alert('Delete  Succesfuly');";
			echo "window.location = 'listadmin.php' ";
			echo "</script>";
			}
			else{
			echo "<script type='text/javascript'>";
			echo "alert('Error back to Delete again');";
			echo "</script>";
			}
	mysqli_close($conn);
?>
