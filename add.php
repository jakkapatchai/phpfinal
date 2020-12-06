<?php	include("yheader.php"); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<form action="addsave.php" name="frmAdd" method="post">
<table width="284" border="1" align="center">
  <tr>
    <th width="120">name</th>
    <td><input type="text" name="txtname" size="20"></td>
    </tr>
  <tr>
    <th width="120">surname</th>
    <td><input type="text" name="txtsurname" size="20"></td>
    </tr>
	 <tr>
	    <th width="120">Username</th>
    <td><input type="text" name="uname" size="20"></td>
    </tr>
		 <tr>
	    <th width="120">Password</th>
    <td><input type="text" name="upass" size="20"></td>
    </tr>
	  <tr>
    <th width="120">Type</th>
    <td>
<select  class="form-control" name="txttype" >
<option value="0">- Select -</option>
<option value="1">- user -</option>

<option value="3">- admin -</option>
</select>

</td>
    </tr>
	  <tr>
    <td colspan="2" align="center"> <input type="submit" name="submit" value="submit"></td>
    </tr>
    </table>
 
</form>
 <?php include("yfooter.php"); ?>