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
                        $('#submit').trigger("reset");
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