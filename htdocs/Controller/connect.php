<?php 
function connect(){

$servername = "sql213.epizy.com";
$username = "epiz_24809542";
$password = "eYSRn38AyDF";
$dbname = "epiz_24809542_CoursesAndCareers";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    
    die("Connection failed: " . $conn->connect_error);
    
}

return $conn;
    }

?>