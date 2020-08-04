<div class="container">
<div class="form-group">
<?php

 echo"<form action='recresult.php' method='get'>";

include ('./Controller/connect.php');
$conn = connect(); 

include ('./Model/fillcombo.php');
  $name = "Department";
  $table = "Course";
  $newarr = fillcombo($name,$table,$conn);
  
  echo "<select name='courses' id='courses' >"; 
for ($i = 0; $i < count($newarr); $i++){
 echo "<option value='" . $newarr[$i] . "'>" . $newarr[$i] . "</option>";

}
echo"</select>";
$conn->close();
echo"<p>Rate the importance of each of the following factors from 1-5:</p>

High Salary:<br>
<input type='radio' name='salary' value='1'>1
<input type='radio' name='salary' value='2'>2
<input type='radio' name='salary' value='3'>3
<input type='radio' name='salary' value='4'>4
<input type='radio' name='salary' value='5'>5<br><br>

Job Satisfaction:<br>
<input type='radio' name='satisfaction' value='1'>1
<input type='radio' name='satisfaction' value='2'>2
<input type='radio' name='satisfaction' value='3'>3
<input type='radio' name='satisfaction' value='4'>4
<input type='radio' name='satisfaction' value='5'>5<br><br>

Plentiful Job Opportunities:<br>
<input type='radio' name='opportunities' value='1'>1
<input type='radio' name='opportunities' value='2'>2
<input type='radio' name='opportunities' value='3'>3
<input type='radio' name='opportunities' value='4'>4
<input type='radio' name='opportunities' value='5'>5<br><br>

Useful Career Skills:<br>
<input type='radio' name='usefullness' value='1'>1
<input type='radio' name='usefullness' value='2'>2
<input type='radio' name='usefullness' value='3'>3
<input type='radio' name='usefullness' value='4'>4
<input type='radio' name='usefullness' value='5'>5<br><br>
<input type='submit' onclick='myFunction()'>
</form>";

?>
</div>
</div>