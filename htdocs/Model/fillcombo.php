<?php
function fillcombo($name,$table,$conn){
$sql = "SELECT $name FROM $table";
$result = $conn->query($sql);





foreach($result as $course){
$arr[] =  $course[$name];
 
}
//echo $arr[7];
//$newarr = array_unique($arr);
//echo $newarr[2];
$newarr = array();
foreach($arr as $key=>$val) {   
    $newarr[$val] = true;
}
$newarr = array_keys($newarr);
return $newarr;
}

?>