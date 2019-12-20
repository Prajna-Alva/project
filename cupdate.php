<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$name = $branches = $cutoff = $jobsoffered = $date = $package = "";
$name_err = $branches_err = $cutoff_err = $jobsoffered_err = $date_err = $package_err= "";
 
// Processing form data when form is submitted
if(isset($_POST["id"]) && !empty($_POST["id"])){
    // Get hidden input value
    $id = $_POST["id"];
    
    // Validate name
    $input_name = trim($_POST["name"]);
    if(empty($input_name)){
        $name_err = "Please enter a name.";
    } elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $name_err = "Please enter a valid name.";
    } else{
        $name = $input_name;
    }
    
    // Validate address address
    $input_branches = trim($_POST["branches"]);
    if(empty($input_branches)){
        $branches_err = "Please enter branches.";     
    } else{
        $branches = $input_branches;
    }
    
    // Validate salary
    $input_cutoff = trim($_POST["cutoff"]);
    if(empty($input_cutoff)){
        $cutoff_err = "Please enter the sem.";     
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
    } else{
        $package = $input_package;
    }
    // Check input errors before inserting in database
    if(empty($name_err) && empty($branches_err) && empty($cutoff_err) && empty($jobsoffered_err) && empty($date_err) && empty($package_err)){
        // Prepare an update statement
        $sql = "UPDATE company SET name=?, branches=?, cutoff=?, jobsoffered=?, date=?, package=? WHERE id=?";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssssssi", $param_name, $param_branches, $param_cutoff, $param_jobsoffered, $param_date, $param_package, $param_id);
            
            // Set parameters
            $param_name = $name;
            $param_branches = $branches;
            $param_cutoff = $cutoff;
             $param_jobsoffered = $jobsoffered;
            $param_date = $date;
            $param_package = $package;
            $param_id = $id;

            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records updated successfully. Redirect to landing page
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
} else{
    // Check existence of id parameter before processing further
    if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
        // Get URL parameter
        $id =  trim($_GET["id"]);
        
        // Prepare a select statement
        $sql = "SELECT * FROM company WHERE id = ?";
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "i", $param_id);
            
            // Set parameters
            $param_id = $id;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                $result = mysqli_stmt_get_result($stmt);
    
                if(mysqli_num_rows($result) == 1){
                    /* Fetch result row as an associative array. Since the result set
                    contains only one row, we don't need to use while loop */
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    
                    // Retrieve individual field value
                    $name = $row["name"];
                    $branches = $row["branches"];
                    $cutoff = $row["cutoff"];
                    $jobsoffered = $row["jobsoffered"];
                    $date = $row["date"];
                    $package = $row["package"];
                } else{
                    // URL doesn't contain valid id. Redirect to error page
                    header("location: cerror.php");
                    exit();
                }
                
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
        
        // Close connection
        mysqli_close($link);
    }  else{
        // URL doesn't contain id parameter. Redirect to error page
        header("location: cerror.php");
        exit();
    }
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Record</title>
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
                        <h2>Update Record</h2>
                    </div>
                    <p>Please edit the input values and submit to update the record.</p>
                    <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
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
                            <input type="number" name="cutoff" class="form-control" value="<?php echo $cutoff; ?>">
                            <span class="help-block"><?php echo $cutoff_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($jobsoffered_err)) ? 'has-error' : ''; ?>">
                            <label>jobsoffered</label>
                            <input type="text" name="jobsoffered" class="form-control" value="<?php echo $jobsoffered; ?>">
                            <span class="help-block"><?php echo $jobsoffered_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($date_err)) ? 'has-error' : ''; ?>">
                            <label>Date</label>
                            <input type="date" name="date" class="form-control"><?php echo $date; ?></textarea>
                            <span class="help-block"><?php echo $date_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($package_err)) ? 'has-error' : ''; ?>">
                            <label>package</label>
                            <textarea name="package" class="form-control"><?php echo $package; ?></textarea>
                            <span class="help-block"><?php echo $package_err;?></span>
                        </div>
                        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="cindex.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>