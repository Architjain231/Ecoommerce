<?php
session_start();
 if(!isset($_SESSION['email']))
 header("location:login.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>

  <style>
      .image
      {
          height:400px;
          width:300px;
          <?php 
           include("dbconnection.php");
           $email=$_SESSION['email'];
          $rs=$con->query("select purl from profile where email='$email'");
          $rw=$rs->fetch_array();
          ?>
          margin-top:100px;
        
      }
  </style>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-md-4">          
            <!-- <img src="" alt="" height="" width=""> -->
            <!-- <div class="image img-fluid img-thumbnail shadow p-3 mb-5 bg-white rounded cicular--landscape"  src="../img/usericon.png"  style="border-radius:50% 50%">
     
            </div> -->
            <img class="image img-fluid img-thumbnail shadow p-3 mb-5 bg-white rounded cicular--landscape" src="<?php echo $rw[0];?>"   alt="...">
            <form action="createprof.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="file" class="form-control" placeholder="image" required>
            <input type="submit" value="upload">
            </form> 
            </div>
            <div class="col-md-8 ">
            <?php
            include("dbconnection.php");
            $username=$_SESSION['un'];
            $q="select *from register where email='$username'";
            $rs=$con->query($q);
            $rw=$rs->fetch_array();
            ?>
            <h1 class="mb-5">Welcome <?php echo $rw[1];?></h1>
             <h4 class="mb-3">User Name:&nbsp;&nbsp;<?php echo $rw[1]?></h4>
             <h4 class="mb-3">Email:&nbsp;&nbsp;<?php echo $rw[0]?></h4>
             <!-- <h4 class="mb-3">Password:&nbsp;&nbsp;<?php echo $rw[2]?></h4> -->
             <h4 class="mb-3">Address:&nbsp;&nbsp;<?php echo $rw[3]?></h4>
             <h4 class="mb-3">Contact:&nbsp;&nbsp;<?php echo $rw[4]?></h4>
             <a href="logout.php" class="btn btn-success" >Log out</a>
             <a href="../home.php" class="btn btn-primary" >Home</a>
            </div>
        </div>
        <h1 class="text-center mb-5">Donations History</h1>

        <table class="table">
  <thead class="table-dark">
  <tr>
  <td>SNo</td>
  <td>Donation</td>
  </tr>
  </thead>
  <tbody>
  <?php
  
  $q="select * from description where email='$username'";
  $rs=$con->query($q);
  $c=1;
  while($rw=$rs->fetch_array())
  {
    ?><tr>
    <td><?php echo $c;
    $c=$c+1;
    ?></td>
    <td><?php echo $rw[1];?></td></tr>
    <?php
  }
  ?>
  </tbody>
</table>


    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>
