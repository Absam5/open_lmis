<html>
<?php
// database connection......
   include 'connection.php';


 // start session......... 
    session_start();
    
  
?>






<head>
<meta http-equiv="Content-Language" content="en-us">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Setting Panel</title>
</head>

<body>

<div align="center">
	<form method=post>
		<table border="1" width="550" height="57" style="border-width: 0px">
		<tr>
			<td style="border-style: none; border-width: medium">
			<p align="center">
			<font size="5">Add new staff</font></td>
		</tr>
		<tr>
			<td style="border-style: none; border-width: medium">
										<div align="center">
										<table border="1" width="96%" height="163" style="border-width: 0px">
											<tr>
												<td style="border-style: none; border-width: medium" bgcolor="#F5F5F5" align="center" width="32%">
												<input name=user size="20" style="width: 139; height: 26" placeholder="  User name"></td>
												<td style="border-style: none; border-width: medium" bgcolor="#F5F5F5" align="center" width="32%" colspan="2">
												<input name=password size="20" style="width: 139; height: 26"  placeholder="  Password" type="password"></td>
												<td style="border-style: none; border-width: medium" bgcolor="#F5F5F5" align="center" width="33%">
												<input name=name size="20" style="width: 139; height: 26"  placeholder="  Full name"></td>
											</tr>
											<tr>
												<td style="border-style: none; border-width: medium" bgcolor="#F5F5F5" align="center" width="32%">
												<select name=level>
												<option value=admin>Select Level</option>
												<option value=admin>Admin</option>
												<option value=staff>Staff</option>
												</select></td>
												<td style="border-style: none; border-width: medium" bgcolor="#F5F5F5" align="center" width="32%" colspan="2">
												<input name=contact size="20" style="width: 139; height: 26"  placeholder="  Contact"></td>
											</tr>
											<tr>
												<td style="border-style: none; border-width: medium" align="center" colspan="2" height="39">
													<input type=submit name=usajili value="Register staff" style="width: 201; height: 37; float:left"></td>
												<td style="border-style: none; border-width: medium" align="center" colspan="2" height="39">
													
													
													<?php
		
if (isset($_POST['usajili']))
{

$user=$_POST['user'];
$name=$_POST['name'];
$password=$_POST['password'];
$level=$_POST['level'];
$contact=$_POST['contact'];

if(empty($_POST['user']) and empty($_POST['password']))
{
 print "<font color=\"red\" size=\"4\" >Fill all the fields</font>";
}
elseif(empty($_POST['user']))
{

 print "<font color=\"red\" size=\"4\">Fill user name</font>";
}
elseif(empty($_POST['password']))
{
 print "<font color=\"red\" size=\"4\">Fill password</font>";
}

else

$query="INSERT INTO `staff` (`user`,`password`,`name`,`status`,`contact`)VALUES ('$user','$password','$name','$level','$contact')";

@$result=mysql_query($query);
if($result)
	{
	 
print "<font  color=\"blue\" size=\"4\">$name added</font>";		
}
}
?>

													
													
													</td>
											</tr>
										</table>
										</div>
										</td>
		</tr>
	</table></form>
</div>

</body>

</html>