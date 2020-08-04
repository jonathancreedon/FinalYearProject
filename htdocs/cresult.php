<!DOCTYPE html>
<html class="h-100" lang="en">
<head>
<!--<link rel="stylesheet" type="text/css" href="style.css">-->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">	
<title>Jonathan Creedon Final Year Project</title>

</head>
<body class="h-100 bg-dark">
<?php include ('./View/header.php');?>
<main class="jumbotron text-center bg-light h-75">
<header>
<h1>Course Results</h1>
</header>


<?php

$y = $_GET['career'];


include('./Controller/connect.php');

$conn = connect(); 
include ('./Model/getcourse.php');
include ('./Model/getcareer.php');
  $result2 = getCareer($c,$conn);

  if ($result2->num_rows > 0) {
    
    while($row = $result2->fetch_assoc()) {
        
        echo"<h1>".$row["CName"]."</h1>";
        echo"<div class='container'>".$row["CDesc"]."</div>";
        echo"<div class='container'>Lowest Salary = ".$row["SalLow"]." Highest Salary = ".$row["SalHigh"]."</div>";
    }
    
} else {
    
}
  
$sql = "SELECT careerCode FROM Career WHERE (CName='$y')";
$result = $conn->query($sql);


//echo "<div class='container bg-primary'>";
if ($result->num_rows > 0) {
    //echo "<table><tr><th>Course ID Code</th><th>Course Title</th><th>Percent Satisfied</th><th>Percent Found Useful</th></tr>";
    
    while($row = $result->fetch_assoc()) {
        $link = $row["careerCode"];
        //echo "<tr><td>".$row["courseCode"]."</td><td>".$row["Title"]."</td><td>".$row["gradSatisfaction"]."</td><td> ".$row["gradUsefulness"]."</td></tr>";
        //echo"<h1>".$row["careerCode"]."</h1>";
        //echo"<div class='container'>Percentage of graduates satisfied with this course = ".$row["gradSatisfaction"]." %</div>";
        //echo"<div class='container'>Percentage of graduates who stated that this course was useful for their current career = ".$row["gradUsefulness"]." %</div>";
    }
    //echo "</table>";
} else {
    //echo "0 results";
}

echo "<div class='jumbotron text-center'>";

$sql3 = "SELECT courseCode FROM Evaluation WHERE (careerCode = '$link')";
$result3 = $conn->query($sql3);

if ($result3->num_rows > 0) {
    
    while($row = $result3->fetch_assoc()) {
        //echo "<div class='col-md-6 bg-success' >";
        
        $result4 = getCourse($row["courseCode"],$conn);
        
        if ($result4->num_rows > 0) {
         while($row = $result4->fetch_assoc()) {
           $link = $row["Title"];
           echo "<a class='text-dark' href= 'http://citcoursescareerguidance.epizy.com/result.php?course=$link'>";
           echo $row["Title"];
           echo "</a>";
    }
    
} else {
    echo "0 results";
}

        echo "</div>";
    }
 
} else {
    //echo "0 results";
}
 

$conn->close();
echo "</div>";
echo "</div>";
?>


</main>

<footer class="jumbotron text-center bg-dark" style="margin-bottom:0">
	
</footer>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>