<?php
 session_start();
if(!isset($_POST['saveprofile']))
	header("location:createprof.php");
 
//------------------ Fetching form values from post method
// $pid = $_POST['pid'];
$address = $_POST['address'];
$contact = $_POST['contact'];
$password = $_POST['password'];
$username = $_POST['username'];

$f = $_FILES['file'];

$fname= $f['name'];

// light.jpg
$fext =explode('.',$fname);
$ftype =strtolower(end($fext));

$reqtype= array('jpeg', 'jpg' , 'png','svg');

if(in_array($ftype,$reqtype))
{
	
	$purl = 'upload/'.$fname;
	move_uploaded_file($f['tmp_name'],$purl);
	echo " file moved to our folder";
}	


//-----------------------------Db connection start--------
include("dbconnection.php");
//$hostname = "localhost";
//$un = "root";
//$p ="";
//$dbname= "myproject";
//$con = new mysqli($hostname,$un,$p,$dbname);
//------------------------------- insert query execution-----
$email=$_SESSION['email'];
if(strlen($password)==0)
{
	if(strlen($fname)<>0)
	{
		$purl='upload/'.$fname;
		$sq ="update profile set username='$username', address='$address', contact='$contact', url='$purl'  where email='$email'";
	}
	else
	{
		$purl='upload/'.$fname;
		$sq ="update profile set username='$username', address='$address', contact='$contact'  where email='$email'";
	}
	
}
else{
	$password=md5($password);
	// print_r($password);
	// die;
	if(strlen($fname)<>0)
	{
		$purl='upload/'.$fname;
		$sq ="update profile set username='$username', address='$address', contact='$contact' , url='$purl', password='$password' where email='$email'";
		$qw="update register set password='$password' where email='$email'";
		$qs="update login set password='$password' where email='$email'";
		$con->query($qw);
		$con->query($qs);
	}
	else
	{
		$purl='upload/'.$fname;
		$sq ="update profile set username='$username', address='$address', contact='$contact' ,  password='$password' where email='$email'";
		$qw="update register set password='$password' where email='$email'";
		$qs="update login set password='$password' where email='$email'";
		$con->query($qw);
		$con->query($qs);
	}

}


if($con->query($sq))
{    
	  
	   $succ="Profile updated";
	   $_SESSION['succ']=$succ;
	  header("location:createprof.php");
	
}
else
{
	$err="Profile not updated";
	$_SESSION['err']=$err;
    header("location:createprof.php");
	
}


?>

