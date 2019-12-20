<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$name = $branches = $cutoff = $jobsoffered = $date = $package = "";
$name_err = $branches_err = $cutoff_err = $jobsoffered_err = $date_err = $package_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate name
    $input_name = trim($_POST["name"]);
    if(empty($input_name)){
        $name_err = "Please enter a name.";
    } elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $name_err = "Please enter a valid name.";
    } else{
        $name = $input_name;
    }
    
    // Validate address
    $input_branches = trim($_POST["branches"]);
    if(empty($input_branches)){
        $branches_err = "Please enter the branches.";     
    } else{
        $branches = $input_branches;
    }
    
    // Validate salary
    $input_cutoff= trim($_POST["cutoff"]);
    if(empty($input_cutoff)){
        $cutoff_err = "Please enter the cutoff.";     
    } else{
        $cutoff = $input_cutoff;
    }

$input_jobsoffered = trim($_POST["jobsoffered"]);
    if(empty($input_jobsoffered)){
        $jobsoffered_err = "Please enter the jobs offered.";     
    } else{
        $jobsoffered = $input_jobsoffered;
    }  

     $input_date = trim($_POST["date"]);
    if(empty($input_date)){
        $date_err = "Please enter date.";     
    } else{
        $date = $input_date;
    }  

     $input_package = trim($_POST["package"]);
    if(empty($input_package)){
        $package_err = "Please enter package.";     
}
    else{
        $package = $input_package;
    }
    // Check input errors before inserting in database
    if(empty($name_err) && empty($branches_err) && empty($cutoff_err) && empty($jobsoffered_err) && empty($date_err) && empty($package_err)){
        // Prepare an insert statement
        $sql = "INSERT INTO company (name, branches, cutoff, jobsoffered, date, package) VALUES (?, ?, ?, ?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssssss", $param_name, $param_branches, $param_cutoff, $param_jobsoffered, $param_date, $param_package);
            
            // Set parameters
            $param_name = $name;
            $param_branches = $branches;
            $param_cutoff = $cutoff;
            $param_jobsoffered = $jobsoffered;
            $param_date = $date;
            $param_package = $package;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                header("location: cindex.php");
                exit();
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Create Record</h2>
                    </div>
                    <p>Please fill this form and submit to add student record to the database.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" value="<?php echo $name; ?>">
                            <span class="help-block"><?php echo $name_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($branches_err)) ? 'has-error' : ''; ?>">
                            <label>branches</label>
                            <textarea name="branches" class="form-control"><?php echo $branches; ?></textarea>
                            <span class="help-block"><?php echo $branches_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($cutoff_err)) ? 'has-error' : ''; ?>">
                            <label>cutoff</label>
                            <input type="number" step="0.1" name="cutoff" class="form-control" value="<?php echo $cutoff; ?>">
                            <span class="help-block"><?php echo $cutoff_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($jobsoffered_err)) ? 'has-error' : ''; ?>">
                            <label>jobsoffered</label>
                            <input type="text" name="jobsoffered" class="form-control" value="<?php echo $jobsoffered?>">
                            <span class="help-block"><?php echo $jobsoffered_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($date_err)) ? 'has-error' : ''; ?>">
                            <label>Date</label>
                            <input type="date" name="date" class="form-control" value="><?php echo $date; ?>">
                            <span class="help-block"><?php echo $date_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($package_err)) ? 'has-error' : ''; ?>">
                            <label>Package</label>
                            <input type="number" name="package" class="form-control" value="><?php echo $package; ?>">
                            <span class="help-block"><?php echo $package_err;?></span>
                        </div>

                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>




