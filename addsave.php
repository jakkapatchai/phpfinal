<?php	session_start();  
	ini_set('display_errors', 1);
	error_reporting(~0);
include("connectdb.php");

	$sql = "INSERT INTO customer (name, surname, uname,upass, type,adddate, status)VALUES ('".$_POST["txtname"]."','".$_POST["txtsurname"]."','".$_POST["uname"]."','".$_POST["upass"]."','".$_POST["txttype"]."', NOW(),'1')";
	$query = mysqli_query($conn,$sql);  //
	if($query){
	echo "<script type='text/javascript'>";
	echo "alert('Save  Succesfuly');";
	echo "window.location = 'listadmin.php' ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('Error back to Save again');";
	echo "</script>";
}
	mysqli_close($conn);
?>
