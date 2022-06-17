<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true)
{
  header("location: login.php");
  exit;
}
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Welcome--<?php echo $_SESSION['username'];?> to Bisht Dental Clinic website</title>
  </head>
  <body>
   <?php
   require 'partials/_nav.php'
   ?>


<div class="container">
  <div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Wellcome ! <?php
echo $_SESSION['username'];
  ?> to BISHT DENTAL CLINIC wesbite.This is a website on experienced and intelligent freelancers who can develop beautiful and amazing websites for you and makes you feel happy. <br><br></h4>
  <p>Congratulations! Welcome to BISHT DENTAL CLINIC .You have successfully logged in as <?php
  echo $_SESSION['username'];
  ?> 
  Make Sure to logout otherwise there are chances to get your account hacked.<br> If you want to give your feedback to us the click on this link <a href="feedback.php">Feedback</a></p>
  <hr>
  <p id="pa">Contact me using this link=<a href="contact.php">Contact me</a></p>
  <strong>
  You can ask my adress through my email given in contact.
  </strong>
  <p class="mb-0">Whenever you want to be logout <a href="logout.php">use this link</a> </p>
</div> 

  </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
    <style>
    body{
       background-image:url("prope.jpeg");
     }
     #pa
     {
       font-weight:bold;
     }
     </style>
  </body>
</html>