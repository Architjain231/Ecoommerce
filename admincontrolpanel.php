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
      .body
      {
          margin:0;
          padding:0;
          box-sizing:border-box;
          font-family:sans-serif;
      }

.btn
{
    height:200px;
    width:200px;
    background:transparent;
    border:6px solid gray;
    font-size:2.2rem;
    padding-top:30px;
}
.btn:hover
{
    background:gray;
    color:white;
}
.btnn:hover
{
    background:gray;
    color:white;
}
#main-div
{
    height:100vh;
    width:100vw;
    display:flex; 
    justify-content:center;
    align-items:center;
    flex-direction:column;
}
.center
{
    display:flex;
    justify-content:center;
    align-items:center;
}
.btnn
{
  height:150px;
    width:400px;
    background:transparent;
    border:6px solid gray;
    font-size:2.9rem;
    padding-top:30px;
}
h1
{
margin-bottom:100px;
font-size:60px;
}
  </style>
  <body>
   <div class="container-fluid" id="main-div" >
       <h1 class="text-center mb-5">Control Panel</h1>
       <div class="center" class="bg-dark">
         <a class="btn mx-5" href="addproduct.php">Add Product</a>
         <a class="btn mx-5" href="showproduct.php">Show Products</a>
         <a class="btn mx-5" href="deleteproduct.php">Delete Product</a>
         <a class="btn mx-5" href="updateproduct.php">Update Product</a>
         <a class="btn mx-5" href="setdeals.php">Set Deals</a>
       </div>
       <a class="btn btnn mx-5 my-5" href="home.php">Home</a>
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