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
		<td style="border-style: none; border-width: medium" height="42">
		<p align="center">
		<font color="#006699" face="Segoe UI" size="4">&nbsp;Expenditure Records for 
		the month of <?php $month1=date('M-Y'); echo $month1; ?> </font></p>
		<hr noshade color="#C0C0C0" size="1">
								</td>
	</tr>
	<tr>
		<td style="border-style: none; border-width: medium" valign="top">
		
		<?php
$month=date('M-Y');
$q="select SUM(cost) from expenditure where month='$month' AND shop='$shop'";
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

$q="select * from expenditure where month='$month' AND shop='$shop' order by dt desc ";
//$r=mysql_query($q);
if((mysql_num_rows(mysql_query($q)))==0) 
{
print"No Expenditure found";
}
else
{
$r=mysql_query($q);


print "<table width=\"800\" border=\"0\" align=\"center\">
		 <tr >

  <tr onMouseOver=\"this.bgColor='white'\" onMouseOut=\"this.bgColor='#EBEBEB'\" bgcolor=\"#EBEBEB\" height=\"30\" align=\"center\">
<td width=\"250\" bgcolor=\"#006699\"><font color=\"white\"><b>PARTICULAR</b></font></td>   
 <td width=\"250\" bgcolor=\"#006699\"><font color=\"white\"><b>DATE</b></font></td>
    <td width=\"200\" bgcolor=\"#006699\"><font color=\"white\"><b>VOUCHER NO</b></font></td>
        <td width=\"100\" bgcolor=\"#006699\"><font color=\"white\"><b>COST</b></font></td>
    

      </tr>
      
</table><hr noshade color=\"#C0C0C0\" size=\"1\">";

if($r)
{

while($row=mysql_fetch_array($r))
	{
		print "<table width=\"800\" border=\"0\" align=\"center\">
		 <tr >

  <tr onMouseOver=\"this.bgColor='white'\" onMouseOut=\"this.bgColor='#EBEBEB'\" bgcolor=\"#EBEBEB\" >
 <td width=\"250\" bgcolor=\"white\" height=\"30\"><font color=\"#666666\">$row[1]</font></td>
    <td width=\"250\" bgcolor=\"white\"><font color=\"#666666\">$row[3]</font></td>
    <td width=\"200\" bgcolor=\"white\"><font color=\"#666666\">$row[5]</font></td>
    <td width=\"100\" bgcolor=\"white\"><font color=\"#666666\">$row[2]</font></td>  
  

      </tr>
      
</table>";


	}
print "<hr noshade color=\"#C0C0C0\" size=\"1\"><table width=\"800\" border=\"0\" align=\"center\">
		 <tr >

  <tr onMouseOver=\"this.bgColor='white'\" onMouseOut=\"this.bgColor='#EBEBEB'\" bgcolor=\"#EBEBEB\">
<td width=\"700\" bgcolor=\"white\"><font color=\"#006699\"><b>TOTAL COST</b></font></td>   
 
    <td width=\"100\" bgcolor=\"white\"><font color=\"#006699\"><b>$total</b></font></td>

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