<?php
 session_start();
if(!isset($_POST['s']))
	header("location:index.html");
 
//------------------ Fetching form values from post method
// $pid = $_POST['pid'];
$pname = $_POST['pname'];
$pcategory = $_POST['pcategory'];
$pcost = $_POST['pcost'];
$pdesc1 = $_POST['pdesc1'];
$pdesc2 = $_POST['pdesc2'];
$pdesc3 = $_POST['pdesc3'];
$f = $_FILES['file'];
$fname= $f['name'];
// light.jpg
$fext =explode('.',$fname);
$ftype =strtolower(end($fext));

$reqtype= array('jpeg', 'jpg' , 'png','svg');
print_r($f['tmp_name']);

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

$sq = "insert into product(	pname,pcategory,pcost ,	pdesc1 ,pdesc2 ,pdesc3, purl ) values('$pname','$pcategory','$pcost','$pdesc1','$pdesc2','$pdesc3','$purl')";

if($con->query($sq))
{    
	   $q="insert into category(category) values('$pcategory')";
	   $con->query($q);
	   $succ="Product added Successfully";
	   $_SESSION['succ']=$succ;
	  header("location:addproduct.php");
	
}
else
{
	$succ="Product added Successfully";
	$err="Product not added";
	$_SESSION['err']=$err;
	header("location:addproduct.php");
	
}


?>

