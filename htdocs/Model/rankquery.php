<?php
include("joincareer.php");
include("joincareertwo.php");
function rankquery($name,$table,$conn,$val,$crit){


$sql = "SELECT * FROM $table WHERE ($name = '$val') ORDER BY $crit";

$result = $conn->query($sql);
foreach($result as $course){
$avsal = joincareer($conn,$course['courseCode']);
$opportunity = joincareertwo($conn,$course['courseCode']);
$listOfCourses[]= new Rank($course['Title'],$course['gradSatisfaction'],$course['gradUsefulness'],$avsal,$opportunity);
}






$conn->close();
return $listOfCourses;
}
?>