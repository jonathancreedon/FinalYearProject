<?php
echo 'test';

include('connect.php');
$conn = connect(); 
include ('./Evaluation.php');
if (isset($_POST['submit']))
{ 
  
  
  $input = $_POST['input'];
  $star = $_POST['star'];
  //$success = "Success";
  //$error = "Error";
  //$timestamp = date("Y-m-d H:i:s");
  $sql = "INSERT INTO UserEvaluation ( UserInput, StarRating)
  VALUES ( '$input', '$star')";

  if (mysqli_query($conn, $sql)) {
        //echo "New record has been added successfully !";
        mysqli_close($conn);
        header( 'Location: http://citcoursescareerguidance.epizy.com/Evaluation.php' );
     } else {
        //echo "Error: " . $sql . ":-" . mysqli_error($conn);
        mysqli_close($conn);
        header( 'Location: http://citcoursescareerguidance.epizy.com/Evaluation.php' );
     }
    
  
  
  
//Time,'$timestamp',
}


?>