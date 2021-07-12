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
    .btn{
        width:80%;
        background:none;
        outline:none;
        color:greenyellow;
        margin-left:60px;
      }
  </style>
  <body>
  <script src="https://kit.fontawesome.com/45d01987fe.js" crossorigin="anonymous"></script>
   <div class="container">
       <div class="row">
           <div class="col-md-2"></div>
           <div class="col-md-8 ">
          
           <form action="addproductsave.php" method="POST" enctype="multipart/form-data">
               <h1 class="text-center"><i class="fas fa-shopping-cart mr-3"></i>Cart</h1>
               <!-- <div class="form-group">
    <label for="exampleFormControlInput1">Product ID</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="pid" placeholder="product id">
  </div> -->
  <div class="form-group">
    <label for="exampleFormControlInput1">Product Name</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="pname" placeholder="product name">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Category</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="pcategory" placeholder="category">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Cost</label>
    <input type="number" class="form-control" id="exampleFormControlInput1" name="pcost" placeholder="cost">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Description 1</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="pdesc1" placeholder="something about product">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Description 2</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="pdesc2" placeholder="something about product">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Description 3</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="pdesc3" placeholder="something about product">
  </div>
  <div class="form-group">
   <label> Upload Image</label>
   <input type="file" name="file" class="form-control" placeholder="image" required>
  </div>



  <p style="color:red;"><?php if(isset($_SESSION['err'])) echo $_SESSION['err'];
                              					  ?>  </p>
  <p style="color:green;"><?php if(isset($_SESSION['succ'])) echo $_SESSION['succ'];
                                session_destroy();						  ?>  </p>



  <button type="submit" class="btn btn-success mt-3">Add</button>
</form>
           
           </div>
           <div class="col-md-2"></div>
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