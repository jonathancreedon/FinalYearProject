<?php


include('connect.php');
$conn = connect(); 
include ('./View/updateform.php');


if (isset($_POST['submit']))
{
 
$c = $_POST['courses'];
$newcarr = 0;
$c1 = $_POST['career'];
$c2 = $_POST['careers'];
if($c2 == ""){
    $career = $c1;
    $newcarr = 1;
}else{
    $career = $c2;
}
$salary = $_POST['salary'];
$satisfaction = $_POST['satisfaction'];
$satisfaction2 = $_POST['satisfaction2'];
$satisfaction3 = $_POST['satisfaction3'];
$useful = $_POST['useful'];
$useful2 = $_POST['useful2'];
$useful3 = $_POST['useful3'];
  //Figure out sat and use
  $sat = ($satisfaction+$satisfaction3)-$satisfaction2;
  if($sat < 0){
      $sat = 0;
  }
  $use = ($useful+$useful3)-$useful2;
  if($use < 0){
      $use = 0;
  }
  $highsal = $salary;
  $lowsal = $salary - 9;
  
  $sql = "INSERT INTO UserUpdate ( UCourse,UCareer,USat,UUse,HSal,LSal)
  VALUES ( '$c', '$career','$sat','$use',$highsal,$lowsal)";

  if (mysqli_query($conn, $sql)) {
        //echo "New record has been added successfully !";
        echo $_POST['career'];
        echo $_POST['careers'];
        include ('updatesql.php');
        $zero = updsql($conn,$newcarr,$career,$highsal,$lowsal);
        mysqli_close($conn);
        
        //header( 'Location: http://citcoursescareerguidance.epizy.com/update.php' );
     } else {
        //echo "Error: " . $sql . ":-" . mysqli_error($conn);
        mysqli_close($conn);
        //header( 'Location: http://citcoursescareerguidance.epizy.com/update.php' );
     }

    
  
  
  
//Time,'$timestamp',
}


?>