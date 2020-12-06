<?php include("yheader.php"); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("connectdb.php");
	$sql = "SELECT * FROM customer where status='0' ";
	$query = mysqli_query($conn,$sql);
	$tnum = mysqli_num_rows($query);
?>
<table width="624" border="1"  align="center">
  <tr bgcolor="#CCCCCC">
	<th colspan="2" align="right">Total Record [ <?php echo $tnum;?> ]&nbsp;</th>
  </tr>
  <tr bgcolor="#CCCCCC">
    <th width="98"> <div align="center">name </div></th>
    <th width="198"> <div align="center">surname </div></th>
  </tr>
<?php
while($result=mysqli_fetch_array($query))
{
?>
  <tr>
    
    <td><div align="center"><?php echo $result["name"];?></td>
    <td><div align="center"><?php echo $result["surname"];?></td>
    
  </tr>
<?php } ?>
</table>
<?php mysqli_close($conn); ?> 

<?php include("yfooter.php"); ?>