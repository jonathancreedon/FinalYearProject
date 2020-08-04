<?php

function joincareertwo($conn,$link){
    
$sql3 = "SELECT courseCode,careerCode,probability FROM Evaluation WHERE (courseCode = '$link')";
$result3 = $conn->query($sql3);

if ($result3->num_rows > 0) {
    $opportunity = 0;
    while($row = $result3->fetch_assoc()) {
        $opportunity += $row['probability'];
        
    }
    
    return $opportunity;
} else {
    
    return 0;
}

}
?>