<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>Hello, world!</title>
  </head>
  <style>

  </style>
  <body>
  <script src="https://kit.fontawesome.com/45d01987fe.js" crossorigin="anonymous"></script>
  <?php
include("dbconnection.php");
$pid = $_GET['pid'];
$s = "select pname,	pcategory	,pcost	,pdesc1	,pdesc2	,pdesc3	,purl from product where pid ='$pid'";

$rs= $con->query($s);

$rww = $rs->fetch_array();
?>
  <?php
   include("navbar.php");
   ?>

  <div class="container-fluid">
<div class="row" style="margin-top:50px;margin-left:10px;">
<div class="col-md-6">

<img src="<?php echo $rww[6];?>" class="img-fluid img-thumbnail" height="450px" width="300px" alt="..." >


</div>
<div class="col-md-6">

<h1 class="text-center mb-5 mt-3"><?php  echo $rww[0]; ?></h1>  
<p> Product Cat : <?php  echo $rww[1]; ?> </p>   

<p> Product Price : <?php  echo $rww[2]; ?> </p>   

<p> Product Des1 : <?php  echo $rww[3]; ?> </p>   
<p> Product Des2 : <?php  echo $rww[4]; ?> </p>   
<p> Product Des3 :  <?php  echo $rww[5]; ?></p>  
<div style="display:flex; justify-content:center; align-items:center; flex-direction:row;">
<a href="./showcart.php?pid=<?php echo $rw[3];?>" class="card-link btn btn-success" style="display:flex; justify-content:center; align-items:center;  width:20%;"><i class="fas fa-shopping-cart mr-2"></i>  Add to Cart</a>
<a href="./particualproduct.php?pid=<?php echo $rw[3];?>" class="card-link btn btn-primary mb-2" style="display:flex; justify-content:center; align-items:center; " ><i class="fas fa-store-alt mr-2"></i>Buy now</a>
</div>
</div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->

  </body>
</html>