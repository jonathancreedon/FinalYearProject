<?php

function getCourse($c,$conn) {

$sql4 = "SELECT Title FROM Course WHERE (courseCode = '$c') ";
$result4 = $conn->query($sql4);
return $result4;


}
?>