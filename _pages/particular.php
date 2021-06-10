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
<title>Setting Panel</title>
</head>

<body>

<div align="center">
	<form method=post>
		<table border="1" width="436" height="181" style="border-width: 0px">
		<tr>
			<td style="border-style: none; border-width: medium">
			<p align="center"><b><font face="Segoe UI" size="5" color="#990000">Add 
			particular</font></b><font face="Segoe UI" size="5" color="#666666"> </font></p>
			<hr noshade color="#C0C0C0" size="1">
			</td>
		</tr>
		<tr>
			<td style="border-style: none; border-width: medium">
										<div align="center">
										<table border="1" width="96%" height="144" style="border-width: 0px">
											<tr>
												<td style="border-style: none; border-width: medium" bgcolor="#0CF1BD" width="80%" height="37">
												<font color="#990000">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												</font>
												<font color="#990000" face="Segoe UI">&nbsp;&nbsp; 
												Particular</font></td>
											</tr>
											<tr>
												<td style="border-style: none; border-width: medium" bgcolor="#C0C0C0" align="center" width="80%">
												<input name=particular size="20" style="width: 331; height: 33"></td>
											</tr>
											<tr>
												<td style="border-style: none; border-width: medium" align="center" height="42">
													<font color="#990000">
													<input type=submit name=usajili value="Add" style="width: 201; height: 37; float:left; font-weight:700"></font>




<?php
		
if (isset($_POST['usajili']))
{


$particular=$_POST['particular'];


if(empty($_POST['particular']))
{
 print "<font color=\"red\" size=\"4\" >Fill all the fields</font>";
}

else
{

$up="insert into particular (particular,shop)values('$particular','$shop')";
	 $res=mysql_query($up);

print "<font color=\"blue\" size=\"4\">$particular Saved</font>";		

}
}
?>




	


													
													
													</td>
											</tr>
										</table>
										</div>
										</td>
		</tr>
	</table></form>
</div>

</body>

</html>