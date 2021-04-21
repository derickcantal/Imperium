<?php

    $con = mysqli_connect("0.tcp.ngrok.io:10601", "root", "Lucky1991","imperiumrex_data") ;

    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }
    

    $Title = mysqli_real_escape_string($con , $_POST['Title']);
    $FirstName = mysqli_real_escape_string($con , $_POST['FirstName']);
    $MiddleName = mysqli_real_escape_string($con , $_POST['MiddleName']);
    $LastName = mysqli_real_escape_string($con , $_POST['LastName']);
    $NickName = mysqli_real_escape_string($con , $_POST['NickName']);
    $DOBMM = mysqli_real_escape_string($con , $_POST['DOBMM']);
    $DOBDD = mysqli_real_escape_string($con , $_POST['DOBDD']);
    $PhoneNumber = mysqli_real_escape_string($con , $_POST['PhoneNumber']);
    $EmailAddress = mysqli_real_escape_string($con , $_POST['EmailAddress']);
    $Address1 = mysqli_real_escape_string($con , $_POST['Address1']);
    $Address2 = mysqli_real_escape_string($con , $_POST['Address2']);
    $AddressCity = mysqli_real_escape_string($con , $_POST['AddressCity']);
    $AddressPostCode = mysqli_real_escape_string($con , $_POST['AddressPostCode']);
    $AddressCountry = mysqli_real_escape_string($con , $_POST['AddressCountry']);
    $StateOfOrigin = mysqli_real_escape_string($con , $_POST['StateOfOrigin']);
    $TownOfOrigin = mysqli_real_escape_string($con , $_POST['TownOfOrigin']);
    $StateByMarriage = mysqli_real_escape_string($con , $_POST['StateByMarriage']);
    $TownByMarriage = mysqli_real_escape_string($con , $_POST['TownByMarriage']);
    $Occupation = mysqli_real_escape_string($con , $_POST['Occupation']);
    $NOKFirstName = mysqli_real_escape_string($con , $_POST['NOKFirstName']);
    $NOKMiddleName = mysqli_real_escape_string($con , $_POST['NOKMiddleName']);
    $NOKLastName = mysqli_real_escape_string($con , $_POST['NOKLastName']);
    $NOKPhoneNumber = mysqli_real_escape_string($con , $_POST['NOKPhoneNumber']);
    $NOKEmailAddress = mysqli_real_escape_string($con , $_POST['NOKEmailAddress']);
    $NOKAddress1 = mysqli_real_escape_string($con , $_POST['NOKAddress1']);
    $NOKAddress2 = mysqli_real_escape_string($con , $_POST['NOKAddress2']);
    $NOKAddressCity = mysqli_real_escape_string($con , $_POST['NOKAddressCity']);
    $NOKAddressPostCode = mysqli_real_escape_string($con , $_POST['NOKAddressPostCode']);
    $NOKAddressCountry = mysqli_real_escape_string($con , $_POST['NOKAddressCountry']);
    $SkillsValue = mysqli_real_escape_string($con , $_POST['SkillsValue']);
    $DateJoined = "2021-04-21";
    $MemberStatus = "PENDING";



    $sql    = "INSERT INTO members(Title, FirstName, MiddleName, LastName, NickName, DateOfBirth, PhoneNumber, EmailAddress, Address1, Address2, AddressCity, AddressPostCode, AddressCountry, StateOfOrigin, TownOfOrigin, StateByMarriage,TownByMarriage, Occupation, NOKFirstName, NOKMiddleName, NOKLastName, NOKPhoneNumber, NOKEmailAddress, NOKAddress1, NOKAddress2, NOKAddressCity, NOKAddressPostCode, NOKAddressCountry, SkillsValue, DateJoined,  MemberStatus) VALUES ('$Title', '$FirstName', '$MiddleName', '$LastName', '$NickName', '$DOBMM', '$PhoneNumber', '$EmailAddress', '$Address1', '$Address2', '$AddressCity', '$AddressPostCode', '$AddressCountry', '$StateOfOrigin', '$TownOfOrigin', '$StateByMarriage', '$TownByMarriage', '$Occupation', '$NOKFirstName', '$NOKMiddleName', '$NOKLastName',  '$NOKPhoneNumber', '$NOKEmailAddress', '$NOKAddress1', '$NOKAddress2', '$NOKAddressCity', '$NOKAddressPostCode', '$NOKAddressCountry', '$SkillsValue', '$DateJoined',  '$MemberStatus')";
    
    $result = mysqli_query($con, $sql);

    if ($result) {
        echo 'Registration Successful';
    }else{
        echo 'Registration Failed' . mysqli_errno($result);
    }

    

?>
