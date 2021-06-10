<html>

<?php
// database connection......
   include 'connection.php';


 // start session......... 
    session_start();
  
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
  background-image:url('../iconimage.jpg'); 
  background-position: left 50%; 
  background-repeat:no-repeat; 
  padding-left:17px
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
	<table class="rounded-corner" border="1" width="1130" height="817" style="border-width: 0px" bgcolor="#0CF1BD">
		<tr>
			<td class="rounded-corne" style="border-style: none; border-width: medium" bgcolor="#0CF1BD" height="163">
			<table border="1" width="100%" height="161" style="border-width: 0px">
				<tr>
					<td width="20%" style="border-style: none; border-width: medium" rowspan="2" bgcolor="#0CF1BD">
					<p align="center">
					<img border="0" src="../images/breeze_logo_white1.png" width="125" height="61"></td>
					<td width="32%" style="border-style: none; border-width: medium" rowspan="2" bgcolor="#0CF1BD">
					<p align="right">&nbsp;</td>
					<td width="46%" style="border-style: none; border-width: medium" valign="bottom" bgcolor="#0CF1BD">
					<p align="center">
					<font face="Impact" size="6" color="#FFFFFF">IRIS Stationary 
					- Report Panel</font></td>
				</tr>
				<tr>
					<td width="46%" style="border-style: none; border-width: medium" height="21">
					&nbsp;</td>
				</tr>
				<tr>
					<td height="42" colspan="3" style="border-style: none; border-width: medium" bgcolor="#000000">
					<table border="1" width="100%" style="border-width: 0px" bgcolor="#000000" height="34">
						<tr bgcolor="#000000">
							<td width="63" align="center" style="border-style: none; border-width: medium" bgcolor="#000000">
							<font color="#FFFFFF" size="4">
							<a target="main" href="salesreports.php">
							<font color="#FFFFFF">Sales</font></a></font></td>
							<td width="5" align="center" style="border-style: none; border-width: medium" bgcolor="#000000">
							<font color="#FFFFFF" size="2">|</font></td>
							<td width="78" align="center" style="border-style: none; border-width: medium" bgcolor="#000000">
							<a target="main" href="purchasereports.php">
							<font color="#FFFFFF" size="4">Purchase</font></a></td>
							<td width="2" align="center" style="border-style: none; border-width: medium">
							<font color="#FFFFFF" size="2">|</font></td>
							<td width="60" align="center" style="border-style: none; border-width: medium">
							<a target="main" href="stockreports.php">
							<font color="#FFFFFF" size="4">Stock</font></a></td>
							<td width="2" align="center" style="border-style: none; border-width: medium">
							<font color="#FFFFFF" size="2">|</font></td>
							<td align="center" style="border-style: none; border-width: medium" width="181">&nbsp;</td>
							<td align="center" style="border-style: none; border-width: medium">
							&nbsp;</td>
							<td align="center" style="border-style: none; border-width: medium" width="3">
							&nbsp;</td>
							<td align="center" style="border-style: none; border-width: medium" width="30">
							&nbsp;</td>
							<td align="center" style="border-style: none; border-width: medium" width="3">
							&nbsp;</td>
							<td align="center" style="border-style: none; border-width: medium" width="31">
							&nbsp;</td>
							<td align="center" style="border-style: none; border-width: medium" width="2">
							&nbsp;</td>
							<td align="center" style="border-style: none; border-width: medium" width="24">
							&nbsp;</td>
							<td align="center" style="border-style: none; border-width: medium" width="4">
							&nbsp;</td>
							<td align="center" style="border-style: none; border-width: medium" width="90">
							&nbsp;</td>
							<td align="center" style="border-style: none; border-width: medium" width="35">
							&nbsp;</td>
							<td align="center" style="border-style: none; border-width: medium" width="36">
							&nbsp;</td>
							<td align="center" style="border-style: none; border-width: medium" width="29">
							&nbsp;</td>
							<td align="center" style="border-style: none; border-width: medium" width="49">
							<a href="setting.php">
							<img border="0" src="../images/cl.PNG" width="29" height="15"></a></td>
						</tr>
					</table>
					</td>
				</tr>
			</table>
			</td>
		</tr>
		<tr>
			<td class="rounded-corn" style="border-style: none; border-width: medium" bgcolor="#FFFFFF" valign="top">
					<span style="background-color: #7F7F7F">
					<iframe name="main" scrolling=no width="1118" height="635" frameborder="0" >
	
	</iframe>
									</span>
									</td>
		</tr>
	</table>
</div>

</body>

</html>