<?php
include ("getsal.php");

function joincareer($conn,$link){
    
$sql3 = "SELECT courseCode,careerCode,probability FROM Evaluation WHERE (courseCode = '$link')";
$result3 = $conn->query($sql3);

if ($result3->num_rows > 0) {
    $i = 0;
    $avsal = 0;
    while($row = $result3->fetch_assoc()) {
        $avsal += getsal($row["careerCode"],$conn);
        $i += 1;
    }
    $avsal = $avsal/$i;
    return $avsal;
} else {
    
    return 0;
}

}
?>