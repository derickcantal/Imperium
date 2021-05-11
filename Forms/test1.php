<?php 
 require '../Database/config.php';
 
 $sqltran = mysqli_query($link, "SELECT * FROM login ")or die(mysqli_error($link));
 $arrVal = array();
 
 $i=1;
 while ($rowList = mysqli_fetch_array($sqltran)) {
 
 $name = array(
 'num' => $i,
 'first'=> $rowList['FirstName'],
 'last'=> $rowList['LastName']
 ); 
 
 
 array_push($arrVal, $name); 
 $i++; 
 }
 echo  json_encode($arrVal); 
 
 
 mysqli_close($link);
?>   