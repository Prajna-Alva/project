<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: slogin.php");
    exit;
}
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
                <a href="aboutus.php" class="nav-item nav-link">About Us</a>
            
                <a href="trail.php" class="nav-item nav-link">Students</a>
                <a href="ctrail.php" class="nav-item nav-link">Company</a>
            </div>
            <form class="navbar-form form-inline navbar-right ml-auto">
            <div class="input-group search-box">
                <input type="text" class="form-control">
                <span class="input-group-btn">
                    <button type="button" class="btn btn-primary"><span>Search</span></button>
                </span>
            </div>
        </form>     
            </div>
            <div class="navbar-nav ml-auto">
                <a href="logout.php" class="nav-item nav-link">Logout</a>
        </div>
    </nav>
    </body>
    <body>
    <div class="bs-example">    
    <div class="jumbotron jumbotron-fluid">
    <div class="container">
   <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>:) Welcome to our site.</h1>
    </div>
    <style>
    body {
    background: url("IMG_20190713_114218753.jpg") no-repeat center fixed ;
   background-size:cover;


         }
    </style>
    <p class="lead">you will know who got placed in which company. student details are available here.know about campus jobs and companies visiting campus for placement.</p>
     <p><a href="http://www.ajiet.edu.in/" target="_blank" class="btn btn-primary btn-lg">know about college</a>
     <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a></p>
     </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <h2>Interview Questions</h2>
            <p>you will find interesting interview questions and their answers.you can attend test which is MCQ.</p>
            <p><a href="interview.php" target="_blank" class="btn btn-success">Learn More »</a></p>
        </div>
        <div class="col-md-4">
            <h2>companies Visited</h2>
            <p>Here you can see the number of companies visited the college and their names.its cut off and various round held during placement.</p>
            <p><a href="scompany.php" target="_blank" class="btn btn-success">Learn More »</a></p>
        </div>
        <div class="col-md-4">
            <h2>Companies visiting</h2>
            <p>Know the companies visiting college in upcomming days and its cut off . register to attend the placement in the given link</p>
            <p><a href="#" target="_blank" class="btn btn-success">Learn More »</a></p>
        </div>
        <div class="bs-example">
    <blockquote class="blockquote">
        <p class="mb-0">The world is a dangerous place to live; not because of the people who are evil, but because of the people who don't do anything about it.</p>
        <footer class="blockquote-footer">by <cite>Albert Einstein</cite></footer>
    </blockquote>
</div>
    </div>
    <hr>
    <footer>
        <div class="row">
            <div class="col-md-6">
                    </div>
            <div class="col-md-6 text-md-right">
                <a href="#" class="text-dark">Terms of Use</a> 
                <span class="text-muted mx-2">|</span> 
                <a href="#" class="text-dark">Privacy Policy</a>
            </div>
        </div>
    </footer>
</div> 
    </body>    
</html>                            