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

<form method=post><table border="1" width="882" style="border-width: 0px" height="193">
	<tr>
		<td style="border-style: none; border-width: medium" width="438" align="center" colspan="2" valign="bottom">
		<p align="left">
		<font color="#336699" size="5">&nbsp;</font><font size="5">Register creditor</font></td>
		<td style="border-style: none; border-width: medium" width="438" align="center" colspan="2" valign="bottom">
		&nbsp;<table border="1" width="95%" style="border-width: 0px" height="37">
			<tr>
				<td style="border-style: none; border-width: medium">
				
				
				
				<?php
		
if (isset($_POST['sajili']))
{

$jina=$_POST['jina'];
$simu=$_POST['simu'];
$anuwani=$_POST['anuwani'];

$q="SELECT * FROM `creditor` where name='$jina' ";
$result=mysql_query($q);
@$count=mysql_num_rows($result);
if(!$count==1)
	{

$query="INSERT INTO `creditor` (`name`,`mobile`,`address`)VALUES ('$jina','$simu','$anuwani')";

@$result=mysql_query($query);
if($result)
	{
	 
print "<font  color=\"#FF9900\" size=\"4\">$jina Registered as Creditor</font>";		
}
}
else
{
echo "Creditor's name already exist";
}
}
?>

				
				
				</td>
			</tr>
		</table>
		
		
		
		

		
		</td>
	</tr>
	<tr>
		<td style="border-style: none; border-width: medium" width="399" align="center">
		<input name=jina placeholder="   Debtor's name" style="width: 388; height: 44; float:left" size="20" autofocus required></td>
		<td style="border-style: none; border-width: medium" align="center" width="187">
		<input type=text name=simu placeholder="  Mobile" required style="width: 157; height: 44" size="20"></td>
		<td style="border-style: none; border-width: medium" align="center" width="153">
		<input type=text name=anuwani placeholder="  Address" required style="width: 135; height: 44" size="20"></td>
		<td style="border-style: none; border-width: medium" align="center" width="125">
		<input type=submit name=sajili value=Register style="width: 112; height: 47; font-size: 14pt; color:#FFFFFF; background-color:#0CF1BD"></td>
	</tr>
	</table></form>

</div>

</body>

</html>