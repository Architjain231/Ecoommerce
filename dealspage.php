<?php
session_start();
include("dbconnection.php");
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
      <body>
      {
          margin:0;
          padding:0;
          box-sizing:border-box;
      }
      .carousel-item img {
        width: 100%;
        height: 40vh;
    }
    .center-div
    {
        width:100%;
        overflow-y:hidden;
        overflow-x:scroll;
       display:flex;
    }
#search-bar
{
    border-radius:10px;
   
    border:2px solid gray;
}
#imp
{
    width:100%;
        overflow-y:hidden;
        overflow-x:scroll;
       display:flex;
}
#imp::-webkit-scrollbar
    {
        overflow:hidden;
        display:none;

    }
    footer{
     background: #000;
     margin-bottom:0px;
    }
    .jumbotron
    {
        margin-bottom:0;
    }
    .card {
        box-shadow: 1px 1px 4px rgba(252, 244, 244, 0.4);
        transition:all 0.6s linear; 
        /* background-color:rgba(252,244,244,0.4); */
    }
    .card:hover{
        transform:scale(1.1);
    }
  </style>
  <body class="bg-light">
  <script src="https://kit.fontawesome.com/45d01987fe.js" crossorigin="anonymous"></script>
   <?php
   include("navbar.php");
   ?>
 
   <h2 class="text-center my-5">Top Fashion Deals</h2>


<div class="container-fluid mt-5">
<div class="row">
  <?php 
     $q="select pid,cost from deals";
     $rs=$con->query($q);
     while($rw=$rs->fetch_array())
     {
          $qr="select * from product where pid='$rw[0]'";
          $rss=$con->query($qr);
          $rww=$rss->fetch_array();
       ?>


  <div class="col-md-3">
  <a href="./particualproduct.php?pid=<?php echo $rww[0];?>" class="card-link ">
 <div class="card mb-5" style="width: 14rem; margin-left:15px; margin-right:15px; padding:10px">
 <!-- <h3 class="card-title text-center "><?php echo $rw[0];?></h3> -->
  <img src="<?php echo $rww[7];?>" class="card-img-top" width="100px" height="150px"  alt="...">
  <div class="card-body">
  <h6 class="card-title text-center text-muted"><?php echo $rww[1];?></h6>
 <del> <h6 class="card-title text-center text-muted" style="font-size:0.8rem; margin-bottom:-1px;"><i class="fas fa-rupee-sign  text-center"></i> <?php echo $rw[1];?></h6></del>
   <h6 class="card-title text-center text-muted"><i class="fas fa-rupee-sign"></i> <?php echo $rww[3];?></h6>
    <a href="./particualproduct.php?pid=<?php echo $rww[0];?>" class="card-link ml-5" style="font-size:17px;">Buy now</a>




    
  </div>
</div>
     </a>
  </div>



       <?php
     }
  ?>  
  </div>
</div>

<?php
 include("footer.php");
?>

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