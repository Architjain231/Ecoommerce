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


  </style>
  <body>
   <div class="container-fluid">
   <table class="table">
  <thead class="thead-dark">
    <tr>   
 								
      <th scope="col">product id</th>
      <th scope="col">name</th>
      <th scope="col">category</th>
      <th scope="col">cost</th>
      <th scope="col">pdesc1</th>
      <th scope="col">pdesc2</th>
      <th scope="col">pdesc3</th>
      <th scope="col">purl</th>
    </tr>
  </thead>
  <tbody>
    
        <?php
        include("dbconnection.php");
        $prod=$_GET['pcat'];
        $q="select * from product where pcategory='$prod'";
        if($prod=="all")
        { $q="select * from product"; }
      
       if($rs=$con->query($q)){
       while($rw=$rs->fetch_array())
       {
        ?>
        <tr>
      <th scope="row"><?php echo $rw[0];?></th>
      <td><?php echo $rw[1];?></td>
      <td><?php echo $rw[2];?></td>
      <td><?php echo $rw[3];?></td>
      <th scope="row"><?php echo $rw[4];?></th>
      <td><?php echo $rw[5];?></td>
      <td><?php echo $rw[6];?></td>
      <td><img src="<?php echo $rw[7];?>" height="50px" width="50px" alt="..."></td>
      </tr>
       <?php }
       }
       else{
       echo "Some Error occured...Try again";
       }?>
   
   
  </tbody>
</table>

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