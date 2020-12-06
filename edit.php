<?php	include("yheader.php"); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
ini_set('display_errors', 1);
error_reporting(~0);

include("connectdb.php");

   $strid = null;

   if(isset($_GET["id"]))
   {
	   $strid = $_GET["id"];
   }
  
   $sql = "SELECT * FROM customer WHERE id = '".$strid."' ";

   $query = mysqli_query($conn,$sql);

   $result=mysqli_fetch_array($query);

?>
<form action="editsave.php" name="frmAdd" method="post">
<table width="284" border="1">
  <tr>
    <th width="120">id</th>
    <td width="238"><input type="hidden" name="txtid" value="<?php echo $result["id"];?>"><?php echo $result["id"];?></td>
    </tr>
  <tr>
    <th width="120">name</th>
    <td><input type="text" name="txtname" size="20" value="<?php echo $result["name"];?>"></td>
    </tr>
  <tr>
    <th width="120">surname</th>
    <td><input type="text" name="txtsurname" size="20" value="<?php echo $result["surname"];?>"></td>
    </tr>
		 <tr>
	    <th width="120">Username</th>
    <td><input type="text" name="uname" size="20" value="<?php echo $result["uname"];?>"></td>
    </tr>
		 <tr>
	    <th width="120">Password</th>
    <td><input type="text" name="upass" size="20" value="<?php echo $result["upass"];?>"></td>
    </tr>
		  <tr>
    <th width="120">Status</th>
    <td>
<select  class="form-control" name="status" >
<option value="<?php echo $result["status"];?>"><?php if($result["status"]==0){ echo "user"; }else{ echo "admin"; }?></option>
<option value="0">- user -</option>
<option value="1">- admin -</option>
</select>

</td>
    </tr>
    </table>
  <input type="submit" name="submit" value="submit">
</form>
<?php
mysqli_close($conn);
?>

<?php include("yfooter.php"); ?>