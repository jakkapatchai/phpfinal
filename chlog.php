<?php
	session_start();
	require_once("connectdb.php");
	$struname = mysqli_real_escape_string($conn,$_POST['uname']);
	$strupass = mysqli_real_escape_string($conn,$_POST['upass']);
	$strSQL = "SELECT * FROM customer WHERE uname = '".$struname."' and upass = '".$strupass."'";
	$objQuery = mysqli_query($conn,$strSQL);
	$objResult = mysqli_fetch_array($objQuery);
	if(!$objResult){	 
		echo "<BR><BR><FONT SIZE=5 color=blue ><CENTER>Username or Password ไม่ถูกต้อง กรุณาเข้าระบบอีกครั้ง!<BR><BR><FONT SIZE=5 color=yelloe ><A HREF=logout.php>กลับหน้า Login</A></FONT></CENTER>"; exit();
	}
	else {
		$_SESSION["fn"] = $objResult["name"]."  ".$objResult["surname"];
		$_SESSION["uch"] = $objResult["uname"]; 
		$_SESSION["st"] = $objResult["status"];
		session_write_close();
		if($_SESSION["st"]==1){
			header("location:listadmin.php"); exit();
		}
		else 	
			header("location:list.php"); exit();
	} 
	mysqli_close($con);
?>