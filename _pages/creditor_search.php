<html>
<?php
// database connection......
   include 'connection.php';

 ?> 

<?php
@$mteja=$_POST['mteja'];


	if (isset($_POST['veiw']))
{
$q="select sum(cost) from purchase where supplier!='cash' and supplier='$mteja' ";
$r=mysql_query($q);
if($r)
{
	while($row=mysql_fetch_row($r))
	{
	$amount=$row[0];
	
	}
	}
}
?>


<head>

<script language="JavaScript">
var gAutoPrint = true; // Tells whether to automatically call the print function

function printSpecial()
{
if (document.getElementById != null)
{
var html = '<HTML>\n<HEAD>\n';

if (document.getElementsByTagName != null)
{
var headTags = document.getElementsByTagName("head");
if (headTags.length > 0)
html += headTags[0].innerHTML;
}

html += '\n</HE>\n<BODY>\n';

var printReadyElem = document.getElementById("printReady");

if (printReadyElem != null)
{
html += printReadyElem.innerHTML;
}
else
{
alert("Could not find the printReady function");
return;
}

html += '\n</BO>\n</HT>';

var printWin = window.open("","printSpecial");
printWin.document.open();
printWin.document.write(html);
printWin.document.close();
if (gAutoPrint)
printWin.print();
}
else
{
alert("The print ready feature is only available if you are using an browser. Please update your browswer.");
}
}

</script>



<meta http-equiv="Content-Language" content="en-us">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Deduction type</title>
</head>

<body>

<div align="center">
	<table border="1" width="766" height="226" style="border-width: 0px">
		<tr>
			<td height="64" style="border-style: none; border-width: medium" bgcolor="#F4F4F4">
			<form method=post><table border="1" width="100%" height="42" style="border-width: 0px">
				<tr>
					<td width="9" align="center" style="border-style: none; border-width: medium">
					&nbsp;</td>
					<td width="23" align="center" style="border-style: none; border-width: medium">
					&nbsp;</td>
					<td width="571" align="center" style="border-style: none; border-width: medium">
					&nbsp;</td>
					<td align="center" style="border-style: none; border-width: medium" width="140">
													
													
													
													<table border="1" width="61%" style="border-width: 0px">
														<tr>
															<td width="36" style="border-style: none; border-width: medium">
															<b>
															<font color="#808080">
															Print</font></b></td>
															<td style="border-style: none; border-width: medium">
															<a href="javascript:void(printSpecial())">
															<img border="0" src="../../payrol-zct/images/printButton.png" width="16" height="16"></a></td>
														</tr>
													</table>
					</td>
				</tr>
				<tr>
					<td width="9" align="center" style="border-style: none; border-width: medium">&nbsp;</td>
					<td width="23" align="center" style="border-style: none; border-width: medium"><font size="4" face="Segoe UI">
					
</font></td>
					<td width="571" align="center" style="border-style: none; border-width: medium"><?php
$dt=date('Y-m-d');
$q="select distinct * from creditor ";
$r=mysql_query($q);
echo '<select name="mteja" height=50 autofocus>';
print"<option>---SELECT CREDITOR'S NAME HERE---";


	while($row=mysql_fetch_row($r))
	{
	
	print "<option value=\"$row[0]\" >   $row[0] &nbsp;|&nbsp; $row[1] &nbsp;|&nbsp;($row[3]/=) </option>";

		}
		
echo '</select>';
	

?></td>
					<td align="center" style="border-style: none; border-width: medium" width="140">
													
													
													
													<input type=submit name=veiw value="Find Report" style="width: 95; height: 37"></td>
				</tr>
			</table></form>
			</td>
		</tr>
		<tr>
			<td style="border-style: none; border-width: medium" align="center"><div id="printReady">
			<?php
			if (isset($_POST['veiw']))
{
			$mteja=$_POST['mteja'];
			

$q="select * from creditor where name='$mteja'";
//$r=mysql_query($q);
if((mysql_num_rows(mysql_query($q)))==0) 
{
print"NO DETAILS FOUND";
}
else
{
$r=mysql_query($q);

print "<table width=\"800\" height=\"50\" border=\"0\" align=\"center\" >
		 <tr >
		 <td colspan=\"7\" align=\"center\"> CREDITOR INFORMATION<hr></td>
		 </tr>

  <tr align=\"center\">
    <td width=\"200\" bgcolor=\"orange\" height=\"30\"><font color=\"#FFFFFF\">NAME</font></td>
    <td width=\"200\" bgcolor=\"orange\" height=\"30\"><font color=\"#FFFFFF\">MOBILE</font></td>
    <td width=\"200\" bgcolor=\"orange\" height=\"30\"><font color=\"#FFFFFF\">ADDRESS</font></td>
    <td width=\"200\" bgcolor=\"orange\" height=\"30\"><font color=\"#FFFFFF\">BALANCE</font></td>
       
      </tr>
</table>";




if($r)
{

while($row=mysql_fetch_array($r))
	{
		print "<table width=\"800\" border=\"0\" align=\"center\" >
		 <tr >

  <tr onMouseOver=\"this.bgColor='white'\" onMouseOut=\"this.bgColor='#EBEBEB'\" bgcolor=\"#FF339\" align=\"center\">
    <td width=\"200\" bgcolor=\"#EBEBEB\" height=\"30\"><font color=\"black\" >$row[0]</font></td>
    <td width=\"200\" bgcolor=\"#EBEBEB\" height=\"30\"><font color=\"black\" >$row[1]</font></td>
    <td width=\"200\" bgcolor=\"#EBEBEB\" height=\"30\"><font color=\"black\" >$row[2]</font></td>
  <td width=\"200\" bgcolor=\"#EBEBEB\" height=\"30\"><font color=\"black\" >$row[3]</font></td>
  
 

  
      </tr>
</table>";
	}

}}
}
?>


<?php
			if (isset($_POST['veiw']))
{
			$mteja=$_POST['mteja'];
			

$q="select * from credit where owner='$mteja'";
//$r=mysql_query($q);
if((mysql_num_rows(mysql_query($q)))==0) 
{
print"NO DETAILS FOUND";
}
else
{
$r=mysql_query($q);

print "<table width=\"800\" height=\"50\" border=\"0\" align=\"center\" >
		 <tr >
		 <td colspan=\"7\" align=\"center\"> PAYMENT DETAILS<hr></td>
		 </tr>

  <tr align=\"center\" bgcolor=\"blue\">
    <td width=\"200\" bgcolor=\"blue\" height=\"30\"><font color=\"#FFFFFF\">DATE</font></td>
       <td width=\"200\" bgcolor=\"blue\" height=\"30\"><font color=\"#FFFFFF\">BALANCE</font></td>
       
      </tr>
</table>";




if($r)
{

while($row=mysql_fetch_array($r))
	{
		print "<table width=\"800\" border=\"0\" align=\"center\" >
		 <tr >

  <tr onMouseOver=\"this.bgColor='white'\" onMouseOut=\"this.bgColor='#EBEBEB'\" bgcolor=\"#FF339\" align=\"center\">
    <td width=\"200\" bgcolor=\"#EBEBEB\" height=\"30\"><font color=\"black\" >$row[3]</font></td>
     <td width=\"200\" bgcolor=\"#EBEBEB\" height=\"30\"><font color=\"black\" >$row[2]</font></td>
  
 

  
      </tr>
</table>";
	}

}}
}
?>



			<?php
			if (isset($_POST['veiw']))
{
			$mteja=$_POST['mteja'];
			

$q="select * from purchase where supplier!='cash' and supplier='$mteja'";
//$r=mysql_query($q);
if((mysql_num_rows(mysql_query($q)))==0) 
{
print"NO DETAILS FOUND";
}
else
{
$r=mysql_query($q);

print "<table width=\"800\" height=\"50\" border=\"0\" align=\"center\" >
		 <tr >
		 <td colspan=\"7\" align=\"center\"> CREDIT PURCHASE REPORT<hr></td>
		 </tr>

  <tr align=\"center\">
    <td width=\"200\" bgcolor=\"#666666\" height=\"30\"><font color=\"#FFFFFF\">ITEM NAME</font></td>
      <td width=\"200\" bgcolor=\"#666666\" height=\"30\"><font color=\"#FFFFFF\">DATE</font></td> 
      <td width=\"130\" bgcolor=\"#666666\" height=\"30\"><font color=\"#FFFFFF\">QUANTITY</font></td>
    <td width=\"120\" bgcolor=\"#666666\" height=\"30\"><font color=\"#FFFFFF\">PRICE</font></td>
    <td width=\"150\" bgcolor=\"#666666\" height=\"30\"><font color=\"#FFFFFF\">COST</font></td>
   

   
      </tr>
</table>";




if($r)
{

while($row=mysql_fetch_array($r))
	{
		print "<table width=\"800\" border=\"0\" align=\"center\" >
		 <tr >

  <tr align=\"center\" onMouseOver=\"this.bgColor='white'\" onMouseOut=\"this.bgColor='#EBEBEB'\" bgcolor=\"#FF339\">
    <td width=\"200\" bgcolor=\"#EBEBEB\" height=\"30\"><font color=\"black\" >$row[0]</font></td>
   <td width=\"200\" bgcolor=\"#EBEBEB\" height=\"30\"><font color=\"black\" >$row[5]</font></td>
    <td width=\"130\" bgcolor=\"#EBEBEB\" height=\"30\"><font color=\"black\" >$row[1]</font></td>
    <td width=\"120\" bgcolor=\"#EBEBEB\" height=\"30\"><font color=\"black\" >$row[2]</font></td>
  <td width=\"150\" bgcolor=\"#EBEBEB\" height=\"30\"><font color=\"black\" >$row[3]</font></td>
  


 

  
      </tr>
</table>";
	}
print "<table width=\"800\" height=\"30\" border=\"0\" align=\"center\" bgcolor=\"#666666\">
		 <tr >

  <tr >
    <td width=\"700\" bgcolor=\"#666666\"><font color=\"#FFFFFF\">TOTAL </font></td>
    
          <td width=\"100\" bgcolor=\"#666666\"><font color=\"#FFFFFF\">: $amount</font></td>
   

   
      </tr>
</table>";

}}
}
?></div>
</td>
		</tr>
	</table>
</div>

</body>

</html>