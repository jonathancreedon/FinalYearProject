<?php
function getCareer($c,$conn) {

$sql2 = "SELECT careerCode, CName, CDesc, SalLow, SalHigh FROM Career WHERE (careerCode = '$c') ";
$result2 = $conn->query($sql2);
return $result2;


}
?>