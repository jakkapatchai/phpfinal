<?php include("yheader.php"); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("condbnw.php");
	$sql = "SELECT * FROM categories ";
	$query = mysqli_query($conn,$sql);
	$tnum = mysqli_num_rows($query); //นับจำนวน Record
?>
<table width="624" border="1"  align="center">
  <tr bgcolor="#CCCCCC">
	<th colspan="7" align="right">Total Record [ <?php echo $tnum;?> ]&nbsp;</th>
  </tr>
  <tr bgcolor="#CCCCCC">
  <th width="91"> <div align="center">Categoryid </div></th>
    <th width="98"> <div align="center">Categoryname </div></th>
    <th width="198"> <div align="center">Description</div></th>
	<th width="88"> <div align="center">Picture</div></th>
	<th colspan="2"> <div align="center">Update </div></th>
  </tr>
<?php
while($result=mysqli_fetch_array($query))
{
?>
  <tr>
    <td><div align="center"><?php echo $result["CategoryID"];?></div></td>
    <td><div align="center"><?php echo $result["CategoryName"];?></td>
    <td><div align="center"><?php echo $result["Description"];?></td>
    <td><div align="center"><?php echo $result["Picture"];?></td>
	<td align="center"><a href="editcategories.php?CategoryID=<?php echo $result["CategoryID"];?>">Edit</a></td>
		<td align="center"><a href="delcategories.php?CategoryID=<?php echo $result["CategoryID"];?>">Delete</a></td>
  </tr>
<?php } ?>
</table>
<form action="addcategories.php" align="center" method="post">
<input type="submit" name="submit" value="add">
</form>
<?php mysqli_close($conn); ?> 

<?php include("yfooter.php"); ?>