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
<div align="center">
	<table border="1" width="910" style="border-width: 0px" bgcolor="#CCCCCC" height="88">
		<tr>
			<td style="border-style: none; border-width: medium">
<form method=post>
<div align="center">
<table border="1" width="905" style="border-width: 0px" height="37">
	<tr>
		<td style="border-style: none; border-width: medium" align="center" width="612">
						<p align="right">
						<input type=text style="width: 568; height: 33" size="50" name="key" placeholder="  Search product  "></td>
		<td style="border-style: none; border-width: medium" align="center" width="225">
		<font size="3" face="Segoe UI">
		<input type="submit" name="go" value="Search" style="height: 37; width: 218" /></font></td>
		<td style="border-style: none; border-width: medium" align="center" width="55">
		<p align="right">&nbsp;</td>
	</tr>
</table>
</div>
</form>
			</td>
		</tr>
	</table>
</div>
<div align="center">
	<table border="1" width="910" height="40" style="border-width: 0px">
		<tr>
			<td style="border-style: none; border-width: medium" valign="top">
			<p align="center"><?php
if (isset($_POST['go']))
{
$key=$_POST['key'];
$dt=date('Y-m-d');
$q="select * from sales where ((product like '$key%' and shop='$shop') or (customer='$key' and shop='$shop') or (date='$key' and shop='$shop') ) ";
//$r=mysql_query($q);
if((mysql_num_rows(mysql_query($q)))==0) 
{

}
else
{
$r=mysql_query($q);

if($r)
{

while($row=mysql_fetch_array($r))
	{
		$product=$row[0];
		$quantity=$row[1];
		$price=$row[2];
		$cost=$row[3];
		$discount=$row[4];
		$customer=$row[5];
		$date=$row[6];
		$id=$row[8];

		
		
        


	echo<<<JUMA
	<form method="post" action=returnprocess.php>
		
<table border="1" width="900"style="border-width: 0px" align="center" bgcolor="#00CCFF">
										
										
										<tr>
											<td height="26" style="border-style: none; border-width: medium" bgcolor="#CCCCFF">
											<table border="1" width="900" style="border-width: 0px" bgcolor="#FFFFFF">
												<tr>
													<td style="border-style: none; border-width: medium" ">
													PRODUCT<input type=text name="product" value="$product" style="height: 24; width: 150" readonly></td>
													<td style="border-style: none; border-width: medium" ">
													QUANTITY<input type=text name="quantity" value="$quantity" style="height: 24; width: 100" ></td>
													
								                    <td style="border-style: none; border-width: medium" ">
													PRICE<input type=text name="price" value="$price" style="height: 24; width: 100" readonly></td>
													<td style="border-style: none; border-width: medium" ">
													T/PRICE<input type=text name="cost" value="$cost" style="height: 24; width: 100" readonly></td>
													<td style="border-style: none; border-width: medium" ">
													CUSTOMER<input type=text name="customer" value="$customer" style="height: 24; width: 200" readonly></td>
													<td style="border-style: none; border-width: medium" ">
													DATE<input type=text name="date" value="$date" style="height: 24; width: 100" readonly></td>
													<input type=text name="id" value="$id" style="height: 24; width: 10" hidden></td>





													<td  width="200" align="center" style="border-style: none; border-width: medium" background="bluelinen.jpg"><input name="view" type="submit" value="View" / ></td>
												</tr>
											</table>
											</td>
										</tr>

									</table>
</form>
	
JUMA;
	}
	

}
}
}
?>







</td>
		</tr>
	</table>
</div>



</body>

</html>