<html>
<?php
// database connection......
   include 'connection.php';



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
		<td style="border-style: none; border-width: medium" width="468" align="center" valign="bottom" colspan="2">
		<p align="left">
		<font color="#336699" size="5">&nbsp;&nbsp;Event</font></td>
		<td style="border-style: none; border-width: medium" width="404" align="center" colspan="2" valign="bottom">
		&nbsp;
		
		
		<?php
		
if (isset($_POST['rudisha']))
{
$bidhaa=$_POST['bidhaa'];
$tukio=$_POST['event'];
$idadi=$_POST['idadi'];

$dt=date('Y-m-d');


$q="select * from stock where product='$bidhaa' ";
$r=mysql_query($q);

	while($row=mysql_fetch_row($r))
	{
	$price=$row[1];
	$quantity=$row[2];
		}

$cost=$idadi*$price;


$query="INSERT INTO `lost` (`product`,`quantity`,`event`,`cost`,`date`)VALUES ('$bidhaa','$idadi','$tukio','$cost','$dt')";

@$result=mysql_query($query);
if($result)
	{
	

$nquantity=$quantity-$idadi;
$up="update stock set quantity='$nquantity' where product='$bidhaa'";
 @$res=mysql_query($up);
 
 

print "<font  color=\"#FF9900\" size=\"4\">$idadi units of $bidhaa reported as $tukio</font>";		
}
}
?>

		
		</td>
	</tr>
	<tr>
		<td style="border-style: none; border-width: medium" width="339" align="center">
		

		
		<table border="1" width="92%" height="45" style="border-width: 0px" bgcolor="#CECECE">
			<tr>
				<td style="border-style: none; border-width: medium" bgcolor="#FFFFFF">
				<p align="center">
				
				
		<?php
$dt=date('Y-m-d');
$q="select distinct * from stock ";
$r=mysql_query($q);
echo '<select name="bidhaa" heigHT=50 autofocus>';
print"<option>---SELECT PRODUCT NAME HERE---";


	while($row=mysql_fetch_row($r))
	{
	
	print "<option value=\"$row[0]\" >   $row[0] &nbsp;&nbsp;&nbsp;&nbsp; |&nbsp;&nbsp;&nbsp;&nbsp; $row[1]TZS  &nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp; $row[2]</option>";

		}
		
echo '</select>';
	

?>
				
				
				</td>
			</tr>
		</table>
		

		
		</td>
		<td style="border-style: none; border-width: medium" width="125" align="center">
		

		
		<input type=number name=idadi placeholder="  Amount" required style="width: 70; height: 44" size="20"></td>
		<td style="border-style: none; border-width: medium" align="center" width="275">
		<table border="1" width="100%" style="border-width: 0px" height="51">
			<tr>
				<td align="center" bgcolor="#666666" style="border-style: none; border-width: medium" width="95">
				<font color="#FFFFFF">Stolen</font></td>
				<td align="center" bgcolor="#666666" style="border-style: none; border-width: medium">
				<font color="#FFFFFF">Fired</font></td>
				<td align="center" bgcolor="#666666" style="border-style: none; border-width: medium" width="87">
				<font color="#FFFFFF">Expired</font></td>
			</tr>
			<tr>
				<td bgcolor="#FFFFFF" style="border-style: none; border-width: medium" width="95" align="center">
				<input type=radio name=event value=Stolen checked></td>
				<td bgcolor="#FFFFFF" style="border-style: none; border-width: medium" align="center">
				<input type=radio name=event value=Fired></td>
				<td bgcolor="#FFFFFF" style="border-style: none; border-width: medium" width="87" align="center">
				<input type=radio name=event value=Expired></td>
			</tr>
		</table>
		</td>
		<td style="border-style: none; border-width: medium" align="center" width="125">
		<input type=submit name=rudisha value=Done style="width: 112; height: 47; font-size: 14pt; color:#FFFFFF; background-color:#336699"></td>
	</tr>
	</table></form>

</div>

</body>

</html>