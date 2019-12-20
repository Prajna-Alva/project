<?php
session_start();
?>
<html>
<head>
<title>ADMIN PAGE</title>
<style>
body{
background-image:url("Information-technology-sector-jobs-in-india.jpg");
background-repeat: no-repeat;
background-size: cover; 
margin: auto;
color: white}
</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<h2 ALIGN="CENTER"><b><u></u></b></h2>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {width: 500px ; font-family: Arial, Helvetica, sans-serif; margin: auto;}

input[type=text], input[type=password] {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  margin: auto;

}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: auto;
  cursor: pointer;
  width: 30%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

.container {
  padding: 16px;
}

span.password {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.password {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 50%;
  }
}
</style>
</head>
<body>

<h2>Reset Password</h2>

<form action="adminhome.php" method="post">

  <div class="container">
    <div class="form-group">
    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>
<br>
<br>
    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
        <br>
        <br>
        <label for="confirm_password"><b>Confirm Password</b></label>
    <input type="password" placeholder="confirm_password" name="confirm_password" required>
    <br><br>
    <div class="form-group">
                <input type="submit" class="btn btn-primary btn-lg" value="Submit">
            </div>
   
  </div>
</div>
 <a href="adminhome.php"><button type="button" class="btn btn-danger">Cancel</button>
</form>

</body>
</html>


<!-- <script language="javascript">
function check(yajnalogin)
{

if(yajnalogin.userid.value ==value && form.password.value ==value)
{
return true;
}
else
{
alert("Error Password or Username")
return false;
}
}
</script> -->

<?php
$conn=mysqli_connect('localhost','root','','placement');
if (isset($_POST['Login']))  {
$username=$_POST['username'];
$password=$_POST['password'];
$confirm_password=$_POST['confirm_password'];
if($password==$confirm_password)
{
$sql=mysqli_query($conn,"UPDATE register SET password = ? WHERE id = ?");
$cnt=mysqli_num_rows($sql);
if($cnt>0)
{
    //$_SESSION['adminname']=$adminname;
    echo "<script>alert('Success');window.location='adminhome.php';</script>";

}
else
{
echo"<script>alert('failed');window.location='adminreset.php';</script>";

}
}
else
{ 
    echo"error";}
}
?>
</body>
</html>
