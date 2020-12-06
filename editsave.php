<?php	session_start();

	include("connectdb.php");
	$sql = "UPDATE customer SET name = '".$_POST["txtname"]."' , surname = '".$_POST["txtsurname"]."' , status = '".$_POST["status"]."', editdate=NOW() WHERE id = '".$_POST["txtid"]."' ";
	$query = mysqli_query($conn,$sql);
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
