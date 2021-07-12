<?php
 session_start();
 
//------------------ Fetching form values from post method
$pid = $_POST['pid'];

//-----------------------------Db connection start--------
include("dbconnection.php");
//$hostname = "localhost";
//$un = "root";
//$p ="";
//$dbname= "myproject";
//$con = new mysqli($hostname,$un,$p,$dbname);
//------------------------------- insert query execution-----
$q="select * from product where pid='$pid'";
$sq = "delete from product where pid='$pid'";
$rs=$con->query($q);
if($rs->num_rows)
{    
    $con->query($sq);
   $msg="Product deleted successfully";
   $_SESSION['succ']=$msg;  
}
else
{
$msg="This product ID does not exits";
$_SESSION['err']=$msg;
}	
header("location:deleteproduct.php");
?>