<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, otherwise redirect to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
 
// Include config file
require_once "../database/config.php";
 
// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$FirstName = $LastName = $EmailAddress = $ContactNo = $Privilege = $Status = $CreatedBy = $CreatedDateTime = "" ;
$username_err = $password_err = $confirm_password_err = $FirstName_err = $LastName_err = $EmailAddress_err = $ContactNo_err = $Privilege_err = $Status_err = $CreatedBy_err = $CreatedDateTime_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT loginid FROM login WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Validate First Name
    if(empty(trim($_POST["FirstName"]))){
        $FirstName_err = "Please enter a First Name.";     
    
    } else{
        $FirstName = trim($_POST["FirstName"]);
    }

    // Validate Last Name
    if(empty(trim($_POST["LastName"]))){
        $LastName_err = "Please enter a Last Name.";     
    
    } else{
        $LastName = trim($_POST["LastName"]);
    }

    // Validate Email Address
    if(empty(trim($_POST["EmailAddress"]))){
        $EmailAddress_err = "Please enter a Email Address.";     
    
    } else{
        $EmailAddress = trim($_POST["EmailAddress"]);
    }

    // Validate ContactNo
    if(empty(trim($_POST["ContactNo"]))){
        $ContactNo_err = "Please enter a Contact No.";     
    
    } else{
        $ContactNo = trim($_POST["ContactNo"]);
    }

    // Validate Privilege
    if(empty(trim($_POST["Privilege"]))){
        $Privilege_err = "Please Select User Privilege.";     
    
    } else{
        $Privilege = trim($_POST["Privilege"]);
    }

    // Validate Status
    if(empty(trim($_POST["Status"]))){
        $Status_err = "Please select User Status.";     
    
    } else{
        $Status = trim($_POST["Status"]);
    }

    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO login (username, password, FirstName, LastName, EmailAddress, ContactNo, Privilege, Status, CreatedBy, CreatedDateTime) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssssssssss",
                                                $param_username, 
                                                $param_password,
                                                $param_FirstName,
                                                $param_LastName,
                                                $param_EmailAddress,
                                                $param_ContactNo,
                                                $param_Privilege,
                                                $param_Status,
                                                $param_CreatedBy,
                                                $param_CreatedDateTime);
            
            // Set parameters
            

            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            //$param_password = $password;
            $param_FirstName = $FirstName;
            $param_LastName = $LastName;
            $param_EmailAddress = $EmailAddress;
            $param_ContactNo = $ContactNo;
            $param_Privilege = $Privilege;
            $param_Status = $Status;
            $param_CreatedBy = "WebUser";
            $param_CreatedDateTime = date('Y-m-d H:i:s');
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login.php");
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">

    <head>

        <title>Register User</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="main.css">
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        
       
    </head>
    
    <body>
    
        <nav class="navbar navbar-expand-md">
            <a class="navbar-brand" href="../index.php">IMPERIUM REX</a>
            <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="main-navigation">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="User_Account.php">User Accounts</a>
                    </li>
                    
                    
                </ul>
            </div>
        </nav>

        <div class="container features">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    
                </div> 

                <div class="col-lg-4 col-md-4 col-sm-6">
                    <h2>Register User Account</h2>
                    <p>Please fill this form to create an account.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                            <span class="invalid-feedback"><?php echo $username_err; ?></span>
                        </div>    
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
                            <span class="invalid-feedback"><?php echo $password_err; ?></span>
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="password" name="confirm_password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>">
                            <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
                        </div>
                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text" name="FirstName" class="form-control <?php echo (!empty($FirstName_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $FirstName; ?>">
                            <span class="invalid-feedback"><?php echo $FirstName_err; ?></span>
                        </div> 
                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" name="LastName" class="form-control <?php echo (!empty($LastName_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $LastName; ?>">
                            <span class="invalid-feedback"><?php echo $LastName_err; ?></span>
                        </div> 
                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="email" name="EmailAddress" class="form-control <?php echo (!empty($EmailAddress_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $EmailAddress; ?>">
                            <span class="invalid-feedback"><?php echo $EmailAddress_err; ?></span>
                        </div> 
                        <div class="form-group">
                            <label>Contact No</label>
                            <input type="text" name="ContactNo" class="form-control <?php echo (!empty($ContactNo_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $ContactNo; ?>">
                            <span class="invalid-feedback"><?php echo $ContactNo_err; ?></span>
                        </div>
                        <div class="form-group">
                            <label>Privilege</label>
                            <input type="text" name="Privilege" class="form-control <?php echo (!empty($Privilege_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $Privilege; ?>">
                            <span class="invalid-feedback"><?php echo $Privilege_err; ?></span>
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <input type="text" name="Status" class="form-control <?php echo (!empty($Status_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $Status; ?>">
                            <span class="invalid-feedback"><?php echo $Status_err; ?></span>
                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Submit">
                            <input type="reset" class="btn btn-secondary ml-2" value="Reset">
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
        
        
        

        
        <?php
            include('footer.php');
        ?>
        
        <script src="jquery-3.5.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="main.js"></script>
    

    </body>
</html>