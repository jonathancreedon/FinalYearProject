<div class="container">
<div class="form-group">
<?php

 echo"<form action='./Controller/updateresult.php' method='post'>";

include ('./Controller/connect.php');
$conn = connect(); 
echo"Select your course:";
include ('./Model/fillcombo.php');
  $name = "Title";
  $table = "Course";
  $newarr = fillcombo($name,$table,$conn);
  
  echo "<select name='courses'  >"; 
for ($i = 0; $i < count($newarr); $i++){
 echo "<option value='" . $newarr[$i] . "'>" . $newarr[$i] . "</option>";

}
echo"</select><br>";
echo"Select your career:";
$name2 = "CName";
$table2 = "Career";
$newarr2 = fillcombo($name2,$table2,$conn);
  
  echo "<select name='careers' id='careers'  >"; 
for ($j = 0; $j < count($newarr2); $j++){
 echo "<option value='" . $newarr2[$j] . "'>" . $newarr2[$j] . "</option>";

}
echo"</select><br>";
echo"<script>
document.getElementById('careers').selectedIndex = -1;
</script>";
$conn->close();
echo"

<br><label for='career'>If career not included above please input your current career:</label><br>
  <input type='text' id='career' name='career'><br>

<br><p class='lead'>Your Average Yearly Salary:<br>
<div class='form-check form-check-inline'>
<input class='form-check-input' type='radio' name='salary' value='10'>0-10K
</div>
<div class='form-check form-check-inline'>
<input class='form-check-input' type='radio' name='salary' value='20'>11-20K
</div>
<div class='form-check form-check-inline'>
<input class='form-check-input' type='radio' name='salary' value='30'>21-30K
</div>
<div class='form-check form-check-inline'>
<input class='form-check-input' type='radio' name='salary' value='40'>31-40K
</div>
<div class='form-check form-check-inline'>
<input class='form-check-input' type='radio' name='salary' value='50'>41-50K
</div>
<div class='form-check form-check-inline'>
<input class='form-check-input' type='radio' name='salary' value='60'>51-60K
</div>
<br><br>

<p class='lead font-weight-bold'>For the following questions in this section choose the option that best represents your opinion of the statement given:</p><br>

<p class='lead text-left'>Q1. You are satisfied with the CIT course you chose:</p><br>
<div class='form-check form-check-inline'>
<input class='form-check-input' type='radio' name='satisfaction' value='0'>Disagree
</div>
<div class='form-check form-check-inline'>
<input class='form-check-input' type='radio' name='satisfaction' value='1'>Slightly Agree
</div>
<div class='form-check form-check-inline'>
<input class='form-check-input' type='radio' name='satisfaction' value='2'>Mostly Agree
</div>
<div class='form-check form-check-inline'>
<input class='form-check-input' type='radio' name='satisfaction' value='3'>Completely Agree
</div>
<br><br>

<p class='lead text-left'>Q2. You wish you had chosen a different course when you first started studying at CIT:</p><br>
<div class='form-check form-check-inline'>
<input class='form-check-input' type='radio' name='satisfaction2' value='0'>Disagree
</div>
<div class='form-check form-check-inline'>
<input class='form-check-input' type='radio' name='satisfaction2' value='1'>Slightly Agree
</div>
<div class='form-check form-check-inline'>
<input class='form-check-input' type='radio' name='satisfaction2' value='2'>Mostly Agree
</div>
<div class='form-check form-check-inline'>
<input class='form-check-input' type='radio' name='satisfaction2' value='3'>Completely Agree
</div>
<br><br>

<p class='lead text-left'>Q3. You think that the course you graduated from allowed you to develop new skills:</p><br>
<div class='form-check form-check-inline'>
<input class='form-check-input' type='radio' name='satisfaction3' value='0'>Disagree
</div>
<div class='form-check form-check-inline'>
<input class='form-check-input' type='radio' name='satisfaction3' value='1'>Slightly Agree
</div>
<div class='form-check form-check-inline'>
<input class='form-check-input' type='radio' name='satisfaction3' value='2'>Mostly Agree
</div>
<div class='form-check form-check-inline'>
<input class='form-check-input' type='radio' name='satisfaction3' value='3'>Completely Agree
</div>
<br><br>

<p class='lead text-left'>Q4. You think that you could not have gotten your current job without your course at CIT:</p><br>
<div class='form-check form-check-inline'>
<input class='form-check-input' type='radio' name='useful3' value='0'>Disagree
</div>
<div class='form-check form-check-inline'>
<input class='form-check-input' type='radio' name='useful3' value='1'>Slightly Agree
</div>
<div class='form-check form-check-inline'>
<input class='form-check-input' type='radio' name='useful3' value='2'>Mostly Agree
</div>
<div class='form-check form-check-inline'>
<input class='form-check-input' type='radio' name='useful3' value='3'>Completely Agree
</div>
<br><br>

<p class='lead text-left'>Q5. You are satisfied with your career post-graduation:</p><br>
<div class='form-check form-check-inline'>
<input class='form-check-input' type='radio' name='useful' value='0'>Disagree
</div>
<div class='form-check form-check-inline'>
<input class='form-check-input' type='radio' name='useful' value='1'>Slightly Agree
</div>
<div class='form-check form-check-inline'>
<input class='form-check-input' type='radio' name='useful' value='2'>Mostly Agree
</div>
<div class='form-check form-check-inline'>
<input class='form-check-input' type='radio' name='useful' value='3'>Completely Agree
</div>
<br><br>

<p class='lead text-left'>Q6. You think that you do not have a high enough level of qualification to get the kind of job you want:</p><br>
<div class='form-check form-check-inline'>
<input class='form-check-input' type='radio' name='useful2' value='0'>Disagree
</div>
<div class='form-check form-check-inline'>
<input class='form-check-input' type='radio' name='useful2' value='1'>Slightly Agree
</div>
<div class='form-check form-check-inline'>
<input class='form-check-input' type='radio' name='useful2' value='2'>Mostly Agree
</div>
<div class='form-check form-check-inline'>
<input class='form-check-input' type='radio' name='useful2' value='3'>Completely Agree
</div>
<br><br>


<input  type='submit'  name='submit' value='Submit'>
</form>";

?>
</div>
</div>