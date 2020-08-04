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
	 	
<?php include ('./View/header.php');?>		

<main class="jumbotron text-center bg-light h-75">
<header>
<h1>Search By Course</h1>
</header>

<?php

include('./Controller/connect.php');

$conn = connect(); 

include ('./Model/fillcombo.php');
  $name = "Title";
  $table = "Course";
  $newarr = fillcombo($name,$table,$conn);

echo "<select name='courses' id='courses' onchange='location = window.location.href + '?category='+this.selectedIndex.value;'>"; 
for ($i = 0; $i < count($newarr); $i++){
echo "<option value='" . $newarr[$i] . "'>" . $newarr[$i] . "</option>";

}
echo"</select>";

$conn->close();

echo "
<script>
function myFunction() {
  var x = document.getElementById('courses').selectedIndex;
  window.location.href = 'result.php?course='+document.getElementsByTagName('option')[x].value;
}
</script>
<button type='button' onclick='myFunction()'>View Course Data</button>
";

?>

</main>


<footer class="jumbotron text-center bg-dark" style="margin-bottom:0">
	

	
</footer>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
