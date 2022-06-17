<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Feedback</title>
</head>
<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true)
{
  header("location: login.php");
  exit;
}
?>

<?php
   require 'partials/_nav.php';
?>
<body>
<h1 >
  BISHT DENTAL CLINIC
</h1>

<center>
<form action="feedback.php"  method="post" >
  <div class="form-group">
    <label id="l" for="exampleInputEmail1">Name</label>
    <input name="name" type="text" class="form-control"  aria-describedby="emailHelp" placeholder="Enter your name">
 
  </div>
  <div class="form-group">
    <label id="l" for="exampleInputPassword1">Feedback</label>
    <input name="message" type="text" class="form-control" id="message" placeholder="Enter your feedback">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</center>

<?php
  if($_SERVER['REQUEST_METHOD']=='POST')
  {
    $name=$_POST['name'];
    $mess=$_POST['message'];

$servername = "localhost";
$username = "root";
$password = "";
$database="feed";
$conn=mysqli_connect($servername,$username,$password,$database);

 if(!$conn){
   echo "Your connection was lost";
 }
else{
   $sql="INSERT INTO `feed` (`name`,`message`) VALUES ('$name', '$mess')";
   $result=mysqli_query($conn,$sql);
  
   if($result){
   echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>SUCCESS!!</strong>Your information is successfully submited to us WELL DONE!!
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
    }
   else{
      echo "Your result was lost";
    }
}  
  }
  ?>
<style>

body {
 background-image: url("prope.jpeg");
}

#message{
  height:200px;
}
h1{
  text-align: center;
  color:red;

}
</style>
</body>
</html>
