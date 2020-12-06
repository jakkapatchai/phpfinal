<?php	include("yheader.php"); ?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<form action="addsavecategories.php" name="frmAdd" method="post">
<table width="284" border="1" align="center">
  <tr>
  <tr>
    <th width="120">CategoryName</th>
    <td><input type="text" name="CategoryName" size="20"></td>
    </tr>
	 <tr>
	    <th width="120">Description</th>
    <td><input type="text" name="Description" size="20"></td>
    </tr>
		 <tr>
	    <th width="120">Picture</th>
    <td><input type="text" name="Picture" size="20"></td>
    </tr>
</td>
    </tr>
	  <tr>
    <td colspan="2" align="center"> <input type="submit" name="submit" value="submit"></td>
    </tr>
    </table>
 
</form>
 <?php include("yfooter.php"); ?>