<html>
<?php
// database connection......
   include 'connection.php';


 // start session......... 
    session_start();
    $dt=date('d-M-Y');
       
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





<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>New Page 1</title>
</head>

<body>

<div align="center">

<table border="1" width="700" style="border-width: 0px">
	<tr>
		<td style="border-style: none; border-width: medium">&nbsp;</td>
		<td style="border-style: none; border-width: medium">&nbsp;</td>
		<td style="border-style: none; border-width: medium" width="117">
													
													
													
													<table border="1" width="61%" style="border-width: 0px">
														<tr>
															<td width="36" style="border-style: none; border-width: medium">
															<b>
															<font color="#808080">
															Print</font></b></td>
															<td style="border-style: none; border-width: medium">
															<a href="javascript:void(printSpecial())">
															<img border="0" src="../../../wamp/www/payrol-zct/images/printButton.png" width="16" height="16"></a></td>
														</tr>
													</table>
					</td>
	</tr>
</table>
</div>
<?php
		
if (isset($_POST['ingiza']))
{
$particular=$_POST['particular'];
$cost=$_POST['cost'];
$voucher=$_POST['voucher'];
$dt=$_POST['dt'];
$month=date('M-Y');
$mwezi=date('Y-m');
if(empty($_POST['cost']) and empty($_POST['particular']))
{
 print "<font color=\"red\" size=\"3\">Fill all the fields</font>";
}
elseif(empty($_POST['cost']))
{

 print "<font color=\"red\" size=\"3\">Fill Cost of item</font>";
}
elseif(empty($_POST['particular']))
{
 print "<font color=\"red\" size=\"3\">Fill particular of item</font>";
}

else

$query="INSERT INTO `bima`.`expenditure` (`particular`,`cost`,`dt`,`month`,`voucher`,`mwezi`)VALUES ('$particular','$cost','$dt','$month','$voucher','$mwezi')";

@$result=mysql_query($query);
if($result)
	{
	echo "<font color=\"red\" size=\"4\">   Done</font>";		
}
}
?>


</p>


<div align="center" id="printReady">
<table border="1" width="800" height="211" style="border-width: 0px">
	<tr>
		<td style="border-style: none; border-width: medium" height="42" bgcolor="#F2F2F2">
		<p align="center">
		<b>
		<font color="#990000" face="Segoe UI" size="4">&nbsp;Stock report as at <?php echo $dt ?></font></b></p>
		<hr noshade color="#C0C0C0" size="1">
								</td>
	</tr>
	<tr>
		<td style="border-style: none; border-width: medium" valign="top">
		
	
		
	<?php
$dt=date('d-M-Y');
$q="select * from stock ORDER BY product ASC";
//$r=mysql_query($q);
if((mysql_num_rows(mysql_query($q)))==0) 
{
print"No STOCK found";
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
        
    
      </tr>
      
</table><hr noshade color=\"#C0C0C0\" size=\"1\">";
$total=0;
if($r)
{

while($row=mysql_fetch_array($r))
	{
		print "<table width=\"800\" border=\"0\" align=\"center\">
		 <tr >

  <tr onMouseOver=\"this.bgColor='white'\" onMouseOut=\"this.bgColor='#EBEBEB'\" bgcolor=\"#EBEBEB\" >
 <td width=\"200\" bgcolor=\"#F2F2F2\" height=\"30\"><font color=\"#666666\">$row[0]</font></td>
    <td width=\"100\" bgcolor=\"#F2F2F2\"><font color=\"#666666\">$row[2]</font></td>
    <td width=\"100\" bgcolor=\"#F2F2F2\"><font color=\"#666666\">$row[1]</font></td>
   
      </tr>
      
</table>";


	}

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