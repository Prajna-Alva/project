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
<body>
<div class="bs-example">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a href="#" class="navbar-brand">Details</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="file:///C:/Users/Rajesh/Documents/DBMS/homepage1.html" class="nav-item nav-link">Home</a>
                <a href="#" class="nav-item nav-link">Profile</a>
                 <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Messages</a>
                    <div class="dropdown-menu">
                        <a href="#" class="dropdown-item">Inbox</a>
                        <a href="#" class="dropdown-item">Drafts</a>
                        <a href="#" class="dropdown-item">Sent Items</a>
                        <div class="dropdown-divider"></div>
                        <a href="#"class="dropdown-item">Trash</a>
                    </div>
                </li>
                <a href="#" class="nav-item nav-link">Report</a>
                <a href="file:///C:/Users/Rajesh/Documents/DBMS/allstudent.html" class="nav-item nav-link">All Students</a>
                <a href="file:///C:/Users/Rajesh/Documents/DBMS/branchwiseplacement.html" class="nav-item nav-link">Branch Report</a>
            </div>
            <form class="form-inline ml-auto">
                <input type="text" class="form-control mr-sm-2" placeholder="Search">
                <button type="submit" class="btn btn-outline-light">Search</button>
            </form>
            </div>
         
            <div class="navbar-nav ml-auto">
                <a href="#" class="nav-item nav-link">Logout</a>
        </div>
    </nav>
</div>
</body>
</html>                            