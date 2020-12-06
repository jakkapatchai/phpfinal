<?php	session_start();  
	ini_set('display_errors', 1);
	error_reporting(~0);
include("condbnw.php");

	$sql = "INSERT INTO categories (CategoryName,Description,Picture)VALUES ('".$_POST["CategoryName"]."','".$_POST["Description"]."','".$_POST["Picture"]."')";
	$query = mysqli_query($conn,$sql);  //
	if($query){
	echo "<script type='text/javascript'>";
	echo "alert('Save  Succesfuly');";
	echo "window.location = 'categories.php' ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('Error back to Save again');";
	echo "</script>";
}
	mysqli_close($conn);
?>
