<?php
$login=false;
$showerror=false;
if($_SERVER["REQUEST_METHOD"]=="POST")
{
  include'partials/connect.php';
  $username=$_POST["username"];
  $password=$_POST["password"];
    $sql="SELECT * FROM users WHERE username='$username'";
    $result=mysqli_query($conn,$sql);
    $num=mysqli_num_rows($result);
    if($num==1)
    {
      while($row=mysqli_fetch_assoc($result))
      {
     if(password_verify($password,$row['password']))
     {
       $login=true;
       session_start();
       $_SESSION['loggedin'] =true;
       $_SESSION['username'] =$username;
       header("location: welcome.php");
     }
      else{
        $showerror="Invalid Password";
    }
    
    }
  }
   
    else{
      $showerror="Invalid Password";
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

    <title>Login</title>
  </head>
  <body>
   <?php
   require 'partials/_nav.php';
   ?>
   <?php
   if($login)
   {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success</strong> You are logged inn.
    <button onclick="myfunction()" type="button" class="close" data-dismiss="alert" aria-label="Close">
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
       <h1 class=text-center >
           BISHT DENTAL CLINIC
       </h1>
       <form action="/LOGIN SYSTEM PROJECT/login.php" method="post">
  <div class="form-group">
    <label id="user" for="username">Username</label>
    <input type="username" class="form-control" id="username" name="username" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label id="user" for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>


  <button type="submit" class="btn btn-primary">Login</button>
</form>
   </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<style>
  h1{
    color:red;
  }
    body{
 background-image: url("prope.jpeg");
 background-repeat: no-repeat;
 background-size: 1400px 600px;
}
#user{
    color:red;
    font-weight: bold;
  }
</style>
  </body>
</html>