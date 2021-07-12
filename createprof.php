<?php
session_start();
if(!isset($_SESSION['email']))
{
  header("location:login.php");
}
include("dbconnection.php");
$em=$_SESSION['email'];
$q="select email,contact,address,password,username,	url	 from profile where email='$em'";
$rs=$con->query($q);
$rw=$rs->fetch_array();
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
    /* .btn{
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
      } */
  </style>
  <body>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
<div class="row flex-lg-nowrap">
  <!-- <div class="col-12 col-lg-auto mb-3" style="width: 200px;">
    <div class="card p-3">
      <div class="e-navlist e-navlist--active-bg">
        <ul class="nav">
          <li class="nav-item"><a class="nav-link px-2 active" href="#"><i class="fa fa-fw fa-bar-chart mr-1"></i><span>Overview</span></a></li>
          <li class="nav-item"><a class="nav-link px-2" href="https://www.bootdey.com/snippets/view/bs4-crud-users" target="__blank"><i class="fa fa-fw fa-th mr-1"></i><span>CRUD</span></a></li>
          <li class="nav-item"><a class="nav-link px-2" href="https://www.bootdey.com/snippets/view/bs4-edit-profile-page" target="__blank"><i class="fa fa-fw fa-cog mr-1"></i><span>Settings</span></a></li>
        </ul>
      </div>
    </div>
  </div> -->

  <div class="col">
    <div class="row">
      <div class="col mb-3">
        <div class="card">
          <div class="card-body">
            <div class="e-profile">
              <div class="row">
                <div class="col-12 col-sm-auto mb-3">
                  <div class="mx-auto" style="width: 140px;">
                    <img src="<?php echo $rw[5];?>" alt="" style="border-radius:20px;" class="img-fluid">
                  </div>
                </div>
                <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                  <div class="text-center text-sm-left mb-2 mb-sm-0">
                    <h4 class="pt-sm-2 pb-1 mb-0 text-nowrap"><?php echo $rw[4];?></h4>
                  
                    <div class="text-muted"><small>Believe in you</small></div>
                    <div class="mt-2">
                    <form class="form" action="profilesave.php" method="POST" enctype="multipart/form-data">
                      <input class="btn btn-primary" type="file" name="file" >
                        <i class="fa fa-fw fa-camera"></i>
                        <span>Edit Photo</span>
                      </button>
                    </div>
                  </div>
                  <div class="text-center text-sm-right">
                  <a class="btn btn-dark" type="submit" href="logout.php">Log out</a>
                    <span class="badge badge-secondary">Good Customers</span>
                    <div class="text-muted"><small>Easy Shopping</small></div>
                  </div>
                </div>
              </div>
              <ul class="nav nav-tabs">
                <li class="nav-item"><a href="" class="active nav-link">Settings</a></li>
              </ul>
              <div class="tab-content pt-3">
                <div class="tab-pane active">
                 
                    <div class="row">
                      <div class="col">
                        <div class="row">
                         
                          <div class="col">
                            <div class="form-group">
                              <label>Username</label>
                              <input class="form-control" type="text" name="username" placeholder="user name" value="<?php echo $rw[4];?>">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>Email</label>
                              <input class="form-control" type="text"  placeholder="<?php echo $rw[0];?>">
                            </div>
                          </div>
                        </div>
                       
                      </div>
                    </div>
                    <div class="row mt-3">
                      <div class="col-12 col-sm-6 mb-3">
                        <div class="mb-2"><b>Change Password</b></div>
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>Current Password</label>
                              <input class="form-control" type="text" placeholder="••••••"   value="••••••" >
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>New Password</label>
                              <input class="form-control" type="password" name="password" placeholder="new password">
                            </div>
                          </div>
                        </div>
                       
  <p style="color:red;"><?php if(isset($_SESSION['err'])) echo $_SESSION['err'];
                              					  ?>  </p>
  <p style="color:green;"><?php if(isset($_SESSION['succ'])) echo $_SESSION['succ'];
                                // session_destroy();						  ?>  </p>
                      </div>
                      <div class="col-12 col-sm-5 offset-sm-1 mb-3">
                      <div class="mb-2"><b>Address & Contact Details</b></div>
                      <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>Permanent Address</label>
                              <input class="form-control" type="text" name="address" placeholder="address" value="<?php echo $rw[2];?>">
                            </div>
                          </div>
                      </div>                      
                      <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>Contact</label>
                              <input class="form-control" type="text" name="contact" placeholder="contact" value="<?php echo $rw[1];?>">
                            </div>
                          </div>
                      </div>
                    
                    <div class="row">
                      <div class="col d-flex justify-content-end">
                        <button class="btn btn-primary" type="submit" name="saveprofile">Save Profile</button>
                      </div>
                    </div>
                    </div>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- <div class="col-12 col-md-3 mb-3">
        <div class="card mb-3">
          <div class="card-body">
            <div class="px-xl-3">
              <button class="btn btn-block btn-secondary">
                <i class="fa fa-sign-out"></i>
                <span>Logout</span>
              </button>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <h6 class="card-title font-weight-bold">Support</h6>
            <p class="card-text">Get fast, free help from our friendly assistants.</p>
            <button type="button" class="btn btn-primary">Contact Us</button>
          </div>
        </div>
      </div> -->
    </div>

  </div>
</div>
</div>

  </body>
</html>