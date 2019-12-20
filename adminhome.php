<?php
// Initialize the session
session_start();
 if(!isset($_SESSION))
{
    echo("<script LANGUAGE ='JavaScript'>
        window.alert('Registered Succesfully');
        window.location.href='adminlogin.php';
        </script>");
}
// Check if the user is logged in, if not then redirect him to login page

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap 4 Full Width Jumbotron</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style>
    .bs-example{
        margin: 20px;        
    }
</style>
</head>
<body>
<div class="bs-example">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top mt-5">
        <a href="#" class="navbar-brand">Details</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="homepage.php" class="nav-item nav-link-active">Home</a>
                <a href="cindex.php" class="nav-item nav-link">Company</a>
                
                <a href="index.php" class="nav-item nav-link">Students</a>
            </div>
            <form class="form-inline ml-auto">
                <input type="text" class="form-control mr-sm-2" placeholder="Search">
                <button type="submit" class="btn btn-outline-light">Search</button>
            </form>
            </div>
            <div class="navbar-nav ml-auto">
                <a href="adminlogout.php" class="nav-item nav-link">Logout</a>
        </div>
    </nav>
    </body>
    <body>
    <div class="bs-example">    
    <div class="jumbotron jumbotron-fluid">
    <div class="container">
   <div class="page-header">
        <h1>Hello,</b>:)</h1>
    </div>
    <style>
    body {
    background: url("IMG_20190713_114218753.jpg") no-repeat center fixed ;
   background-size:cover;


         }
    </style>
    <p class="lead">placement management system</p>
     <p><a href="http://www.ajiet.edu.in/" target="_blank" class="btn btn-primary btn-lg">college site</a>
     <a href="adminreset.php" class="btn btn-warning">Reset Your Password</a></p>
     </div>
    </div>
</div>

 
    </body>    
</html>         