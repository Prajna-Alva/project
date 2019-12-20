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
<title>Bootstrap 4 Navbar with Logo Image</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style type="text/css">
    .bs-example{
        margin: 20px;
    }
</style>
</head>
</style>
<body>
<div class="bs-example">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top mt-5">
        <a href="#" class="navbar-brand">Details</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="homepage.php" class="nav-item nav-link">Home</a>
                <a href="aboutus.php" class="nav-item nav-link-active">About Us</a>
            
                <a href="trail.php" class="nav-item nav-link">Students</a>
                <a href="ctrail.php" class="nav-item nav-link">Company</a>
            </div>
            <form class="form-inline ml-auto">
                <input type="text" class="form-control mr-sm-2" placeholder="Search">
                <button type="submit" class="btn btn-outline-light">Search</button>
            </form>
            </div>
            <div class="navbar-nav ml-auto">
                <a href="logout.php" class="nav-item nav-link">Logout</a>
        </div>
    </nav>
    </body>
    <style>
    body {
    background: url("IMG_20190713_114218753.jpg") no-repeat center fixed ;
   background-size:cover;


         }
    </style>
    
    <!-- Demo Content -->    
    <div class="container">
	<div class="jumbotron mt-4">
        	<h1>About Us</h1>
        	<p class="lead">this is placement management system</p>
    	</div>
        <p>
            we have created it so that it is useful for students to about companies visited and visiting,and also details of students who got selected in companies.so that you get updated about the placement information. we are in starting stage.we have to add more details to this like interview questions and related answers.
            
        </p>
</div>                           
</div>
</body>
</html>                            