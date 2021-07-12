<?php
// receive login form values
session_start();
if(!isset($_POST['set']))
	header("location:setdeals.php");
$pid =  $_POST['pid'];
$price=   $_POST['price'];

include("dbconnection.php");
   $query="select pcost from product where pid='$pid'";
   $rs=$con->query($query);
   $rw=$rs->fetch_array();
$p="insert into deals values($pid,$rw[0])";
$sq = "update product set pcost='$price' where pid='$pid'";
if($con->query($p) && $con->query($sq))
{
$succ="Deal set Successfully";
$_SESSION['succ']=$succ;
header("location:setdeals.php");
}
else{
	$err="Deal could not set";
$_SESSION['err']=$err;
header("location:setdeals.php");
}
?>