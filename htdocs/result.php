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

$y = $_GET['course'];


include('./Controller/connect.php');

$conn = connect();

$barp = array();
$barit = 0;
for ($x = 10; $x <= 60; $x+=10) {
    $sqlsal = "SELECT COUNT(*) as C FROM UserUpdate WHERE (UCourse='$y') AND (HSal='$x')";
    $resultbar = $conn->query($sqlsal);
    $row = $resultbar->fetch_assoc();
    $barp[$barit] = $row["C"];
    $barit+=1;
}

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
  
$sql = "SELECT courseCode, Title, gradSatisfaction, gradUsefulness FROM Course WHERE (Title='$y')";
$result = $conn->query($sql);


echo "<div class='container bg-primary'>";
if ($result->num_rows > 0) {
    //echo "<table><tr><th>Course ID Code</th><th>Course Title</th><th>Percent Satisfied</th><th>Percent Found Useful</th></tr>";
    
    while($row = $result->fetch_assoc()) {
        $link = $row["courseCode"];
        //echo "<tr><td>".$row["courseCode"]."</td><td>".$row["Title"]."</td><td>".$row["gradSatisfaction"]."</td><td> ".$row["gradUsefulness"]."</td></tr>";
        echo"<h1>".$row["Title"]."</h1>";
        echo"<div class='container'>Percentage of graduates satisfied with this course = ".$row["gradSatisfaction"]." %</div>";
        echo"<div class='container'>Percentage of graduates who stated that this course was useful for their current career = ".$row["gradUsefulness"]." %</div>";
    }
    //echo "</table>";
} else {
    //echo "0 results";
}

echo "<div class='row bg-primary'>";
$piec = array();
$piep = array();
$pieit = 0;
$sql3 = "SELECT courseCode,careerCode,probability FROM Evaluation WHERE (courseCode = '$link')";
$result3 = $conn->query($sql3);

if ($result3->num_rows > 0) {
   
    while($row = $result3->fetch_assoc()) {
        echo "<div class='col-md-6 bg-success' >";
        $piep[$pieit] = $row["probability"];
        $result4 = getCareer($row["careerCode"],$conn);
        if ($result4->num_rows > 0) {
    while($row = $result4->fetch_assoc()) {
        $piec[$pieit] = $row["CName"];
        $pieit++;
        echo"<h1>".$row["CName"]."</h1>";
        echo"<div class='container'>".$row["CDesc"]."</div>";
        echo"<div class='container'>Lowest Salary = ".$row["SalLow"]." Highest Salary = ".$row["SalHigh"]."</div>";
        
    }
    //echo "</table>";
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
echo "</div>";?>


<?php

$pc = json_encode($piec);
$pp = json_encode($piep);
$bp = json_encode($barp); 


echo"<script>
function myFunction() {
  
  window.location.href = 'piechart.php?piec='+$pc+'&piep='+$pp+'&barp='+$bp;
}
</script>
<button type='button' onclick='myFunction()'>View Extra Data</button>
"; ?>

</main>

<footer class="jumbotron text-center bg-dark" style="margin-bottom:0">
	
</footer>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>