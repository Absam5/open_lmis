<?php
// database connection......
   include 'connection.php';
   // start session......... 
    session_start();
 $shop=$_SESSION['user'];

   
$bidhaa=$_POST['bidhaa'];
$bei=$_POST['bei'];
$idadi=$_POST['idadi'];
$cost=$idadi*$bei;
$supplier="cash";
$dt=date('Y-m-d');

$q="select * from stock where product='$bidhaa' and shop='$shop'";
$r=mysql_query($q);

	while($row=mysql_fetch_row($r))
	{
	
	$quantity=$row[2];
	}
	
	
	

$query="INSERT INTO `purchase` (`product`,`quantity`,`price`,`cost`,`supplier`,`date`,`shop`)VALUES ('$bidhaa','$idadi','$bei','$cost','$supplier','$dt','$shop')";
@$result=mysql_query($query);
if($result)
{	
$newquantity=$quantity+$idadi;
$up="update stock set quantity='$newquantity' where product='$bidhaa' and shop='$shop'";
 @$res=mysql_query($up);
 print"<font color=\"red\" size=\"4\" align=\"center\">PURCHASE COMPLETED |<br> $idadi unit of $bidhaa added ..!</font>";

}


?>

