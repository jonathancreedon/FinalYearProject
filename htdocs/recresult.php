<!DOCTYPE html>
<html class="h-100" lang="en">
<head class="h-100">
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
<h1>Course Recommendation</h1>
</header>

<?php



include('./Controller/calculation.php');
$listOfCourses = calculation();

for ($i = 0; $i < count($listOfCourses); $i++) {
    if ((count($listOfCourses) - $i) < 5){
      echo "<br><br>";
      echo "<p>Ranked ";

      if ($listOfCourses[$i]->score == $listOfCourses[$i-1]->score ) {
      echo $i;
      } else {
      echo $i+1;
      }
      echo "</p>";
    
      //echo "<br>";
      $link = $listOfCourses[$i]->name;
      echo "<a class='text-dark' href= 'http://citcoursescareerguidance.epizy.com/result.php?course=$link'>";
      echo $listOfCourses[$i]->name;
      echo "</a>";
      echo " ";
      echo $listOfCourses[$i]->score;
      }
}

?>





</main>

<footer class="jumbotron text-center bg-dark" style="margin-bottom:0">
	

	
</footer>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
