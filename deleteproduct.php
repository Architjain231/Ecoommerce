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
      }
      .cont
      {
          height:100vh;
          width:100vw;
         display:flex;
         justify-content:center;
         align-items:center;
      }
      .center
      {
          width:600px;
          height:400px;
      }
  </style>
  <body>
   <div class="cont ">
       <div class="center shadow p-3 mb-5 bg-white rounded mt-4">
       <form action="deleteproductsave.php" method="POST" onsubmit="return valid()">
  <div class="form-group">
    <label for="exampleInputEmail1">Product ID</label>
    <input type="number" class="form-control" id="input" name="pid" aria-describedby="emailHelp">
    <label id="mess" class="form-text text-muted" style="color:red;"></label>
  </div>
  <p style="color:red;"><?php if(isset($_SESSION['err'])) echo $_SESSION['err'];
                              					  ?>  </p>
  <p style="color:green;"><?php if(isset($_SESSION['succ'])) echo $_SESSION['succ'];
                                session_destroy();						  ?>  </p>
  <button type="submit" class="btn btn-primary">Delete</button>
</form>
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
<script>
    $(document).ready(function(){
     
    })
    function valid()
    {
        var inp=document.getElementById("input").value;
        if(inp.length==0)
        {

           var ele=document.getElementById("mess").innerHTML="Input field can't be empty";
            return false;
        }
        return true;
    }
</script>

  </body>
</html>