<html>

<?php
// database connection......
   include 'connection.php';


 // start session......... 
    session_start();
  
?>


<?php
if (isset($_POST['go']))
{
$bidhaa="coconut";
$q="select * from stock where product='$bidhaa' ";
$r=mysql_query($q);

	while($row=mysql_fetch_row($r))
	{
	$price=$row[1];
	}
	echo $price;
}	
?>




<head>
<meta http-equiv="Content-Language" content="en-us">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>New Page 1</title>
</head>

<body>

<div align="center">
<form method=post action=cpurchaseprocess.php>
<table border="1" width="947" style="border-width: 0px" height="193">
	<tr>
		<td style="border-style: none; border-width: medium" width="941" align="center" colspan="5" valign="bottom">
		<p align="left">
		<font color="#336699" size="5">&nbsp;</font><b><font size="5" color="#990000">Credit Purchase</font></b></td>
	</tr>
	<tr>
		<td style="border-style: none; border-width: medium" width="322" align="center">
		

		
		<table border="1" width="97%" height="45" style="border-width: 0px" bgcolor="#CECECE">
			<tr>
				<td style="border-style: none; border-width: medium" bgcolor="#FFFFFF">
				<p align="center">
				
				
		<?php
$dt=date('Y-m-d');
$q="select distinct * from creditor ";
$r=mysql_query($q);
echo '<select name="mteja" height=50 autofocus>';
print"<option>---SELECT CREDITOR'S NAME HERE---";


	while($row=mysql_fetch_row($r))
	{
	
	print "<option value=\"$row[0]\" >   $row[0] &nbsp;|&nbsp; $row[1] &nbsp;|&nbsp;($row[3]/=) </option>";

		}
		
echo '</select>';
	

?>
				
				
				</td>
			</tr>
		</table>
		

		
		</td>
		<td style="border-style: none; border-width: medium" width="291" align="center">
		

		
		<table border="1" width="97%" height="45" style="border-width: 0px" bgcolor="#CECECE">
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
	
	print "<option value=\"$row[0]\" >   $row[0] &nbsp;&nbsp;&nbsp;&nbsp; |&nbsp;&nbsp;&nbsp;&nbsp; $row[3]TZS  &nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp; $row[2]</option>";

		}
		
echo '</select>';
	

?>
				
				
				</td>
			</tr>
		</table>
		

		
		</td>
		<td style="border-style: none; border-width: medium" align="center" width="106">
		<input type=number name=idadi placeholder="  Quantity"  style="width: 100; height: 44" size="20" required></td>
		<td style="border-style: none; border-width: medium" align="center" width="94">
		<input type=number name=bei placeholder="  Price"  style="width: 89; height: 44" size="20" required></td>
		<td style="border-style: none; border-width: medium" align="center" width="112">
		<input type=submit name=go value=Save style="width: 112; height: 47; font-size: 14pt; color:#990000; background-color:#0CF1BD; font-weight:700"></td>
	</tr>
	</table>
	</form>

</div>

</body>

</html>