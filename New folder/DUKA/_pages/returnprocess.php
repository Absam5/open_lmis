<?php
// database connection......
   include 'connection.php';
   // start session......... 
    session_start();
 $shop=$_SESSION['user'];
$id=$_POST['id']; 
$kiwango=$_POST['quantity'];   
$q="select * from sales where id='$id'";
//$r=mysql_query($q);
if((mysql_num_rows(mysql_query($q)))==0) 
{

}
else
{
$r=mysql_query($q);

if($r)
{

while($row=mysql_fetch_array($r))
	{
		$product=$row[0];
		$idadi=$row[1];
		$price=$row[2];
		$cost=$row[3];
		$discount=$row[4];
		$customer=$row[5];
		$date=$row[6];
		$id=$row[8];
}
}
}
if($idadi==$kiwango)
{
$q="select * from stock where product='$product' and shop='$shop'";
$r=mysql_query($q);

	while($row=mysql_fetch_row($r))
	{
	
	$quantity=$row[2];
	}
	
$newquantity=$quantity+$idadi;
$up="update stock set quantity='$newquantity' where product='$product' and shop='$shop'";
 @$res=mysql_query($up);
 
 $q="delete from sales where id='$id'";
$p=mysql_query($q);
echo "DONE";
}
else
{
$q="select * from stock where product='$product' and shop='$shop'";
$r=mysql_query($q);

	while($row=mysql_fetch_row($r))
	{
	$stprice=$row[1];

	$quantity=$row[2];
	}
$newidadi=$idadi-$kiwango;
$newprice=$newidadi*$price;
$newquantity=$quantity+$kiwango;
$up="update stock set quantity='$newquantity' where product='$product' and shop='$shop'";
 @$res=mysql_query($up);
 
 $discount=$newidadi*($stprice-$price);	
$up1="update sales set quantity='$newidadi' , cost='$newprice', discount='$discount'  where id='$id'";
 @$res=mysql_query($up1);
;
echo "DONE";


}



?>

