<!DOCTYPE html>
<html class="h-100"lang="en">
<head>
<!--<link rel="stylesheet" type="text/css" href="style.css">-->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">	
<title>Jonathan Creedon Final Year Project</title>


</head>
<body class="h-100 bg-dark">
	 	
	
<?php 
include ('./View/header.php');

?>
<main class="jumbotron text-center bg-light "><!--h-75-->
<header>
<h1>Evaluate Your User Experience</h1>
</header>


<form class="text-center"action="./Controller/insert.php" method="post">

<div class="form-group text-center">
<textarea class="form-control text-center" id="usereval" name="input"rows="4" cols="50">
Enter your feedback here
</textarea><br><br>
</div>

<div class="form-group">
<label class="radio-inline" for="star one">
<input class="form-control " type="radio" id="star one" name="star" value=1>1 Star</label>
<label class="radio-inline"for="star two">
<input class="form-control " type="radio" id="star two" name="star" value=2>2 Star</label>
<label class="radio-inline"for="star three">
<input class="form-control " type="radio" id="star three" name="star" value=3>3 Star</label>
<label class="radio-inline"for="star four">
<input class="form-control " type="radio" id="star four" name="star" value=4>4 Star</label>
<label class="radio-inline"for="star five">
<input class="form-control " type="radio" id="star five" name="star" value=5>5 Star</label>
</div>

<div class="form-row justify-content-center ">
<input class="form-control text-center w-25" type="submit" class="btn btn-primary" name="submit" value="Submit">
</div>




</main>

<footer class="jumbotron text-center bg-dark" style="margin-bottom:0">
	

	
</footer>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
