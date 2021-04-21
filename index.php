<!DOCTYPE html>

<html lang="en">

	<head>

		<title>Imperium Rex Registration Page</title>
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
			<a class="navbar-brand" href="#">IMPERIUM REX</a>
			<button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="main-navigation">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="#">Home</a>
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
					<div class="alert alert-success d-none success"></div>
                    <div class="alert alert-danger d-none error"></div>
				</div>
			</form>
			</div> 
		</div>
		
		

		
		<footer class="page-footer">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-md-8 col-sm-12">
					<h6 class="text-uppercase font-weight-bold">Additional Information</h6>
					<p>All Registered Member is Subject for approval. Once Registered kindly proceed to our main office stated in the Contact.</p>
					<p>This website is intended only for Imperium Rex Members.</p>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12">
					<h6 class="text-uppercase font-weight-bold">Contact</h6>
					<p>1640 Riverside Drive, Hill Valley, California
					<br/>info@imperiumrex.com
					<br/>+ 01 234 567 88
					<br/>+ 01 234 567 89</p>
				</div>
			</div>
			<div class="footer-copyright text-center">© 2020 Copyright: imperiumrex.com</div>
		</footer>
		
		<script src="jquery-3.5.1.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<script src="main.js"></script>
    

	</body>
	
</html>

<script>
    $(function() {
        $(document).on('click', '#submit', function(e) {
            e.preventDefault();

            var Title = $('#Title').val();
            var FirstName = $('#FirstName').val();
            var MiddleName = $('#MiddleName').val();
            var LastName = $('#LastName').val();
            var NickName = $('#NickName').val();
            var DOBMM = $('#DOBMM').val();
            var DOBDD = $('#DOBDD').val();
            var PhoneNumber = $('#PhoneNumber').val();
            var EmailAddress = $('#EmailAddress').val();
            var Address1 = $('#Address1').val();
            var Address2 = $('#Address2').val();
            var AddressCity = $('#AddressCity').val();
            var AddressPostCode = $('#AddressPostCode').val();
            var AddressCountry = $('#AddressCountry').val();
            var StateOfOrigin = $('#StateOfOrigin').val();
            var TownOfOrigin = $('#TownOfOrigin').val();
            var StateByMarriage = $('#StateByMarriage').val();
            var TownByMarriage = $('#TownByMarriage').val();
            var Occupation = $('#Occupation').val();
            var NOKFirstName = $('#NOKFirstName').val();
            var NOKMiddleName = $('#NOKMiddleName').val();
            var NOKLastName = $('#NOKLastName').val();
            var NOKPhoneNumber = $('#NOKPhoneNumber').val();
            var NOKEmailAddress = $('#NOKEmailAddress').val();
            var NOKAddress1 = $('#NOKAddress1').val();
            var NOKAddress2 = $('#NOKAddress2').val();
            var NOKAddressCity = $('#NOKAddressCity').val();
            var NOKAddressPostCode = $('#NOKAddressPostCode').val();
            var NOKAddressCountry = $('#NOKAddressCountry').val();
            var SkillsValue = $('#SkillsValue').val();
            var DateJoined = $('#DateJoined').val();
            var MemberStatus = $('#MemberStatus').val();


            if (Title == '') {
                alert('Please enter Title')
            } 
            else if (FirstName == '') {
                alert('Please enter First Name')
            } 
            else if (MiddleName == '') {
                alert('Please enter Middle Name')
            } 
            else if (LastName == '') {
                alert('Please enter Last Name')
            } 
            else if (NickName == '') {
                alert('Please enter Nickname')
            } 
            else if (DOBMM == '') {
                alert('Please enter Date of Birth(MM)')
            } 
            else if (DOBDD == '') {
                alert('Please enter Date of Birth(DD)')
            } 
            else if (PhoneNumber == '') {
                alert('Please enter Phone Number')
            } 
            else if (EmailAddress == '') {
                alert('Please enter Email Address')
            } 
            else if (Address1 == '') {
                alert('Please enter Address Line 1')
            } 
            else if (Address2 == '') {
                alert('Please enter Address Line 2')
            } 
            else if (AddressCity == '') {
                alert('Please enter Address City')
            } 
            else if (AddressPostCode == '') {
                alert('Please enter Post Code')
            } 
            else if (AddressCountry == '') {
                alert('Please enter Country')
            } 
            else if (StateOfOrigin == '') {
                alert('Please enter State Of Origin')
            } 
            else if (TownOfOrigin == '') {
                alert('Please enter Town Of Origin')
            } 
            else if (StateByMarriage == '') {
                alert('Please enter State By Marriage')
            } 
            else if (TownByMarriage == '') {
                alert('Please enter Town By Marriage')
            } 
            else if (Occupation == '') {
                alert('Please enter Occupation')
            } 
            else if (NOKFirstName == '') {
                alert('Please enter Kins First Name')
            } 
            else if (NOKMiddleName == '') {
                alert('Please enter Kins Middle Name')
            } 
            else if (NOKLastName == '') {
                alert('Please enter Kins Last Name')
            } 
            else if (NOKPhoneNumber == '') {
                alert('Please enter Kins Phone Number')
            } 
            else if (NOKEmailAddress == '') {
                alert('Please enter Kins Email Address')
            } 
            else if (NOKAddress1 == '') {
                alert('Please enter Kins Address Line 1')
            } 
            else if (NOKAddress2 == '') {
                alert('Please enter Kins Address Line 2')
            } 
            else if (NOKAddressCity == '') {
                alert('Please enter Kins City')
            } 
            else if (NOKAddressPostCode == '') {
                alert('Please enter Kins Postcode')
            } 
            else if (NOKAddressCountry == '') {
                alert('Please enter Kins Country')
            } 
            else if (SkillsValue == '') {
                alert('Please enter Skille and Values')
            } 
            
            else {
                $.ajax({
                    url: 'insert.php',
                    method: 'POST',
                    data: {
                        Title: Title,
                        FirstName: FirstName,
                        MiddleName: MiddleName,
                        LastName: LastName,
                        NickName: NickName,
                        DOBMM: DOBMM,
                        DOBDD: DOBDD,
                        PhoneNumber: PhoneNumber,
                        EmailAddress: EmailAddress,
                        Address1: Address1,
                        Address2: Address2,
                        AddressCity: AddressCity,
                        AddressPostCode: AddressPostCode,
                        AddressCountry: AddressCountry,
                        StateOfOrigin: StateOfOrigin,
                        TownOfOrigin: TownOfOrigin,
                        StateByMarriage: StateByMarriage,
                        TownByMarriage: TownByMarriage,
                        Occupation: Occupation,
                        NOKFirstName: NOKFirstName,
                        NOKMiddleName: NOKMiddleName,
                        NOKLastName: NOKLastName,
                        NOKPhoneNumber: NOKPhoneNumber,
                        NOKEmailAddress: NOKEmailAddress,
                        NOKAddress1: NOKAddress1,
                        NOKAddress2: NOKAddress2,
                        NOKAddressCity: NOKAddressCity,
                        NOKAddressPostCode: NOKAddressPostCode,
                        NOKAddressCountry: NOKAddressCountry,
                        SkillsValue: SkillsValue
                        
                    },
                    success: function(data) {
                        $('.success').removeClass('d-none').html(data);
                    },
                    error: function(data) {
                        $('.error').removeClass('d-none').html(data);
                    }
                });
            }
        });
    });
</script>