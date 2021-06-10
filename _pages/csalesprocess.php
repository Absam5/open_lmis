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
$customer=$_POST['mteja'];
$dt=date('Y-m-d');

$q="select * from stock where product='$bidhaa' and shop='$shop' ";
$r=mysql_query($q);

	while($row=mysql_fetch_row($r))
	{
	$price=$row[1];
	$quantity=$row[2];
	}
	
	$q="select * from debtor where name='$customer' and shop='$shop'";
$r=mysql_query($q);

	while($row=mysql_fetch_row($r))
	{
	$deni=$row[3];
		}
	
$discount=$idadi*($price-$bei);	


if($quantity>$idadi)
{

$query="INSERT INTO `sales` (`product`,`quantity`,`price`,`cost`,`discount`,`customer`,`date`,`shop`)VALUES ('$bidhaa','$idadi','$bei','$cost','$discount','$customer','$dt','$shop')";
@$result=mysql_query($query);
if($result)
{	
$newquantity=$quantity-$idadi;
$up="update stock set quantity='$newquantity' where product='$bidhaa' and shop='$shop'";
 @$res=mysql_query($up);
 
$denijipya=$deni+$cost;
$up="update debtor set balance='$denijipya' where name='$customer' and shop='$shop'";
 @$res=mysql_query($up);
 


print"<font color=\"red\" size=\"4\" align=\"center\">SALES COMPLETED |<br> $idadi unit of $bidhaa sold to $customer with total cost of $cost/= and $discount/= as discount ..!</font>";
}
}
else
{
print"<font color=\"red\" size=\"4\" align=\"center\">OUT OF STOCK (Only $quantity unit(s) of $bidhaa remain)..!</font>";

}


?>

