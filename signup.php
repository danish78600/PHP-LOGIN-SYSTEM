<?php
$showalert=false;
$showerror=false;
if($_SERVER['REQUEST_METHOD']=='POST')
{
  include'partials/connect.php';
  $username=$_POST['username'];
  $password=$_POST['password'];
  $cpassword=$_POST['password1'];
  // $exists=false;
  $esql="SELECT * FROM `users` WHERE username='$username'";
  $result=mysqli_query($conn,$esql);
  $numr=mysqli_num_rows($result);
  if($numr>0)
  {
    // $exists=true;
    $showerror=" username alredy exists.";
  }
  else{
    // $exists=false;
    if($password==$cpassword)
  {
    $hash=password_hash($password, PASSWORD_DEFAULT);//It is a one way method which converts password into hash for security.
    $sql="INSERT INTO `users` (`username`, `password`, `dt`) VALUES ('$username', '$hash', current_timestamp())";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
     $showalert=true;
      
    }
   
    }
    else{
      $showerror="Passwords do not match .";
  }
}
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Signup</title>
  </head>
  <body>
   <?php
   require 'partials/_nav.php';
   ?>
   <?php
   if($showalert)
   {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success</strong> Your account is registered and you can login now.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
   }
   if($showerror)
   {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error</strong> ' . $showerror . '
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
   }


   ?>
   <div class="container">
       <h1 class=text-center>
           BISHT DENTAL CLINIC
       </h1>
       <form action="/LOGIN SYSTEM PROJECT/signup.php" method="post">
  <div class="form-group">
    <label id="user" for="username">Username</label>
    <input type="text" maxlength="10" class="form-control" id="username" name="username" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label id="user" for="password">Password</label>
    <input type="password"  maxlength="10"  class="form-control" id="password" name="password">
    
  </div>

  <div class="form-group">
    <label id="user" for="password1">Confirm Password</label>
    <small id="emailHelp" class="form-text text-muted">make sure to type the same password</small>
    <input type="password"  maxlength="10"  class="form-control" id="password1" name="password1">
  </div>


  <button type="submit" class="btn btn-primary">Singup</button>
</form>
   </div>

 



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
  </body>
  <style>
     h1{
    color:red;
  }
  #user{
    color:red;
    font-weight: bold;
  }
   body{
 background-image: url("prope.jpeg");
 background-repeat: no-repeat;
 background-size: 1400px 600px;
}
  </style>
</html>