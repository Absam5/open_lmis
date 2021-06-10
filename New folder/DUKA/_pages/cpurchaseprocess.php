<?php
// database connection......
   include 'connection.php';
   
   
$bidhaa=$_POST['bidhaa'];
$bei=$_POST['bei'];
$idadi=$_POST['idadi'];
$cost=$idadi*$bei;
$supplier=$_POST['mteja'];
$dt=date('Y-m-d');

$q="select * from stock where product='$bidhaa' ";
$r=mysql_query($q);

	while($row=mysql_fetch_row($r))
	{
	
	$quantity=$row[2];
	}
	
	$q="select * from creditor where name='$supplier' ";
$r=mysql_query($q);

	while($row=mysql_fetch_row($r))
	{
	$deni=$row[3];
		}
	
	



$query="INSERT INTO `purchase` (`product`,`quantity`,`price`,`cost`,`supplier`,`date`)VALUES ('$bidhaa','$idadi','$bei','$cost','$supplier','$dt')";
@$result=mysql_query($query);
if($result)
{	
$newquantity=$quantity+$idadi;
$up="update stock set quantity='$newquantity' where product='$bidhaa'";
 @$res=mysql_query($up);
 
$denijipya=$deni+$cost;
$up="update creditor set balance='$denijipya' where name='$supplier'";
 @$res=mysql_query($up);
 


print"<font color=\"red\" size=\"4\" align=\"center\">SALES COMPLETED |<br> $idadi unit of $bidhaa bought from $supplier with total cost of $cost/=  ..!</font>";
}



?>

