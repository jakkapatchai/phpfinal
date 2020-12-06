<?php include("yheader.php"); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("connectdb.php");
	$sql = "SELECT * FROM customer ";
	$query = mysqli_query($conn,$sql);
	$tnum = mysqli_num_rows($query); //นับจำนวน Record
?>
<table width="624" border="1"  align="center">
  <tr bgcolor="#CCCCCC">
	<th colspan="7" align="right">Total Record [ <?php echo $tnum;?> ]&nbsp;</th>
  </tr>
  <tr bgcolor="#CCCCCC">
  <th width="91"> <div align="center">id </div></th>
    <th width="98"> <div align="center">name </div></th>
    <th width="198"> <div align="center">surname </div></th>
	<th width="88"> <div align="center">status </div></th>
	<th colspan="2"> <div align="center">Update </div></th>
  </tr>
<?php
while($result=mysqli_fetch_array($query))
{
?>
  <tr>
    <td><div align="center"><?php echo $result["id"];?></div></td>
    <td><div align="center"><?php echo $result["name"];?></td>
    <td><div align="center"><?php echo $result["surname"];?></td>
    <td><div align="center"><?php echo $result["status"];?></td>
	<td align="center"><a href="edit.php?id=<?php echo $result["id"];?>">Edit</a></td>
		<td align="center"><a href="del.php?id=<?php echo $result["id"];?>">Delete</a></td>
  </tr>
<?php } ?>
</table>
<form action="add.php" align="center" method="post">
<input type="submit" name="submit" value="add">
</form>
<?php mysqli_close($conn); ?> 

<?php include("yfooter.php"); ?>