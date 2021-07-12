<?php
// receive login form values
session_start();
if(!isset($_POST['login']))
	header("location:login.php");
$email =  $_POST['email'];
$password=   $_POST['password'];
$passs=md5($password);
include("dbconnection.php");

$sq = "select email from login where  email='$email' and password='$passs'";

$rs=$con->query($sq);
while($rw=$rs->fetch_array())
{$c=$c+1;}
if($c==1)
{
	$_SESSION['email']=  $email; 
	header("location:home.php");
}
else
{   
    $msg="Invalid User!!!!";
	$_SESSION['err']=$msg;
	header("location:login.php");
// 	header("location:index.php");
//
 }




?>