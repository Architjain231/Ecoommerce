<?php
 session_start();
if(!isset($_POST['pid']))
	header("location:updateproduct.php");
 
//------------------ Fetching form values from post method
$pid = $_POST['pid'];
$pname = $_POST['pname'];
$pcategory = $_POST['pcategory'];
$pcost = $_POST['pcost'];
$pdesc1 = $_POST['pdesc1'];
$pdesc2 = $_POST['pdesc2'];
$pdesc3 = $_POST['pdesc3'];
$purl = $_POST['purl'];

//-----------------------------Db connection start--------
include("dbconnection.php");
//$hostname = "localhost";
//$un = "root";
//$p ="";
//$dbname= "myproject";
//$con = new mysqli($hostname,$un,$p,$dbname);
//------------------------------- insert query execution-----

$sq = "UPDATE product SET pname='$pname',pcategory='$pcategory',pcost='$pcost',pdesc1='$pdesc1',pdesc2='$pdesc2',pdesc3='$pdesc3',purl='$purl' WHERE pid='$pid'";

if($con->query($sq))
{    
	$succ="Product updated Successfully";
	$_SESSION['succ']=$succ;
	  header("location:updateproduct.php");
	
}
else{
$err="Product not updated";
$_SESSION['err']=$err;
header("location:updateproduct.php");
}
?>