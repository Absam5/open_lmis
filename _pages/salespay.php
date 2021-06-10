<html>
<?php
// database connection......
   include 'connection.php';

// start session......... 
    session_start();
   $shop=$_SESSION['user'];


?>

<head>
<meta http-equiv="Content-Language" content="en-us">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>New Page 1</title>
</head>

<body>

<div align="center">
<form method=post>
<table border="1" width="882" style="border-width: 0px" height="193">
	<tr>
		<td style="border-style: none; border-width: medium" width="557" align="center" valign="bottom">
		<p align="left">
		<font color="#336699" size="5">&nbsp;&nbsp;&nbsp;&nbsp; </font>
		<b>
		<font color="#990000" size="5">&nbsp;&nbsp; Payment</font></b></td>
		<td style="border-style: none; border-width: medium" width="315" align="center" colspan="2" valign="bottom">
		&nbsp;
		
		
		<?php
		
if (isset($_POST['lipa']))
{

$mteja=$_POST['mteja'];
$kiasi=$_POST['kiasi'];
$mmiliki="me";
$dt=date('Y-m-d');


$query="INSERT INTO `credit` (`customer`,`owner`,`balance`,`date`,`shop`)VALUES ('$mteja','$mmiliki','$kiasi','$dt','$shop')";

@$result=mysql_query($query);
if($result)
	{
	
	$q="select * from debtor where name='$mteja' and shop='$shop'";
$r=mysql_query($q);

	while($row=mysql_fetch_row($r))
	{
	$deni=$row[3];
		}

	 $denijipya=$deni-$kiasi;
$up="update debtor set balance='$denijipya' where name='$mteja' and shop='$shop'";
 @$res=mysql_query($up);

print "<font  color=\"#FF9900\" size=\"4\">Tsh. $kiasi/= paid by $mteja</font>";		
}
}
?>

		
		</td>
	</tr>
	<tr>
		<td style="border-style: none; border-width: medium" width="557" align="center">
		

		
		<table border="1" width="83%" height="45" style="border-width: 0px" bgcolor="#CECECE">
			<tr>
				<td style="border-style: none; border-width: medium" bgcolor="#FFFFFF">
				<p align="center">
				
				
		<?php
$dt=date('Y-m-d');
$q="select distinct * from debtor where shop='$shop'";
$r=mysql_query($q);
echo '<select name="mteja" height=50 autofocus>';
print"<option>---------------SELECT DEBTOR'S NAME HERE--------------------";


	while($row=mysql_fetch_row($r))
	{
	
	print "<option value=\"$row[0]\" >   $row[0] &nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp; $row[1] &nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;($row[3]/=) </option>";

		}
		
echo '</select>';
	

?>
				
				
				</td>
			</tr>
		</table>
		

		
		</td>
		<td style="border-style: none; border-width: medium" align="center" width="180">
		<input type=number name=kiasi placeholder="  Amount" required style="width: 139; height: 44" size="20"></td>
		<td style="border-style: none; border-width: medium" align="center" width="125">
		<input type=submit name=lipa value=Pay style="width: 112; height: 47; font-size: 14pt; color:#990000; background-color:#0CF1BD; font-weight:700"></td>
	</tr>
	</table></form>

</div>

</body>

</html>