<html>
<?php
// database connection......
   include 'connection.php';


 // start session......... 
    session_start();
       
 ?> 
 
 
 
 


<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>New Page 1</title>
</head>

<body>

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

$query="INSERT INTO `expenditure` (`particular`,`cost`,`dt`,`month`,`voucher`,`mwezi`)VALUES ('$particular','$cost','$dt','$month','$voucher','$mwezi')";

@$result=mysql_query($query);
if($result)
	{
	echo "<font color=\"red\" size=\"4\">   Done</font>";		
}
}
?>


<div align="center">
	<p>&nbsp;</p>
</div>

</body>

</html>