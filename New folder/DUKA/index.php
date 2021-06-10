<html>
<?php
$con=mysql_connect("localhost","root") or die("connection feild");
$db=mysql_select_db("shop",$con) or die("connection feild");
 
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
<title>MINIBOOK APP</title>
</head>

<body bgcolor="#C0C0C0">

<div align="center">
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>
	
	
	
	
	<?php
// user login.......................................................

if (isset($_POST['login']))
{
$user=$_POST['user'];
$pass=$_POST['pass'];

// control submision of nul data to the database.....................

if(empty($_POST['user']) and empty($_POST['pass']))
{
print"<font color=\"black\" size=\"4\">Fill all the Fields Please..!</font>";
}
elseif(empty($_POST['user']))
{
print"<font color=\"black\" size=\"4\">Fill User name Please..!</font>";

}
elseif(empty($_POST['pass']))
{
print"<font color=\"black\" size=\"4\">Fill Password Please..!</font>";
}
else
{
$q="SELECT * FROM `staff` where user='$user' and password='$pass' and status='staff' ";
$result=mysql_query($q);
@$count=mysql_num_rows($result);
if(!$count==1)
	{
	
	$q="SELECT * FROM `staff` where user='$user' and password='$pass' and status='admin' ";
$result=mysql_query($q);
@$count=mysql_num_rows($result);
if(!$count==1)
	{
	
		print"<font color=\"black\" size=\"4\">Wrong User name or Password..!</font>";
		
	}
	
	else
	{
	$_SESSION['user']=$_POST['user'];
	$_SESSION['pass']=$_POST['pass'];
		header('location:_pages/setting.php');	
	}
		
	}
	
	else
	{
	$_SESSION['user']=$_POST['user'];
	$_SESSION['pass']=$_POST['pass'];
		header('location:_pages/home.php');	
	}
}
}
?>


	
	
	
	
	
	</p>
	<table class="rounded-corne" border="1" width="500" height="226" style="border-width: 0px" bgcolor="#E0E0E0">
		<tr>
			<td class="rounded-corne" style="border-style: none; border-width: medium" bgcolor="#E0E0E0">
			<table border="1" width="100%" height="286" style="border-width: 0px">
				<tr>
					<td height="53" style="border-style: none; border-width: medium">
					<p align="center"><b><font size="6" color="#CC3300">
					Stationary Log In </font></b></td>
				</tr>
				<tr>
					<td style="border-style: none; border-width: medium" height="188">
				<form method=post>	
					<table border="1" width="100%" style="border-width: 0px" height="187">
						<tr>
							<td align="right" style="border-style: none; border-width: medium" width="3%">
							&nbsp;</td>
							<td align="right" style="border-style: none; border-width: medium" width="11%">&nbsp;</td>
							<td style="border-style: none; border-width: medium" width="80%">
							<div align="left">
							<table class="rounded-corner" border="1" width="84%" height="39" style="border-width: 0px" bgcolor="#EAEAEA">
								<tr>
									<td style="border-style: none; border-width: medium" align="center">
									
												<table border="1" width="96%" style="border-width: 0px">
													<tr>
														<td style="border-style: none; border-width: medium">
									
												<input name=user size="20" style="width: 337; height: 31; float:left" placeholder="  User Name"></td>
													</tr>
												</table>
									</td>
								</tr>
							</table>
							</div>
							</td>
						</tr>
						<tr>
							<td align="right" style="border-style: none; border-width: medium" height="34" width="3%">
							&nbsp;</td>
							<td align="right" style="border-style: none; border-width: medium" height="34" width="11%">&nbsp;</td>
							<td style="border-style: none; border-width: medium" width="80%" height="34">
							<div align="left">
							<table class="rounded-corner" border="1" width="84%" height="39" style="border-width: 0px" bgcolor="#EAEAEA">
								<tr>
									<td style="border-style: none; border-width: medium" align="center">
									
												<table border="1" width="96%" style="border-width: 0px">
													<tr>
														<td style="border-style: none; border-width: medium">
									
												<input name=pass size="20" style="width: 338; height: 34; float:left" type="password" placeholder="  Password"></td>
													</tr>
												</table>
									</td>
								</tr>
							</table>
							</div>
							</td>
						</tr>
						<tr>
							<td align="right" style="border-style: none; border-width: medium" colspan="2">&nbsp;</td>
							<td style="border-style: none; border-width: medium" width="80%">
							<table border="1" width="100%" style="border-width: 0px">
								<tr>
									<td width="85%" style="border-style: none; border-width: medium">
													<input type=submit name=login value="Login" style="border-style:solid; border-width:1px; width: 343; height: 37; color:#000000; font-size:14pt; background-color:#0CF1BD"></td>
									<td style="border-style: none; border-width: medium">
									&nbsp;</td>
								</tr>
							</table>
							</td>
						</tr>
					</table></form>
					</td>
				</tr>
				</table>
			</td>
		</tr>
	</table>
	<table class="rounded-corn" border="1" width="500" height="116" style="border-width: 0px" bgcolor="#0CF1BD">
		<tr>
			<td class="rounded-corn" style="border-style: none; border-width: medium" bgcolor="#0CF1BD">
			<div align="center">
				<table border="1" width="94%" style="border-width: 0px">
					<tr>
						<td width="278" style="border-style: none; border-width: medium">
						<font size="6"><b>IRIS </b></font><b>
						<font size="6">Stationary</font></b></td>
						<td style="border-style: none; border-width: medium">&nbsp;</td>
						<td width="73" style="border-style: none; border-width: medium">
						<p align="center">
						<img border="0" src="images/ban hang.png" width="37" height="38"></td>
					</tr>
				</table>
			</div>
			</td>
		</tr>
	</table>
</div>

</body>

</html>