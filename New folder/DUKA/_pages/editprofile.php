<html>


<?php
// database connection......
   include 'connection.php';


 // start session......... 
    session_start();
    
    
    
   if(empty($_SESSION['user'])) {

    header("location: ../index.php");

} 

    
   $user=$_SESSION['user'];

    

  
?>





<head>
<meta http-equiv="Content-Language" content="en-us">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Setting Panel</title>
</head>

<body>

<div align="center">
	<form method=post><table border="1" width="550" height="94" style="border-width: 0px">
		<tr>
			<td style="border-style: none; border-width: medium">
			<font size="5" color="#666666">Reset password</font><hr noshade color="#C0C0C0" size="1">
			</td>
		</tr>
		<tr>
			<td style="border-style: none; border-width: medium">
										<div align="center">
										<table border="1" width="96%" height="169" style="border-width: 0px">
											<tr>
												<td style="border-style: none; border-width: medium" bgcolor="#B1B1B1" width="32%">&nbsp;Current 
												Password</td>
												<td style="border-style: none; border-width: medium" bgcolor="#B1B1B1" width="32%">
												&nbsp;New password</td>
											</tr>
											<tr>
												<td style="border-style: none; border-width: medium" bgcolor="#E0E0E0" align="center" width="32%">
												<input type=password name=current size="20" style="width: 230; height: 26" placeholder="  Current Password" autofocus></td>
												<td style="border-style: none; border-width: medium" bgcolor="#E0E0E0" align="center" width="32%">
												<input name=new size="20" style="width: 231; height: 26" placeholder="  Current Password"></td>
											</tr>
											<tr>
												<td style="border-style: none; border-width: medium" align="center" height="68">
													<input type=submit name=badilisha value="Reset password" style="width: 201; height: 37; float:left" placeholder="  Current Password"></td>
												<td style="border-style: none; border-width: medium" align="center" height="68">
													<?php
// user login.......................................................

if (isset($_POST['badilisha']))
{
$current=$_POST['current'];
$new=$_POST['new'];

// control submision of nul data to the database.....................

if(empty($_POST['current']) and empty($_POST['new']))
{
print"<font color=\"red\" size=\"4\">Fill all the Fields Please..!</font>";
}
elseif(empty($_POST['current']))
{
print"<font color=\"red\" size=\"4\">Fill Current Password Please..!</font>";

}
elseif(empty($_POST['new']))
{
print"<font color=\"red\" size=\"4\">Fill New Password Please..!</font>";
}
else
{
$q="SELECT * FROM `staff` where user='$user' and password='$current' ";
$result=mysql_query($q);
@$count=mysql_num_rows($result);
if(!$count==1)
	{
	
		print"<font color=\"red\" size=\"4\">Incorrect Password..!</font>";
		
	}
	
	else
	{
	
		

$up="update staff set password='$new' where user='$user' and password='$current'";
	 @$res=mysql_query($up);
 

print "<font color=\"blue\" size=\"4\">Password changed to $new</font>";		
	}
}
}
?>

</td>
											</tr>
										</table>
										</div>
										<p>&nbsp;</td>
		</tr>
	</table></form>
</div>

</body>

</html>