<?php
 session_start();
if(!isset($_POST['remail']))
	header("location:register.php");
 
//------------------ Fetching form values from post method
$remail = $_POST['remail'];
$rusername = $_POST['rusername'];
$rpassword = $_POST['rpassword'];

//-----------------------------Db connection start--------
include("dbconnection.php");
//$hostname = "localhost";
//$un = "root";
//$p ="";
//$dbname= "myproject";
//$con = new mysqli($hostname,$un,$p,$dbname);
//------------------------------- insert query execution-----
$rpass = md5($rpassword); 
$sq = "insert into register values('$remail','$rusername','$rpass')";

if($con->query($sq))
{    

	 // message digest 128 bit based RSA also 
	$s1= "insert into login(email,password) values('$remail','$rpass')";	
	$url="./upload/user.svg";
	$s2= "insert into profile(email,password,username,url) values('$remail','$rpass','$rusername','$url')";	
       $con->query($s1); 
       $con->query($s2);    
       $_SESSION['username']=  $rusername;	   
	  header("location:login.php");
	
}
else
	{echo "Something went wrong...Try again";}


?>