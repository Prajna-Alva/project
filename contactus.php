
<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
    <title>Contact-Us
        
    </title>
</head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
 
<link rel="stylesheet" href="styles.css" >
 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <style type="text/css">
body {
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #eee;
}
 
.form-contact {
  max-width: 330px;
  padding: 15px;
  margin: 0 auto;
}
.form-contact .form-contact-heading,
.form-contact .checkbox {
  margin-bottom: 10px;
}
.form-contact .checkbox {
  font-weight: normal;
}
.form-contact .form-control {
  position: relative;
  height: auto;
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
  padding: 10px;
  font-size: 16px;
}
.form-contact .form-control:focus {
  z-index: 2;
}
.form-contact input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
</style>
<div class="container">
    <div class="row">
      <form class="form-contact" method="POST">
        <h2 class="form-contact-heading">Contact Us</h2>
        <label for="inputName" class="sr-only">Name</label>
            <input type="name" name="name" id="inputName" class="form-control" placeholder="Your Name" required>
        <label for="inputEmail" class="sr-only">E-Mail</label>
            <input type="email" name="email" id="inputEmail" class="form-control" placeholder="name@email.com" required>
        <label for="inputSubject" class="sr-only">Subject</label>
            <input type="name" name="subject" id="inputSubject" class="form-control" placeholder="Your Subject Line" required>
        <label for="inputMessage" class="sr-only">Message</label>
            <textarea class="form-control" id="inputMessage" rows="3"></textarea>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Send</button>
      </div>
      </form>
</html>
      
<?php
$connection = mysqli_connect('localhost', 'root', '');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'placement');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}

if((isset($_POST['name']) && !empty($_POST['name']))
&& (isset($_POST['email']) && !empty($_POST['email']))){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $query = "INSERT INTO `contact` (name, email, message) VALUES ('$name', '$email', '$message')";
$result = mysqli_query($connection, $query);
    $to = "prajnaralva@gmail.com";
    $headers = "From : " . $email;
    
    if( mail($to, $subject, $message, $headers)){
        echo "E-Mail Sent successfully, we will get back to you soon.";
    }
}
?>