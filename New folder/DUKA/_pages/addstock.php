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
<table border="1" width="882" style="border-width: 0px" height="98">
	<tr>
		<td style="border-style: none; border-width: medium" width="438" align="center" colspan="2" valign="bottom" height="32">
		<p align="left">
		<font color="#336699" size="5">&nbsp;</font><font size="5" face="Segoe UI" color="#B5B5B5">Register new stock</font></td>
		<td style="border-style: none; border-width: medium" width="438" align="center" colspan="2" valign="bottom" height="32">
		&nbsp;
		
		<?php
		
if (isset($_POST['sajili']))
{

$bidhaa=$_POST['bidhaa'];
$bei=$_POST['bei'];
$kununua=$_POST['kununua'];
$idadi=0;

$q="SELECT * FROM `stock` where product='$bidhaa' AND shop='$shop' ";
$result=mysql_query($q);
@$count=mysql_num_rows($result);
if(!$count==1)
	{

$query="INSERT INTO `stock` (`product`,`price`,`quantity`,`purchase`,`shop`)VALUES ('$bidhaa','$bei','$idadi','$kununua','$shop')";

@$result=mysql_query($query);
if($result)
	{
	 
print "<font  color=\"#FF9900\" size=\"4\">$bidhaa Registered</font>";		
}
}
else
{
echo "Product name already exist";
}
}
?>

		
		
		
		
		</td>
	</tr>
	<tr>
		<td style="border-style: none; border-width: medium" width="428" align="center">
		<input name=bidhaa placeholder="   Product name" style="width: 410; height: 44; float:left" size="20" autofocus required></td>
		<td style="border-style: none; border-width: medium" align="center" width="162">
		<input type=number name=kununua placeholder="  Purchasing price" required style="width: 144; height: 44" size="20"></td>
		<td style="border-style: none; border-width: medium" align="center" width="172">
		<input type=number name=bei placeholder=" Selling price" required style="width: 139; height: 44" size="20"></td>
		<td style="border-style: none; border-width: medium" align="center" width="125">
		<input type=submit name=sajili value=Register style="width: 112; height: 47; font-size: 14pt; color:#FFFFFF; background-color:#0CF1BD"></td>
	</tr>
	</table>
	</form>

<table border="1" width="882" style="border-width: 0px" height="107">
	<tr>
		<td style="border-style: none; border-width: medium">&nbsp;</td>
	</tr>
</table>

</div>

</body>

</html>