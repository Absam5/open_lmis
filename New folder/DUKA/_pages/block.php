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
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>New Page 1</title>
</head>

<body>
<p align="center">

<?php
$dt=date('Y-m-d');
$q="select * from staff ";
//$r=mysql_query($q);
if((mysql_num_rows(mysql_query($q)))==0) 
{
print"No staff found";
}
else
{
$r=mysql_query($q);

if($r)
{

while($row=mysql_fetch_array($r))
	{
		$nm=$row[0];
		$status=$row[5];
		$fname=$row[2];
		$conta=$row[4];
	echo<<<JUMA
	<form method="post">
		
<table border="1" width="800"style="border-width: 0px" align="center">
										
										
										<tr>
											<td height="26" style="border-style: none; border-width: medium" bgcolor="#CCCCFF">
											<table border="1" width="800" style="border-width: 0px" bgcolor="#FFFFFF">
												<tr>
													<td style="border-style: none; border-width: medium" ">
													User<input type=text name="name1" value="$nm" style="height: 24; width: 150" readonly></td>
													<td style="border-style: none; border-width: medium" ">
													Name<input type=text name="full" value="$fname" style="height: 24; width: 250" readonly></td>
													<td style="border-style: none; border-width: medium" ">
													Status<input type=text name="prestatus" value="$status" style="height: 24; width: 100"></td>													<td style="border-style: none; border-width: medium" ">
													Action<select name='status'>
													      <option value='none'>block</option>
													      <option value='admin'>admin</option>  
													      <option value='staff'>staff</option> 
													 </select>
													<td  width="70" align="center" style="border-style: none; border-width: medium" background="bluelinen.jpg"><input name="dlt" type="submit" value="Update" /></td>
												<td  width="100" align="center" style="border-style: none; border-width: medium" background="bluelinen.jpg"><input name="rst" type="submit" value="Reset Password" />
												</tr>
											</table>
											</td>
										</tr>

									</table>
</form>
	
JUMA;
	}
	
	if(isset($_POST['dlt']))
{
	
$name=$_POST['name1'];
$stt=$_POST['status'];
$up="update staff set status='$stt' where user='$name'";
	 @$res=mysql_query($up);
if($res)
	{
	
	 
header('location:block.php');	
}

}

if(isset($_POST['rst']))
{
	
$name=$_POST['name1'];
$stt=$_POST['status'];
$up="update staff set password='prize' where user='$name'";
	 @$res=mysql_query($up);
if($res)
	{
	
	 
print "<font  color=\"blue\" size=\"4\">Password changed to prize</font>";		
}

}

}
}
?>

</p>

</body>

</html>