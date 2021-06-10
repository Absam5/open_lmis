<html>

<?php
// database connection......
   include 'connection.php';


 // start session......... 
    session_start();
 $shop=$_SESSION['user'];
  
?>


<?php
if (isset($_POST['go']))
{
$bidhaa="coconut";
$q="select * from stock where product='$bidhaa'";
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
<form method=post action=salesprocess.php>
<table border="1" width="882" style="border-width: 0px" height="193">
	<tr>
		<td style="border-style: none; border-width: medium" width="876" align="center" colspan="4" valign="bottom">
		<p align="left">
		<font size="5">&nbsp;<font color="#990000"><b>Cash Sales</b></font></font></td>
	</tr>
	<tr>
		<td style="border-style: none; border-width: medium" width="461" align="center">
		

		
		<table border="1" width="100%" height="45" style="border-width: 0px" bgcolor="#CECECE">
			<tr>
				<td style="border-style: none; border-width: medium" bgcolor="#FFFFFF">
				<p align="center">
				
				
		<?php
$dt=date('Y-m-d');
$q="select distinct * from stock where shop='$shop'";
$r=mysql_query($q);
echo '<select name="bidhaa" heigHT=50 autofocus>';
print"<option>------------------SELECT PRODUCT NAME HERE-----------------------";


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
		<td style="border-style: none; border-width: medium" align="center" width="159">
		<input type=number name=idadi placeholder="  Quantity"  style="width: 137; height: 44" size="20" required></td>
		<td style="border-style: none; border-width: medium" align="center" width="115">
		<input type=number name=bei placeholder="  Price"  style="width: 102; height: 44" size="20" required></td>
		<td style="border-style: none; border-width: medium" align="center" width="125">
		<input type=submit name=go value=Sale style="width: 112; height: 47; font-size: 14pt; color:#990000; background-color:#0CF1BD"></td>
	</tr>
	</table>
	</form>

</div>

</body>

</html>