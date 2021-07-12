<?php
 session_start();
if(!isset($_POST['s']))
	header("location:index.html");
 
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

$sq = "insert into product values('$pid','$pname','$pcategory','$pcost','$pdesc1','$pdesc2','$pdesc3','$purl')";

if($con->query($sq))
{    
	   
	  header("location:product.php");
	
}
else
	echo "Something went wrong...Try again";


?>