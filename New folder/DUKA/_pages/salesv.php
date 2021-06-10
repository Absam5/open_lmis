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
<table border="1" width="800" height="211" style="border-width: 0px">
	<tr>
		<td style="border-style: none; border-width: medium" height="42" bgcolor="#F2F2F2">
		<p align="center">
		<font color="#006699" face="Segoe UI" size="4">&nbsp;Daily sales report</font></p>
		<hr noshade color="#C0C0C0" size="1">
								</td>
	</tr>
	<tr>
		<td style="border-style: none; border-width: medium" valign="top">
		
		<?php
$dt=date('Y-m-d');
$q="select SUM(cost) from sales where date='$dt' and shop='$shop'";
$r=mysql_query($q);
if($r)
{
	while($row=mysql_fetch_row($r))
	{
	$total=$row[0];
	}
	
}
?>

		
	<?php
$dt=date('Y-m-d');
$q="select * from sales where date='$dt' and shop='$shop'";
//$r=mysql_query($q);
if((mysql_num_rows(mysql_query($q)))==0) 
{
print"No sales found";
}
else
{
$r=mysql_query($q);


print "<table width=\"800\" border=\"0\" align=\"center\">
		 <tr >

  <tr onMouseOver=\"this.bgColor='white'\" onMouseOut=\"this.bgColor='#EBEBEB'\" bgcolor=\"#EBEBEB\" height=\"30\" align=\"center\">
<td width=\"200\" bgcolor=\"#006699\"><font color=\"white\"><b>PRODUCT</b></font></td>   
 <td width=\"100\" bgcolor=\"#006699\"><font color=\"white\"><b>QUANTITY</b></font></td>
    <td width=\"100\" bgcolor=\"#006699\"><font color=\"white\"><b>PRICE</b></font></td>
        <td width=\"100\" bgcolor=\"#006699\"><font color=\"white\"><b>COST</b></font></td>
     <td width=\"100\" bgcolor=\"#006699\"><font color=\"white\"><b>DISCOUNT</b></font></td>
 <td width=\"200\" bgcolor=\"#006699\"><font color=\"white\"><b>CUSTOMER</b></font></td>
      </tr>
      
</table><hr noshade color=\"#C0C0C0\" size=\"1\">";

if($r)
{

while($row=mysql_fetch_array($r))
	{
		print "<table width=\"800\" border=\"0\" align=\"center\">
		 <tr >

  <tr onMouseOver=\"this.bgColor='white'\" onMouseOut=\"this.bgColor='#EBEBEB'\" bgcolor=\"#EBEBEB\" >
 <td width=\"200\" bgcolor=\"#F2F2F2\" height=\"30\"><font color=\"#666666\">$row[0]</font></td>
    <td width=\"100\" bgcolor=\"#F2F2F2\"><font color=\"#666666\">$row[1]</font></td>
    <td width=\"100\" bgcolor=\"#F2F2F2\"><font color=\"#666666\">$row[2]</font></td>
    <td width=\"100\" bgcolor=\"#F2F2F2\"><font color=\"#666666\">$row[3]</font></td>  
  <td width=\"100\" bgcolor=\"#F2F2F2\"><font color=\"#666666\">$row[4]</font></td>
    <td width=\"200\" bgcolor=\"#F2F2F2\"><font color=\"#666666\">$row[5]</font></td> 

      </tr>
      
</table>";


	}
print "<hr noshade color=\"#C0C0C0\" size=\"1\"><table width=\"800\" border=\"0\" align=\"center\">
		 <tr >

  <tr onMouseOver=\"this.bgColor='white'\" onMouseOut=\"this.bgColor='#EBEBEB'\" bgcolor=\"#EBEBEB\">
<td width=\"600\" bgcolor=\"#F2F2F2\"><font color=\"#006699\"><b>TOTAL COST</b></font></td>   
 
    <td width=\"200\" bgcolor=\"#F2F2F2\"><font color=\"#006699\"><b>$total</b></font></td>

      </tr>
      
</table><hr noshade color=\"#C0C0C0\" size=\"1\">";

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