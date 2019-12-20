<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: white;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f67888;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f67544;
  text-align: center;
}
</style>
</head>
<body>
<form action="registration2.php" method="post">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="text"><b>username</b></label>
    <input type="text" placeholder="Enter username" name="username" required>

            <input type="password" onkeypress="checkPass();" name="password" class="form-control" id="password" placeholder="Password" required>

        <input type="password" onkeypress="checkPass();" name="confirm_password" class="form-control" id="confirm_password" placeholder="Retype Password" required>
    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" class="registerbtn" name="Register" onclick="http://localhost/placement/registration2.php">Register</button>
  </div>
  
  <div class="container signin">
    <p>Already have an account? <a href="#">Sign in</a>.</p>
  </div>
</form>
</body>
</html>
<?php
$link = mysqli_connect("localhost", "root", "", "placement");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$username = mysqli_real_escape_string($link, $_REQUEST['username']);
$password = mysqli_real_escape_string($link, $_REQUEST['password']);
$confirm_password = mysqli_real_escape_string($link, $_REQUEST['confirm_password']);
if($password==$confirm_password)
{
  $query="select * from registration where username='$username'";
  $query_run= mysqli_query($link,$query);

  if (mysqli_num_rows($query_run)>1) {
     echo '<script type="text/javascript"> alert("user already exists")</script>';
   }
   else{
$sql = "INSERT INTO registration (username,password,confirm_password) VALUES ('$username','$password','$confirm_password')";
         if(mysqli_query($link, $sql)){
         echo "Records added successfully.";
           }
         else{
         echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
             }
         }
      
}
mysqli_close($link);
?>




