<?php	session_start();

	include("condbnw.php");
	$sql = "UPDATE categories SET CategoryName = '".$_POST["CategoryName"]."' , Description = '".$_POST["Description"]."' , Picture = '".$_POST["Picture"]."' WHERE CategoryID = '".$_POST["CategoryID"]."' ";
	$query = mysqli_query($conn,$sql);
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
