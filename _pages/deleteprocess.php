<?php
// database connection......
   include 'connection.php';
   // start session......... 
    session_start();
 $shop=$_SESSION['user'];
$id=$_POST['id']; 
$kiwango=$_POST['quantity'];   
$q="select * from purchase where id='$id'";
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
		$supplier=$row[4];
		$date=$row[5];
		$id=$row[7];
}
}
}

$q="select * from stock where product='$product' and shop='$shop'";
$r=mysql_query($q);

	while($row=mysql_fetch_row($r))
	{
	
	$quantity=$row[2];
	}
	
$newquantity=$quantity-$kiwango;
$up="update stock set quantity='$newquantity' where product='$product' and shop='$shop'";
 @$res=mysql_query($up);
 
 $q="delete from purchase where id='$id'";
$p=mysql_query($q);
echo "DONE";




?>

