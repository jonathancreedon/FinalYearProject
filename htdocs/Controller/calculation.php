<?php 

function calculation(){
$c = $_GET['courses'];


include ('rankobject.php');

include ('connect.php');

$conn = connect(); 

include ('./Model/rankquery.php');
  
  $name = "Department";
  $table = "Course";
  $sat = "gradSatisfaction";
  
  $listOfCourses = rankquery($name,$table,$conn,$c,$sat);
  
  
  

include ('compare.php');
usort($listOfCourses, 'comparatorsat');
for ($i = 0; $i < count($listOfCourses); $i++) {
    $listOfCourses[$i]->score += (($i+1) * $_GET['satisfaction']);
    
}
//print_r($listOfCourses);
usort($listOfCourses, 'comparatoruse');
for ($i = 0; $i < count($listOfCourses); $i++) {
    $listOfCourses[$i]->score += (($i+1) * $_GET['usefullness']);
   
}

usort($listOfCourses, 'comparatorsal');
for ($i = 0; $i < count($listOfCourses); $i++) {
    $listOfCourses[$i]->score += (($i+1) * $_GET['salary']);
   
}

usort($listOfCourses, 'comparatoropp');
for ($i = 0; $i < count($listOfCourses); $i++) {
    $listOfCourses[$i]->score += (($i+1) * $_GET['opportunities']);
   
}

usort($listOfCourses, 'comparatorscore');
return $listOfCourses;
}

?>