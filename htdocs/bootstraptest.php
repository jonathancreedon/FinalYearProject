<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<title>Jonathan Creedon Final Year Project</title>


</head>
<body>
	 	
<?php include ('./View/header.php');?>		

<main class="container" >
<header class="container">
<h1>Search By Course</h1>
</header>


<?php 



include('./Controller/connect.php');
echo 'Hi';
$conn = connect(); 
?>
<?php
$sql = "SELECT Title FROM Course";
$result = $conn->query($sql);



echo "<select name='courses' id='courses' onchange='location = window.location.href + '?category='+this.selectedIndex.value;'>"; 

foreach($result as $course){ 
  echo "<option value='" . $course['Title'] . "'>" . $course['Title'] . "</option>";
  
} 
echo"</select>";


$conn->close();

$selectedCategory = $_GET['category'];



$t = 10;

echo "
<script>
function myFunction() {
  var x = document.getElementById('courses').selectedIndex;
  window.location.href = 'result.php?course='+document.getElementsByTagName('option')[x].value;
}
</script>
";

include('./Controller/subject.php');



?>

<button class="container">

<button type="button" class="btn-primary" onclick="myFunction()">View Course Data</button>

</button>




<footer class = "main">
	

	
</footer>

</main>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>


