<?php

// call export function
exportMysqlToCsv('export_csv.csv');


// export csv
function exportMysqlToCsv($filename = 'export_csv.csv')
{

   $conn = dbConnection();
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql_query = "SELECT memberid, Title, FirstName, MiddleName, LastName, NickName, DateOfBirth, PhoneNumber, EmailAddress, Address1, Address2, AddressCity, AddressPostCode, AddressCountry, StateOfOrigin, TownOfOrigin, StateByMarriage,TownByMarriage, Occupation, NOKFirstName, NOKMiddleName, NOKLastName, NOKPhoneNumber, NOKEmailAddress, NOKAddress1, NOKAddress2, NOKAddressCity, NOKAddressPostCode, NOKAddressCountry, SkillsValue, DateJoined,  MemberStatus FROM members WHERE MemberStatus = 'ONLINE'";

    $sql_update = "UPDATE Members SET MemberStatus='DOWNLOADED'";

    // Gets the data from the database
    $result = $conn->query($sql_query);
    
    $f = fopen('php://temp', 'wt');
    $first = true;
    while ($row = $result->fetch_assoc()) {
        if ($first) {
            fputcsv($f, array_keys($row));
            $first = false;
        }
        fputcsv($f, $row);
    } // end while

    $result_update = $conn->query($sql_update);
    $conn->close();


    $size = ftell($f);
    rewind($f);

    header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
    header("Content-Length: $size");
    // Output to browser with appropriate mime type, you choose ;)
    header("Content-type: text/x-csv");
    header("Content-type: text/csv");
    header("Content-type: application/csv");
    header("Content-Disposition: attachment; filename=$filename");
    fpassthru($f);
    exit;

    
   
}



// db connection function
function dbConnection(){
    $servername = "localhost";
    $username = "imperiumrex_data";
    $password = "j~lUEL#Z,Itc";
    $dbname = "imperiumrex_data";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    return $conn;
}


?>
