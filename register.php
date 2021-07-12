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
      body{
          margin:0;
          padding:0;
          box-sizing:border-box;
      }
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
               
            <form style="margin-top:60px" action="registersave.php" method="POST" onsubmit="return check2();" >
                <h1 class="text-center mb-5"><span>SignUp</span></h1>


                <div class="inputs">
						<div class="input">
							<input placeholder="Email" id="one" type="mail" name="remail" autocomplete="off">
							<i class="fas fa-check-circle"></i><i class="fas fa-exclamation-circle"></i>
							<img src="../img/mail.svg">
						</div>
            <small id="lb2" class="form-text text-muted"></small>
						<div class="input">
							<input placeholder="Username" id="uname" type="text" name="rusername" autocomplete="off">
							<i class="fas fa-check-circle"></i><i class="fas fa-exclamation-circle"></i>
							<img src="../img/user.svg">
						</div>
            <small id="lb1" class="form-text text-muted"></small>
						<div class="input">
							<input placeholder="Password" id="pass" type="password"  name="rpassword" autocomplete="off">
							<i class="fas fa-check-circle"></i><i class="fas fa-exclamation-circle"></i>
							<img src="../img/pass.svg">
						</div>
            <small id="lb3" class="form-text text-muted"></small>
						<small id="signup-label"></small>
					
					</div>
				
					
						<small id="signup-label"></small>




                <!-- <div class="form-group">
                  <label for="exampleInputEmail1">User Name</label><br>
         
                  <input type="text" placeholder="username" class="form-control" id="uname" name="rusername" aria-describedby="emailHelp">
                  <small id="lb1" class="form-text text-muted"></small>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label><br>
           
                  <input type="email" placeholder="username" class="form-control" id="one" name="remail" aria-describedby="emailHelp">
                  
                  <small id="lb2" class="form-text text-muted"></small>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label><br>
          
                  <input type="password" placeholder="password" class="form-control" name="rpassword" id="pass">
                  <small id="lb3" class="form-text text-muted"></small>
                </div>
            
                <div class="form-group form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Remember me</label>
                </div>-->
                <p id="signup_label"></p>
                
                <button type="submit" class="btn btn-success mr-5" >Register</button> 
              </form>
           
           </div>
           <div class="col-md-3"></div>
       </div>
   </div>

   <script>
		
    function check2()
    { var lb1=document.getElementById("lb1").innerHTML;
        var lb2=document.getElementById("lb2").innerHTML;
        var lb3=document.getElementById("lb3").innerHTML;
        var one=document.getElementById("one").value;
        var uname=document.getElementById("uname").value;
        var pass=document.getElementById("pass").value;
    
      if(lb1.length!=0||lb2.length!=0||lb3.length!=0)
      {
        document.getElementById("signup_label").innerHTML="First Validate input Fields";
        return false;
      }
      else if(one.length==0||uname.length==0||pass.length==0)
      {
        document.getElementById("signup_label").innerHTML="Input Fields must not be empty";
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
			$("#one").on("blur", function () {
				var a = $(this).val().trim();
				var valid = 0;
				if (a.indexOf('@') < 3 || a.length - a.lastIndexOf('.') <= 2 || a.indexOf('.') == -1 || Math.abs(a.lastIndexOf('.') - a.lastIndexOf('@')) < 4) {
					document.getElementById("lb2").innerHTML = "Please enter a valid email";

				}
				else {
					document.getElementById("lb2").innerHTML = "";

				}

			});

			$("#pass").on("blur", function () {
				var pass = $(this).val().trim();
				if (pass.length < 4) {

					document.getElementById("lb3").innerHTML = "Atleast 4 character long";
				}
				else {

					document.getElementById("lb3").innerHTML = "";
				}
			})
			$("#uname").on("blur", function () {
				var uname = $(this).val().trim();
				if (uname.length < 4) {
					document.getElementById("lb1").innerHTML = "Atleast 4 character long";
				}
				else {
					document.getElementById("lb1").innerHTML = "";
				}
			})
    });
    </script>
  </body>
</html>