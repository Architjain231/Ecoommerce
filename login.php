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
    	<link rel="stylesheet" type="text/css" href="../css/style.css">
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
      span
      {
        font-size:3rem;
       color:yellow;
      }
  </style>
  <body>
   <div class="container">
       <div class="row">
           <div class="col-md-3"></div>
           <div class="col-md-6 ">
          
            <form style="margin-top:100px" action="loginsave.php" method="POST" onsubmit="return check1()">
            <h1 ><span>
            Login</span></h1>
                <!-- <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label><br>
                  <i class="fas fa-user" style="float:left;"></i>
                  <input type="email" placeholder="username" name="email" class="form-control" id="email" aria-describedby="emailHelp" autocomplete="off">
                  <i class="fas fa-check-circle"></i><i class="fas fa-exclamation-circle"></i>
							<img src="../img/user.svg">
                  <small id="lb1" class="form-text text-muted"></small>
                </div> -->
                <!-- <div class="form-group"> -->
                  <!-- <label for="exampleInputPassword1">Password</label><br>
                
                  <input type="password" placeholder="password" name="password" class="form-control" id="password">
                  <i class="fas fa-check-circle"></i><i class="fas fa-exclamation-circle"></i>
							<img src="../img/pass.svg"> -->
              <!-- <div class="input" >
							<input placeholder="Password" id="p" type="password" name="lpassword" autocomplete="off">
							<i class="fas fa-check-circle"></i><i class="fas fa-exclamation-circle"></i>
							<img src="../img/pass.svg">
						</div> -->
            <div class="input">
							<input placeholder="Email" id="email" type="text" name="email" autocomplete="off">
							<img src="../img/user.svg">
              
						</div>
            <small id="lb1" class="form-text text-muted"></small>
						<div class="input">
							<input placeholder="Password" id="password" type="password"  name="password" autocomplete="off">
							
							<img src="../img/pass.svg">

						</div>
                  <small id="lb2" class="form-text text-muted"></small>
                <!-- </div> --><a href="register.php">New user? Signup</a>
                <div class="form-group form-check">
                  <input type="checkbox" class="form-check-input " id="exampleCheck1">
                  <label class="form-check-label " for="exampleCheck1">Remember me</label>
                </div>
                <p id="login_label"></p>
                <p style="color:red;"><?php if(isset($_SESSION['err'])) echo $_SESSION['err'];
                                 session_destroy();						  ?>  </p>
                <button type="submit" class="btn btn-primary mr-5" name="login">login</button>
              </form>
           
           </div>
           <div class="col-md-3"></div>
       </div>
   </div>

   <script>
     function check1()
{ 
		var lb1=document.getElementById("lb1").innerHTML;
	  var lb2=document.getElementById("lb2").innerHTML;
		var email=document.getElementById("email").value;
		var pass=document.getElementById("password").value;

	if(lb1.length!=0||lb2.length!=0)
	{
	  document.getElementById("login_label").innerHTML="First Validate input Fields";
	  return false;
	}
	else if(email.length==0||pass.length==0)
	{
	  document.getElementById("login_label").innerHTML="Input Fields must not be empty";
    return false;
	}
	else{
	  return true;
	}
}
   </script>








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
		$(document).ready(function () {
			$("#email").on("blur", function () {
				var a = $(this).val().trim();
				var valid = 0;
				if (a.indexOf('@') < 3 || a.length - a.lastIndexOf('.') <= 2 || a.indexOf('.') == -1 || Math.abs(a.lastIndexOf('.') - a.lastIndexOf('@')) < 4) {
					document.getElementById("lb1").innerHTML = "Please enter a valid email";

				}
				else {
					document.getElementById("lb1").innerHTML = "";

				}

			});

			$("#password").on("blur", function () {
				var pass = $(this).val().trim();
				if (pass.length < 4) {
					document.getElementById("lb2").innerHTML = "Atleast 4 character long";
				}
				else {
					document.getElementById("lb2").innerHTML = "";
				}
			})

		});
	</script>
  </body>
</html>