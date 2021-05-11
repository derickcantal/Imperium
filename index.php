<!DOCTYPE html>

<html lang="en">

	<head>

		<title>Home</title>
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
			<a class="navbar-brand" href="\index.php">IMPERIUM REX</a>
			<button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="main-navigation">
				<ul class="navbar-nav">
					
                    <li class="nav-item">
                    	<?php 
                    	if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    						echo '<a class="nav-link" href="Forms/login.php">Login</a>';
						}else{
							echo '<a class="nav-link" href="Forms/Dashboard.php">Dashboard</a>';
						}
						?>
                    </li>
					
				</ul>
			</div>
		</nav>

		<header class="page-header header container-fluid">
			<div class="overlay"></div>
			<div class="description">
				<h1>Become a Member Register now!</h1>
				<p>Just fill up the form below</p>
				
			</div>
		</header>
		
		<div class="container features">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-6">	
					
                    <form>
					<h3 class="feature-title">Personal Information</h3>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Title" id="Title">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="First Name" id="FirstName">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Middle Name" id="MiddleName">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Last Name" id="LastName">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Nickname" id="NickName">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Date of Birth (MM)" id="DOBMM">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Date of Birth (DD)" id="DOBDD">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Occupation" id="Occupation">
					</div>
					<div class="form-group">
						<input type="email" class="form-control" placeholder="Email Address" id="EmailAddress">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Phone Number" id="PhoneNumber">
					</div>
					
					<div class="form-group">
						<textarea class="form-control" placeholder="Skills/Values" id="SkillsValue" rows="4"></textarea>
					</div>
					
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6">	
					<h3 class="feature-title">Address</h3>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Address Line 1" id="Address1">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Address Line 2" id="Address2">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Post Code" id="AddressPostCode">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="City" id="AddressCity">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Country" id="AddressCountry">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="State of Origin" id="StateOfOrigin">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Town of Origin" id="TownOfOrigin">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="State by Marriage" id="StateByMarriage">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Town By Marriage" id="TownByMarriage">
					</div>
					
					
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6">	
					<h3 class="feature-title">Next of Kin</h3>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="First Name" id="NOKFirstName">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Middle Name" id="NOKMiddleName">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Last Name" id="NOKLastName">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Phone Number" id="NOKPhoneNumber">
					</div>
					<div class="form-group">
						<input type="email" class="form-control" placeholder="Email" id="NOKEmailAddress">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Address Line 1" id="NOKAddress1">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Address Line 2" id="NOKAddress2">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Post Code" id="NOKAddressPostCode">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="City" id="NOKAddressCity">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Country" id="NOKAddressCountry">
					</div>
					<input type="button" class="btn btn-primary btn-block" value="Register" name="submit" id="submit">
					<input type="reset" class="btn btn-secondary btn-block" value="Reset"><br>

					<div class="alert alert-success d-none success"></div>
                    <div class="alert alert-danger d-none error"></div>


				</div>
			</form>
			</div> 
		</div>
		
		

		
		<?php
			include('Forms/footer.php');
		?>

		
		<script src="jquery-3.5.1.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<script src="main.js"></script>
    

	</body>
	
</html>
<?php
include('Database/Member_Reg_Script.php');
?>

