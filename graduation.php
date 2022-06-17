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
  <p id="pro">
      My name is Kusum Bisht.
      I have done B.D.S from Delhi and I have my own clinic and I am maintaing this buisness 4 yrs ago
      <br>
      You can contact me and can take an apppointment through this website
      <strong>
          If you will take an apppointment through this website then you will get 5 percent off for your dental problems .
</strong>
  </p>
</body>
<style>
    #pro{
        height:600px;
        font-size:50px;
        color:red;
        border:8px solid red;
        background-size: 1400px 600px;
        background-repeat:no-repeat;
    }
</style>