<html>
<?php
// database connection......
   include 'connection.php';


 // start session......... 
    session_start();
     $shop=$_SESSION['user'];
   
 ?> 
 
 
 
 


<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>New Page 1</title>
</head>

<body>

<?php
		
if (isset($_POST['ingiza']))
{
$particular=$_POST['particular'];
$cost=$_POST['cost'];
$voucher=$_POST['voucher'];
$dt=$_POST['dt'];
$month=date('M-Y');
$mwezi=date('Y-m');
if(empty($_POST['cost']) and empty($_POST['particular']))
{
 print "<font color=\"red\" size=\"3\">Fill all the fields</font>";
}
elseif(empty($_POST['cost']))
{

 print "<font color=\"red\" size=\"3\">Fill Cost of item</font>";
}
elseif(empty($_POST['particular']))
{
 print "<font color=\"red\" size=\"3\">Fill particular of item</font>";
}

else

$query="INSERT INTO `expenditure` (`particular`,`cost`,`dt`,`month`,`voucher`,`mwezi`,`shop`)VALUES ('$particular','$cost','$dt','$month','$voucher','$mwezi','$shop')";

@$result=mysql_query($query);
if($result)
	{
	echo "<font color=\"red\" size=\"4\">   Done</font>";		
}
}
?>


<div align="center">
<table border="1" width="898" height="91" style="border-width: 0px">
	<tr>
		<td height="92" style="border-style: none; border-width: medium">
		<form method=post>
			<table border="1" width="100%" height="105" style="border-width: 0px">
			<tr bgcolor="#0CF1BD">
				<td height="38" style="border-style: none; border-width: medium" width="223" align="center">
				<b><font face="Segoe UI" color="#FFFFFF">Particular</font></b></td>
				<td height="38" style="border-style: none; border-width: medium" width="166" align="center">
				<b><font face="Segoe UI" color="#FFFFFF">Cost</font></b></td>
				<td height="38" style="border-style: none; border-width: medium" width="212" align="center">
				<b><font face="Segoe UI" color="#FFFFFF">Date</font></b></td>
				<td height="38" style="border-style: none; border-width: medium" width="135" align="center">
				<b><font color="#FFFFFF" face="Segoe UI">Voucher No</font></b></td>
				<td height="38" style="border-style: none; border-width: medium">&nbsp;</td>
			</tr>
			<tr>
				<td style="border-style: none; border-width: medium" width="223" align="center" bgcolor="#CCCCCC">
												<?php
$dt=date('Y-m-d');
$q="select distinct * from particular ";
$r=mysql_query($q);
echo '<select name="particular">';



	while($row=mysql_fetch_row($r))
	{
	
	print "<option value=\"$row[1]\"> $row[1] </option>";

		}
		
echo '</select>';
	

?>
</td>
				<td style="border-style: none; border-width: medium" width="166" align="center" bgcolor="#CCCCCC">
												<font face="Segoe UI" size="4">
												<input type=number name=cost size="20" style="width: 155; height: 32; font-weight:700" ></font></td>
				<td style="border-style: none; border-width: medium" width="212" align="center" bgcolor="#CCCCCC">
												<font size="4" face="Segoe UI">
												<input type=date name=dt size="20" style="width: 178; height: 29; font-weight:700"></font></td>
				<td style="border-style: none; border-width: medium" width="135" align="center" bgcolor="#CCCCCC">
												<font face="Segoe UI" size="4">
												<input type=number name=voucher size="20" style="width: 103; height: 32; font-weight:700" ></font></td>
				<td style="border-style: none; border-width: medium" align="center" bgcolor="#CCCCCC">
													<input type=submit name=ingiza value="PAY" style="width: 100; height: 36; background-color:#0CF1BD"></td>
			</tr>
		</table></form>
		</td>
	</tr>
	<tr>
		<td style="border-style: none; border-width: medium" valign="top">
		
		<?php
$month=date('M-Y');
$q="select SUM(cost) from expenditure where month='$month' and shop='$shop'";
$r=mysql_query($q);
if($r)
{
	while($row=mysql_fetch_row($r))
	{
	$total=$row[0];
	}
	
}
?>

		
</td>
	</tr>
</table>
	<p>&nbsp;</p>
</div>

</body>

</html>