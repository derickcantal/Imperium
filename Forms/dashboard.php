<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">

    <head>

        <title>Dashboard</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="main.css">
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        
       
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
                        <a class="nav-link" href="../index.php">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="Dashboard_Reset_Password.php">Change Password</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>

                </ul>
            </div>
        </nav>

        <div class="container features">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["Username"]); ?></b>. Welcome to Imperiumrex.</h1>
                </div> 
                <div class="col-lg-4 col-md-4 col-sm-6">
                    
                    <p>
                        <a href="/index.php" class="btn btn-warning">Register Member</a>
                        <a href="User_Account.php" class="btn btn-warning">Manage Users</a>
                        
                    </p>
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