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
        transition:all 0.3s linear; 
        height:320px;
        padding:10px;
        /* background-color:rgba(252,244,244,0.4); */
    }
    .card:hover{
        transform:scale(1.1);
    }
    a:hover{
        text-decoration:none;
        color:black;
    }
    a:{
        text-decoration:none;
        color:black;
    }
  </style>
  <body class="bg-light">

  <script src="https://kit.fontawesome.com/45d01987fe.js" crossorigin="anonymous"></script>

  <?php
   include("navbar.php");
   ?>
 
   <!-- carousel -->
   <div id="carouselExampleCaptions" class="carousel slide carousel-fade mt-3" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://images.unsplash.com/photo-1416339684178-3a239570f315?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=967&q=80"
                    class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1416339684178-3a239570f315?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=967&q=80"
                    class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1416339684178-3a239570f315?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=967&q=80"
                    class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>





<div class="container-fluid mt-5">
<div class="row">
  <?php 
     $q="select category from category";
     $rs=$con->query($q);
     while($rw=$rs->fetch_array())
     {
       ?>
 <div class="col-md-3">
 <a href="./productwise.php?cat=<?php echo $rw[0];?>">
 <div class="card mb-5" style="width: 22rem;">
 <h3 class="card-title text-center" style="color:black;"><?php echo $rw[0];?></h3>
 
  <div class="card-body" style="display:flex; justify-content:center; align-items:center; flex-direction:column;">
  <img src="img1.jpg" class="card-img-top" height="200px"  alt="...">
    <a href="./productwise.php?cat=<?php echo $rw[0];?>" class="btn btn-primary mt-2">Go & Get</a>
  </div>
</div>
     </a>
  </div>
       <?php
     }
  ?>
 

 
</div>
</div>

<div class="container-fluid mt-5">
<div class="row">
  <div class="col-md-4">
  <a href="./dealspage.php">
  <div class="card" style="width:94%;">
 <h3 class="card-title text-center pl-3 pr-3"  style="color:black;">Top Deals</h3>
  
  <div class="card-body" style="display:flex; justify-content:center; align-items:center;  flex-direction:column;">
  <img src="img1.jpg" class="card-img-top" height="200px" alt="...">
    <a href="./dealspage.php" class="btn btn-primary mt-2 ">Go & Get</a>
  </div>
</div>
</a>
</div>

<div class="col-md-4">
<a href="./dealspage.php">
  <div class="card" style="width: 94%;">
 <h3 class="card-title text-center"  style="color:black;">Trending</h3>
 
  <div class="card-body" style="display:flex; justify-content:center; align-items:center;  flex-direction:column;">
  <img src="img1.jpg" class="card-img-top" height="200px" alt="...">
    <a href="./dealspage.php" class="btn btn-primary  mt-2">Go & Get</a>
  </div>
</div>
    </a>
</div>

<div class="col-md-4">
<a href="./dealspage.php" >
  <div class="card" style="width:94%;">
 <h3 class="card-title text-center"  style="color:black;">Today's fasion</h3>
  
  <div class="card-body" style="display:flex; justify-content:center; align-items:center;  flex-direction:column;">
  <img src="img1.jpg" class="card-img-top" height="200px" alt="...">
    <a href="./dealspage.php" class="btn btn-primary mt-2">Go & Get</a>
  </div>
</div>
</a>
</div>
</div>
</div>
<br>
<div class="container mt-5">
    <div class="row" id="imp" style="height:220px">
        <?php 
        $count=0;
        $q="select  * from product";
        $rs=$con->query($q);
        while($rw=$rs->fetch_array())
        {   $count=$count+1;?>
        <div style="height:170px;width:200px; margin-left:20px;">
        <img src="<?php echo $rw[7];?>" height="70%" width="100%"  style=" border-radius:10px" alt="...">
        <h6 class="text-muted ml-5 mt-2"><?php echo $rw[1];?></h6>
        <h6  class="text-muted ml-5"><i class="fas fa-rupee-sign"></i> <?php echo $rw[3];?></h6>
        <a href="./particualproduct.php?pid=<?php echo $rw[0];?>" class="card-link ml-5" style="font-size:20px;">Buy now</a>
        </div>
     <?php 
    if($count>4)
    break; 
    }
?>
    </div>
</div>


</div>

<footer>
    <div class="jumbotron bg-dark mt-5" style="opacity:0.6; color:gray;">
        <h2 class="text-center">This is the final Phenomena</h2>
        <div class="container">
        <div class="row gt-5" >
  <div class="col-sm-3 col-md-3 ">
    <div class="" style="background:transparent; box-shadow:none; border:none;">
      <div class="card-body">
        <h5 class="card-title">About</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        
      </div>
    </div>
  </div>
  <div class="col-sm-3 col-md-3">
    <div class="" style="background:transparent; box-shadow:none; border:none;">
      <div class="card-body">
        <h5 class="card-title">Contact</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        
      </div>
    </div>
  </div>
  <div class="col-sm-3 col-md-3">
    <div class="" style="background:transparent; box-shadow:none; border:none;">
      <div class="card-body">
        <h5 class="card-title">Know More</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        
      </div>
    </div>
  </div>
  <div class="col-sm-3 col-md-3">
    <div class="" style="background:transparent; box-shadow:none; border:none;">
      <div class="card-body">
        <h5 class="card-title">Explore</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        
      </div>
    </div>
  </div>
</div>
<div class="row " >
    <div class="col-sm-3 col-md-3 ">
      <div class="" style="background:transparent; box-shadow:none; border:none;">
        <div class="card-body">
          <h5 class="card-title">About</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          
        </div>
      </div>
    </div>
    <div class="col-sm-3 col-md-3">
      <div class="" style="background:transparent; box-shadow:none; border:none;">
        <div class="card-body">
          <h5 class="card-title">Contact</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          
        </div>
      </div>
    </div>
    <div class="col-sm-3 col-md-3">
      <div class="" style="background:transparent; box-shadow:none; border:none;">
        <div class="card-body">
          <h5 class="card-title">Know More</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          
        </div>
      </div>
    </div>
    <div class="col-sm-3 col-md-3">
      <div class="" style="background:transparent; box-shadow:none; border:none;">
        <div class="card-body">
          <h5 class="card-title">Explore</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          
        </div>
      </div>
    </div>
    </div>
    <hr style="background-color:black; height:1px; opacity:0.5;"/>
</div>   
      </div>
    </footer>

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