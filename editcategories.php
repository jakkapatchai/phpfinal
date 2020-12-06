<?php	include("yheader.php"); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
ini_set('display_errors', 1);
error_reporting(~0);

include("condbnw.php");

   $strCategoryID = null;

   if(isset($_GET["CategoryID"]))
   {
	   $strCategoryID = $_GET["CategoryID"];
   }
  
   $sql = "SELECT * FROM categories WHERE CategoryID = '".$strCategoryID."' ";

   $query = mysqli_query($conn,$sql);

   $result=mysqli_fetch_array($query);

?>
<form action="editsavecategories.php" name="frmAdd" method="post">
<table wCategoryIDth="284" border="1">
  <tr>
    <th wCategoryIDth="120">CategoryID</th>
    <td wCategoryIDth="238"><input type="hidden" name="CategoryID" value="<?php echo $result["CategoryID"];?>"><?php echo $result["CategoryID"];?></td>
    </tr>
  <tr>
    <th wCategoryIDth="120">CategoryName</th>
    <td><input type="text" name="CategoryName" size="20" value="<?php echo $result["CategoryName"];?>"></td>
    </tr>
  <tr>
    <th wCategoryIDth="120">Description</th>
    <td><input type="text" name="Description" size="20" value="<?php echo $result["Description"];?>"></td>
    </tr>
		 <tr>
	    <th wCategoryIDth="120">Picture</th>
    <td><input type="text" name="Picture" size="20" value="<?php echo $result["Picture"];?>"></td>
</tr>
</td>
    </tr>
    </table>
  <input type="submit" name="submit" value="submit">
</form>
<?php
mysqli_close($conn);
?>

<?php include("yfooter.php"); ?>