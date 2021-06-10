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
		<td style="border-style: none; border-width: medium" width="663" align="center" valign="bottom" colspan="2">
		<p align="left">
		<font color="#336699" size="5">&nbsp;&nbsp;Return inward</font></td>
		<td style="border-style: none; border-width: medium" width="209" align="center" colspan="2" valign="bottom">
		&nbsp;
		
		
		<?php
		
if (isset($_POST['rudisha']))
{
$bidhaa=$_POST['bidhaa'];
$mteja=$_POST['mteja'];
$idadi=$_POST['idadi'];
$mmiliki="me";
$dt=date('Y-m-d');


$query="INSERT INTO `return` (`customer`,`supplier`,`product`,`quantity`,`date`)VALUES ('$mteja','$mmiliki','$bidhaa','$idadi','$dt')";

@$result=mysql_query($query);
if($result)
	{
	
$q="select * from stock where product='$bidhaa' ";
$r=mysql_query($q);

	while($row=mysql_fetch_row($r))
	{
	$price=$row[1];
	$quantity=$row[2];
		}

	 $nquantity=$quantity+$idadi;
$up="update stock set quantity='$nquantity' where product='$bidhaa'";
 @$res=mysql_query($up);
 
 if($mteja!="cash")
 {
 $q="select * from debtor where name='$mteja' ";
$r=mysql_query($q);

	while($row=mysql_fetch_row($r))
	{
	$deni=$row[3];
		}

	 $denijipya=$deni-$idadi*$price;
$up="update debtor set balance='$denijipya' where name='$mteja'";
 @$res=mysql_query($up);
}

print "<font  color=\"#FF9900\" size=\"4\">$idadi units of $bidhaa returned in by $mteja</font>";		
}
}
?>

		
		</td>
	</tr>
	<tr>
		<td style="border-style: none; border-width: medium" width="339" align="center">
		

		
		<table border="1" width="97%" height="45" style="border-width: 0px" bgcolor="#CECECE">
			<tr>
				<td style="border-style: none; border-width: medium" bgcolor="#FFFFFF">
				<p align="center">
				
				
		<?php
$dt=date('Y-m-d');
$q="select distinct * from debtor ";
$r=mysql_query($q);
echo '<select name="mteja" height=50 autofocus>';
print"<option>---SELECT DEBTOR'S NAME HERE---";

print"<option value=cash> Cash Sales </option>";
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
		<td style="border-style: none; border-width: medium" width="320" align="center">
		

		
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
		<td style="border-style: none; border-width: medium" align="center" width="80">
		<input type=number name=idadi placeholder="  Amount" required style="width: 70; height: 44" size="20"></td>
		<td style="border-style: none; border-width: medium" align="center" width="125">
		<input type=submit name=rudisha value=Return style="width: 112; height: 47; font-size: 14pt; color:#FFFFFF; background-color:#336699"></td>
	</tr>
	</table></form>

</div>

</body>

</html>