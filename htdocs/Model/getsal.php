<?php
function getsal($c,$conn) {

$sql2 = "SELECT careerCode, SalLow, SalHigh FROM Career WHERE (careerCode = '$c') ";
$result2 = $conn->query($sql2);


if ($result2->num_rows > 0) {
    
    // output data of each row
    while($row = $result2->fetch_assoc()) {
        $lowSal = $row["SalLow"];
        $highSal = $row["SalHigh"];
        
    }
    $avSal = ($lowSal + $highSal) /2;
    return $avSal;
} else {
    
    return 0;
}
}
?>