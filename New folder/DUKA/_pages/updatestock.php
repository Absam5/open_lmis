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
		<td style="border-style: none; border-width: medium" width="521" align="center" valign="bottom">
		<p align="left">
		<font color="#336699" size="5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </font>
		<font color="#666666" size="5" face="Segoe UI">Update Price</font></td>
		<td style="border-style: none; border-width: medium" width="351" align="center" colspan="2" valign="bottom">
		&nbsp;
		
		
		<?php
		
if (isset($_POST['lipa']))
{

$bidhaa=$_POST['bidhaa'];
$price=$_POST['kiasi'];
$dt=date('Y-m-d');


$up="update stock set price='$price' where product='$bidhaa' and shop='$shop'";
 @$res=mysql_query($up);

print "<font  color=\"#FF9900\" size=\"4\">The new price for $bidhaa is Tsh. $price/= </font>";		
}

?>

		
		</td>
	</tr>
	<tr>
		<td style="border-style: none; border-width: medium" width="521" align="center">
		

		
		<table border="1" width="83%" height="45" style="border-width: 0px" bgcolor="#CECECE">
			<tr>
				<td style="border-style: none; border-width: medium" bgcolor="#FFFFFF">
				<p align="center">
				
				
		<?php
$dt=date('Y-m-d');
$q="select distinct * from stock WHERE shop='$shop'";
$r=mysql_query($q);
echo '<select name="bidhaa" heigHT=50 autofocus>';
print"<option>-----------------SELECT PRODUCT NAME HERE--------------";


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
		<td style="border-style: none; border-width: medium" align="center" width="222">
		<input type=number name=kiasi placeholder="  New price" required style="width: 172; height: 44" size="20"></td>
		<td style="border-style: none; border-width: medium" align="center" width="125">
		<input type=submit name=lipa value=Update style="width: 112; height: 47; font-size: 14pt; color:#FFFFFF; background-color:#0CF1BD"></td>
	</tr>
	</table></form>

</div>

</body>

</html>