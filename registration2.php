<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Supported HTML Form Controls in Bootstrap 4</title>
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
<script>
// Self-executing function
(function() {
    'use strict';
    window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);
})();
</script>
</head>
<body>
<div class="bs-example">
    <h1 class="border-bottom pb-3 mb-4">Registration Form</h1>
    <form class="needs-validation" action="registration2.php" method="post" >
        <div class="form-group row">
            <label class="col-sm-3 col-form-label" for="firstName">First Name:</label>
            <div class="col-sm-9">
    <input type="text" class="form-control" placeholder="Enter first Name" name="firstName" required>
        </div>
    </div>
        <div class="form-group row">
            <label class="col-sm-3 col-form-label" for="lastName">Last Name:</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="lastName" id="lastName" placeholder="Last Name" required>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-3 col-form-label" for="email">Email Address:</label>
            <div class="col-sm-9">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email Address" required>
            </div>
        </div>
         <div class="form-group row">
            <label class="col-sm-3 col-form-label" for="usn">usn:</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="usn" id="usn" placeholder="usn" required>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-3 col-form-label" for="phoneNumber">Phone Number:</label>
            <div class="col-sm-9">
                <input type="" class="form-control" name="phoneNumber" id="phoneNumber" placeholder="Phone Number" required>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-3 col-form-label" for="date">Date of birth:</label>
             <div class="col-sm-9">
     <input type="date" class="form-control" placeholder="date" name="date">
 </div>
</div>
        <div class="form-group row">
            <label class="col-sm-3 col-form-label" for="postalAddress">College Name</label>
            <div class="col-sm-9">
            <textarea rows="2" class="form-control" name="collegeName" id="collegeName" placeholder="College Name" required></textarea>
            </div>
        </div>
        <div class="form group row">
            <label class="col-sm-3 col-form-label" for="Semester">Semester</label>
        <div class="col-sm-3">
            <select class="custom select" name="Semester">
                <option>Semester</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
            </select>
        </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Gender:</label>
            <div class="col-sm-9 mt-2">
                <label class="mb-0 mr-3">
                    <input type="radio" class="mr-1" name="gender" value="Male"> Male
                </label>
                <label class="mb-0 mr-3">
                    <input type="radio" class="mr-1" name="gender" value="Female"> Female
                </label>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-9 offset-sm-3">
                <label class="checkbox-inline">
                    <input type="checkbox" class="mr-1" value="agree"> I agree to the <a href="#">Terms and Conditions</a>.
                </label>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-9 offset-sm-3">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-secondary" value="Reset">
            </div>
        </div>

    </form>
</div>
</body>
</html>                            
<?php
$link = mysqli_connect("localhost", "root", "", "placement");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$firstName = mysqli_real_escape_string($link, $_REQUEST['firstName']);
$lastName = mysqli_real_escape_string($link, $_REQUEST['lastName']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$usn = mysqli_real_escape_string($link, $_REQUEST['usn']);
$phoneNumber = mysqli_real_escape_string($link, $_REQUEST['phoneNumber']);
$date = mysqli_real_escape_string($link, $_REQUEST['date']);
$collegeName = mysqli_real_escape_string($link, $_REQUEST['collegeName']);
$Semester = mysqli_real_escape_string($link, $_REQUEST['Semester']);
$gender = mysqli_real_escape_string($link, $_REQUEST['gender']);
$sql = "INSERT INTO registration2 (firstName,lastName,email,usn,phoneNumber,date,collegeName,Semester,gender) VALUES ('$firstName','$lastName','$email','$usn','$phoneNumber','$date','$collegeName','$Semester','$gender')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
mysqli_close($link);
?>


