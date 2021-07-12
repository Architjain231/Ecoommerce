<div class="container-fluid" style="background:#131921">
   <nav class="navbar navbar-expand-md navbar-dark" style="background:#131921">
  <a href= "#" class="navbar-brand"><img src="https://cdn2.f-cdn.com/contestentries/1914758/2187765/60637d1034947_thumb900.jpg" height="60" width="90" style="border-radius:5px;"></a>
  <a href="#" class="navbar-brand text-white">DataRitz Technology</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <a href="#" class="navbar-brand text-Primary"><?php

   if(isset($_SESSION['email']))
  {
    $em=$_SESSION['email'];
    $q="select username,url from profile where email='$em' "; 
    $rs=$con->query($q);
    $rw=$rs->fetch_array();
  echo "Welcome"." ".$rw[0];
  }
  ?></a>
  
  <!--collapse menu in mobile-->
  <button class="navbar-toggler" data-toggle="collapse" data-target="#menu">
  <span class="navbar-toggler-icon"></span></button>

  <!-- search Bar -->
  <form class="form-inline  ml-5" >
    <input id="search-bar" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
	<!-- Designing list of navbar - Menu-->
	<div id="menu" class="collapse navbar-collapse ">
	<ul class="navbar-nav ml-auto" >
	  <li class="nav-item"><a href="
    <?php
     if(isset($_SESSION['email']))
     {
       echo " ./createprof.php";
     }
     else
     {
       echo " ./login.php";
     }
    ?>
    
    " class="nav-link">Profile |&nbsp;&nbsp;</a></li>
	  <li class="nav-item"><a href="
    <?php
    if(isset($_SESSION['email']))
    {
      echo " ./logout.php";
    }
    else
    {
      echo " ./login.php";
    }
    ?>
   " class="nav-link">
    <?php
    if(isset($_SESSION['email']))
    {
      echo "SignUp";
    }
    else
    {
      echo "SignIn";
    }
    ?>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
	</ul>
    </div>
    <a href= "createprof.php"  class="navbar-brand"><img src="<?php
    if(isset($_SESSION['email']))
    {
      echo $rw[1];
    }
    else{
      echo "./upload/user.svg";
    }
   ?>" height="35" width="34" style="border-radius:50%;"></a>
  </nav>
</div>
<div class="container-fluid" style="background:#232f3e">

  <nav class="navbar navbar-expand-md navbar-dark " style="background:#232f3e">
  
  <!--collapse menu in mobile-->
  <button class="navbar-toggler" data-toggle="collapse" data-target="#menu">
  <span class="navbar-toggler-icon"></span></button>

	<!-- Designing list of navbar - Menu-->
	<div id="meu" class="collapse navbar-collapse" >
	<ul class="navbar-nav mx-auto">
  <?php 
     $q="select category from category";
     $rs=$con->query($q);
     $c=0;
     while($rw=$rs->fetch_array())
     {
       $c=$c+1;
       ?>
	  <li class="nav-item"><a href="./productwise.php?cat=<?php echo $rw[0];?>" class="nav-link"> <?php echo $rw[0];?>&nbsp;&nbsp;</a></li>
    <?php 
     if($c>16)
     break;
  }?>
	 <li class="nav-item"><a href="./dealspage.php" class="nav-link"> Top Deals&nbsp;&nbsp;</a></li>
	</ul>
    </div>
  </nav>
   </div>