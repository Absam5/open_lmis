<html>
<?php
// database connection......
   include 'connection.php';

// start session......... 
    session_start();
 $shop=$_SESSION['user']; 
 $passs=$_SESSION['pass'];  
?>
<?php
$q="select COUNT(product) from stock where quantity<10 and shop='$shop'";
$r=mysql_query($q);
if($r)
{
	while($row=mysql_fetch_row($r))
	{
	
	$idad=$row[0];
    
 
	}
	
}
?>
<?php
$dt=date('Y-m-d');
$q="select SUM(cost) from sales where date='$dt' and shop='$shop' ";
$r=mysql_query($q);
if($r)
{
	while($row=mysql_fetch_row($r))
	{
	
	$gharama=$row[0];
    
 
	}
	
}
?>


<?php

$q="select * from staff where user='$shop' and password='$passs'";
$r=mysql_query($q);
if($r)
{
	while($row=mysql_fetch_row($r))
	{
	$name=$row[2];
	$sts=$row[5];


	}
	
}
if($sts=='admin')
{
$results="<a href=\"sales.php\"><img border=\"0\" src=\"../images/ban%20hang.png\" width=\"85\" height=\"86\"></a>";
 $results1="<a href=\"purchase.php\"><img border=\"0\" src=\"../images/book-keeping-512.png\" width=\"85\" height=\"83\"></a>";
 $results2="<a href=\"stock.php\"><img border=\"0\" src=\"../images/shopping-basket.png\" width=\"66\" height=\"61\"></a>";
 $results3="<a href=\"expenses.php\"><img border=\"0\" src=\"../images/_0039_Medal-Bronze.png\" width=\"83\" height=\"78\"></a>";
 $results4="<a href=\"main.php\"><img border=\"0\" src=\"../images/bookkeeping-accounting.png\" width=\"93\" height=\"92\"></a>";
 $results5="<a href=\"setting.php\"><img border=\"0\" src=\"../images/setting.png\" width=\"87\" height=\"83\"></a>";
 }
 elseif($sts=='staff')
 {
 $results="<a href=\"sales.php\"><img border=\"0\" src=\"../images/ban%20hang.png\" width=\"85\" height=\"86\"></a>";
 $results1="<a href=\"home.php\"><img border=\"0\" src=\"../images/book-keeping-512.png\" width=\"85\" height=\"83\"></a>";
 $results2="<a href=\"stock.php\"><img border=\"0\" src=\"../images/shopping-basket.png\" width=\"66\" height=\"61\"></a>";
 $results3="<a href=\"expenses.php\"><img border=\"0\" src=\"../images/_0039_Medal-Bronze.png\" width=\"83\" height=\"78\"></a>";
 $results4="<a href=\"main.php\"><img border=\"0\" src=\"../images/bookkeeping-accounting.png\" width=\"93\" height=\"92\"></a>";
 $results5="<a href=\"home.php\"><img border=\"0\" src=\"../images/setting.png\" width=\"87\" height=\"83\"></a>";
 }
  elseif($sts=='registrar')
 {
 $results="<a href=\"home.php\"><img border=\"0\" src=\"../images/ban%20hang.png\" width=\"85\" height=\"86\"></a>";
 $results1="<a href=\"home.php\"><img border=\"0\" src=\"../images/book-keeping-512.png\" width=\"85\" height=\"83\"></a>";
 $results2="<a href=\"home.php\"><img border=\"0\" src=\"../images/shopping-basket.png\" width=\"66\" height=\"61\"></a>";
 $results3="<a href=\"home.php\"><img border=\"0\" src=\"../images/_0039_Medal-Bronze.png\" width=\"83\" height=\"78\"></a>";
 $results4="<a href=\"home.php\"><img border=\"0\" src=\"../images/bookkeeping-accounting.png\" width=\"93\" height=\"92\"></a>";
 $results5="<a href=\"home.php\"><img border=\"0\" src=\"../images/setting.png\" width=\"87\" height=\"83\"></a>";
 }
 else
 {
$results="<a href=\"home.php\"><img border=\"0\" src=\"../images/ban%20hang.png\" width=\"85\" height=\"86\"></a>";
 $results1="<a href=\"home.php\"><img border=\"0\" src=\"../images/book-keeping-512.png\" width=\"85\" height=\"83\"></a>";
 $results2="<a href=\"home.php\"><img border=\"0\" src=\"../images/shopping-basket.png\" width=\"66\" height=\"61\"></a>";
 $results3="<a href=\"home.php\"><img border=\"0\" src=\"../images/_0039_Medal-Bronze.png\" width=\"83\" height=\"78\"></a>";
 $results4="<a href=\"home.php\"><img border=\"0\" src=\"../images/bookkeeping-accounting.png\" width=\"93\" height=\"92\"></a>";
 $results5="<a href=\"home.php\"><img border=\"0\" src=\"../images/setting.png\" width=\"87\" height=\"83\"></a>";
 }


?>


<style type="text/css">
.rounded-corners {
     
   -moz-border-radius: 20px;
    -webkit-border-radius: 20px;
    -khtml-border-radius: 20px;
    border-radius: 20px;       
}
</style>
<style type="text/css">
.rounded-corner {
    -webkit-border-radius:10px 10px 10px 10px;
    -moz-border-radius: 10px 10px 10px 10px;
    -webkit-border-radius: 10px 10px 10px 10px
    -khtml-border-radius: 10px 10px 10px 10px
    border-radius: 10px 10px 10px 10px
}
</style>

<style type="text/css">
.rounded-corne {
    -webkit-border-radius:10px 10px 0px 0px;
    -moz-border-radius: 10px 10px 0px 0px;
    -webkit-border-radius: 10px 10px 0px 0px;
    -khtml-border-radius: 10px 10px 0px 0px;
    border-radius: 10px 10px 0px 0px;}
</style>

<style type="text/css">
.rounded-corn {
    -webkit-border-radius:0px 0px 10px 10px;
    -moz-border-radius: 0px 0px 10px 10px;
    -webkit-border-radius: 0px 0px 10px 10px;
    -khtml-border-radius: 0px 0px 10px 10px;
    border-radius: 0px 0px 10px 10px;}
</style>


<style type="text/css">
.textBox
{
  background-image:url(iconimage.jpg); 
  background-position:left; 
  background-repeat:no-repeat; 
  padding-left:17px;
}
 li.MsoNormal
	{mso-style-parent:"";
	margin-bottom:.0001pt;
	font-size:12.0pt;
	font-family:"Times New Roman","serif";
	margin-left:0in; margin-right:0in; margin-top:0in}

.rounded-corne2 {
    -webkit-border-radius:10px 0px 0px 0px;
    -moz-border-radius: 10px 0px 0px 0px;
    -webkit-border-radius: 10px 0px 0px 0px;
    -khtml-border-radius: 10px 0px 0px 0px;
    border-radius: 10px 0px 0px 0px;}

.rounded-corne1 {
    -webkit-border-radius:0px 10px 0px 0px;
    -moz-border-radius: 0px 10px 0px 0px;
    -webkit-border-radius: 0px 10px 0px 0px;
    -khtml-border-radius: 0px 10px 0px 0px;
    border-radius: 0px 10px 0px 0px;}
</style>





<head>
<meta http-equiv="Content-Language" content="en-us">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>New Page 1</title>
</head>

<body bgcolor="#C0C0C0">

<div align="center">
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<table class="rounded-corne" border="1" width="1000" height="226" style="border-width: 0px" bgcolor="#E0E0E0">
		<tr>
			<td class="rounded-corne" style="border-style: none; border-width: medium" bgcolor="#E0E0E0">
			<table border="1" width="100%" height="286" style="border-width: 0px">
				<tr>
					<td height="53" style="border-style: none; border-width: medium">
					<div align="center">
						<table border="1" width="94%" style="border-width: 0px">
							<tr>
								<td style="border-style: none; border-width: medium">&nbsp;</td>
								<td width="809" style="border-style: none; border-width: medium">
								<p align="center">
								<b><font color="#CC3300" size="6">STATIONARY MANAGEMENT SYSTEM</font></b></td>
								<td width="47" style="border-style: none; border-width: medium">
								<p align="center">
								<a href="../index.php" title="Close App">
								<img border="0" src="../images/power18.png" width="37" height="34"></a></font></td>
							</tr>
						</table>
					</div>
					</td>
				</tr>
				<tr>
					<td style="border-style: none; border-width: medium" height="188">
				<div align="center">
					<table border="1" width="95%" height="175" style="border-width: 0px">
						<tr>
							<td class="rounded-corner" bgcolor="#EBEBEB" style="border-style: none; border-width: medium" align="center" width="164">
							<table border="1" width="100%" height="131" style="border-width: 0px">
								<tr>
									<td align="center" style="border-style: none; border-width: medium">
									<font color="#CC3300" size="5">Sales</font></td>
								</tr>
								<tr>
									<td align="center" style="border-style: none; border-width: medium">
									<?php echo "$results"; ?></td>
								</tr>
							</table>
							</td>
							<td class="rounded-corner" bgcolor="#EBEBEB" style="border-style: none; border-width: medium" align="center" width="175">
							<table border="1" width="100%" height="127" style="border-width: 0px">
								<tr>
									<td align="center" style="border-style: none; border-width: medium">
									<font size="5" color="#CC3300">Purchase</font><?php echo "$results1"; ?></td>
								</tr>
								</table>
							</td>
							<td class="rounded-corner" bgcolor="#EBEBEB" style="border-style: none; border-width: medium" align="center" width="181">
							<table border="1" width="115%" height="121" style="border-width: 0px">
								<tr>
									<td align="center" style="border-style: none; border-width: medium">
									<font color="#CC3300" size="5">Stock</font><?php echo "$results2"; ?></td>
								</tr>
								</table>
							</td>
							<td class="rounded-corner" bgcolor="#EBEBEB" style="border-style: none; border-width: medium" align="center" width="216">
							<table border="1" width="141%" height="131" style="border-width: 0px">
								<tr>
									<td align="center" style="border-style: none; border-width: medium">
									<p align="justify">
									<font size="5" color="#CC3300">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Reports</font></td>
								</tr>
								<tr>
									<td align="center" style="border-style: none; border-width: medium">
									<?php echo "$results4"; ?></td>
								</tr>
							</table>
							</td>
							<td class="rounded-corner" bgcolor="#EBEBEB" style="border-style: none; border-width: medium" align="center">
							<table border="1" width="82%" height="130" style="border-width: 0px">
								<tr>
									<td align="center" style="border-style: none; border-width: medium">
									<font size="5" color="#CC3300">Setting</font></td>
								</tr>
								<tr>
									<td align="center" style="border-style: none; border-width: medium">
									<?php echo "$results5"; ?></td>
								</tr>
							</table>
							</td>
						</tr>
					</table>
				</div>
					</td>
				</tr>
				</table>
			</td>
		</tr>
	</table>
	<table class="rounded-corn" border="1" width="1000" height="116" style="border-width: 0px" bgcolor="#0CF1BD">
		<tr>
			<td class="rounded-corn" style="border-style: none; border-width: medium" bgcolor="#0CF1BD">
			<div align="center">
				<table border="1" width="94%" style="border-width: 0px">
					<tr>
						<td width="385" style="border-style: none; border-width: medium">
						<b><font size="4" color="#0000FF">Developed by IRIS</font><font size="4" color="#FFFFFF"> </font>
						</b></td>
						<td style="border-style: none; border-width: medium">
						&nbsp;</td>
						<td style="border-style: none; border-width: medium" width="4" bgcolor="#0CF1BD">
						&nbsp;</td>
						<td style="border-style: none; border-width: medium" width="125">&nbsp;</td>
						<td width="141" style="border-style: none; border-width: medium">
						<font size="4" color="#0000FF"><b>2018</b></font></td>
					</tr>
				</table>
			</div>
			</td>
		</tr>
	</table>
</div>

</body>

</html>