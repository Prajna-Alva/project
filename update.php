<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$name = $branch = $sem = $cgpa = $selected = $usn = "";
$name_err = $branch_err = $sem_err = $cgpa_err = $selected_err = $usn_err= "";
 
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
    $input_branch = trim($_POST["branch"]);
    if(empty($input_branch)){
        $branch_err = "Please enter branch.";     
    } else{
        $branch = $input_branch;
    }
    
    // Validate salary
    $input_sem = trim($_POST["sem"]);
    if(empty($input_sem)){
        $sem_err = "Please enter the sem.";     
    } elseif(!ctype_digit($input_sem)){
        $sem_err = "Please enter a positive integer value.";
    } else{
        $sem = $input_sem;
    }

    $input_cgpa = trim($_POST["cgpa"]);
    if(empty($input_cgpa)){
        $cgpa_err = "Please enter the cgpa.";    
    } else{
        $cgpa = $input_cgpa;
    }

    $input_selected = trim($_POST["selected"]);
    if(empty($input_selected)){
        $selected_err = "Please enter company.";     
    } else{
        $selected = $input_selected;
    }
    
    $input_usn = trim($_POST["usn"]);
    if(empty($input_usn)){
        $usn_err = "Please enter usn.";     
    } else{
        $usn = $input_usn;
    }
    // Check input errors before inserting in database
    if(empty($name_err) && empty($branch_err) && empty($sem_err) && empty($cgpa_err) && empty($selected_err) && empty($usn_err)){
        // Prepare an update statement
        $sql = "UPDATE student SET name=?, branch=?, sem=?, cgpa=?, selected=?, usn=? WHERE id=?";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssssssi", $param_name, $param_branch, $param_sem, $param_cgpa, $param_selected, $param_usn, $param_id);
            
            // Set parameters
            $param_name = $name;
            $param_branch = $branch;
            $param_sem = $sem;
             $param_cgpa = $cgpa;
            $param_selected = $selected;
            $param_usn = $usn;
            $param_id = $id;

            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records updated successfully. Redirect to landing page
                header("location: index.php");
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
        $sql = "SELECT * FROM student WHERE id = ?";
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
                    $branch = $row["branch"];
                    $sem = $row["sem"];
                    $cgpa = $row["cgpa"];
                    $selected = $row["selected"];
                    $usn = $row["usn"];
                } else{
                    // URL doesn't contain valid id. Redirect to error page
                    header("location: error.php");
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
        header("location: error.php");
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
                        <div class="form-group <?php echo (!empty($branch_err)) ? 'has-error' : ''; ?>">
                            <label>branch</label>
                            <textarea name="branch" class="form-control"><?php echo $branch; ?></textarea>
                            <span class="help-block"><?php echo $branch_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($sem_err)) ? 'has-error' : ''; ?>">
                            <label>Sem</label>
                            <input type="number" name="sem" class="form-control" value="<?php echo $sem; ?>">
                            <span class="help-block"><?php echo $sem_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($cgpa_err)) ? 'has-error' : ''; ?>">
                            <label>Cgpa</label>
                            <input type="number" name="cgpa" class="form-control" value="<?php echo $cgpa; ?>">
                            <span class="help-block"><?php echo $cgpa_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($selected_err)) ? 'has-error' : ''; ?>">
                            <label>selected</label>
                            <textarea name="selected" class="form-control"><?php echo $selected; ?></textarea>
                            <span class="help-block"><?php echo $selected_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($usn_err)) ? 'has-error' : ''; ?>">
                            <label>usn</label>
                            <textarea name="usn" class="form-control"><?php echo $usn; ?></textarea>
                            <span class="help-block"><?php echo $usn_err;?></span>
                        </div>
                        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>