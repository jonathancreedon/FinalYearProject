<?php 

function updsql($conn,$newcarr,$career,$highsal,$lowsal){
//https://stackoverflow.com/questions/13818472/update-one-table-based-upon-sumvalues-in-another-table-on-multiple-criteria/42523930
$lsal = $lowsal*1000;
$hsal = $highsal*1000;

//$sqlpre = "UPDATE UserUpdate
//JOIN
//(SELECT courseCode,Title
//FROM Course
//)AS c 
//SET UserUpdate.UCourse = c.courseCode
//WHERE UserUpdate.UCourse=c.Title ";

$sql = "UPDATE Course
JOIN
(SELECT UCourse,SUM(USat) AS satsum,SUM(UUse) AS usesum,COUNT(*) AS c
FROM UserUpdate
GROUP BY UCourse
) AS u ON u.UCourse = Course.Title
SET Course.scoreSatisfaction = u.satsum,Course.scoreUsefulness = u.usesum,Course.totalGrads = u.c ";

$sql2 = "UPDATE Course
SET gradSatisfaction = (scoreSatisfaction/(totalGrads*6))*100,gradUsefulness = (scoreUsefulness/(totalGrads*6))*100";

$sql3 = "INSERT INTO Career ( CName,CDesc,SalLow,SalHigh)
  VALUES ( '$career', 'Default','$lsal','$hsal')";

$sql4 = "UPDATE Career
JOIN
(SELECT UCareer,MAX(HSal) AS high,MIN(LSal) AS low
FROM UserUpdate
GROUP BY UCareer
) AS u ON u.UCareer = Career.CName
SET Career.SalLow = u.low,Career.SalHigh = u.high";

$sql5 = "UPDATE UserUpdate
JOIN
(SELECT courseCode,Title
FROM Course
)AS c
SET UserUpdate.coursePrime = c.courseCode
WHERE UserUpdate.UCourse = c.Title";

$sql6 = "UPDATE UserUpdate
JOIN
(SELECT careerCode,CName
FROM Career)AS c
SET UserUpdate.careerPrime = c.careerCode
WHERE UserUpdate.UCareer = c.CName";

$sqlins = "INSERT INTO Evaluation(courseCode,careerCode)
SELECT coursePrime,careerPrime
FROM UserUpdate
WHERE NOT EXISTS(SELECT courseCode,careerCode
FROM Evaluation
WHERE coursePrime=Evaluation.courseCode AND careerPrime=Evaluation.careerCode )";

$sql7 = "UPDATE Evaluation
JOIN
(SELECT courseCode,totalGrads
FROM Course)AS c
SET Evaluation.totalGrad = c.totalGrads
WHERE Evaluation.courseCode = c.courseCode";

$sql8 = "UPDATE Evaluation
JOIN
(SELECT coursePrime,careerPrime,COUNT(*) AS c
FROM UserUpdate
GROUP BY coursePrime,careerPrime
) AS u ON u.coursePrime = Evaluation.courseCode AND u.careerPrime=Evaluation.careerCode
SET Evaluation.gradNum = u.c ";

$sql9 = "UPDATE Evaluation
SET probability = (gradNum/(totalGrad))*100";



if($newcarr==1){
if (mysqli_query($conn, $sql3)) {
        echo "New record has been added successfully !";
        //mysqli_close($conn);
         
     } else {
        echo "Error: " . $sql3 . ":-" . mysqli_error($conn);
        //mysqli_close($conn);
         
     }
}

if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
        //mysqli_close($conn);
         
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
        //mysqli_close($conn);
         
     }

if (mysqli_query($conn, $sql2)) {
        echo "New record has been added successfully !";
        //mysqli_close($conn);
         
     } else {
        echo "Error: " . $sql2 . ":-" . mysqli_error($conn);
        //mysqli_close($conn);
         
     }
     
if (mysqli_query($conn, $sql5)) {
        echo "New record has been added successfully !";
        //mysqli_close($conn);
         
     } else {
        echo "Error: " . $sql5 . ":-" . mysqli_error($conn);
        //mysqli_close($conn);
         
     }

if (mysqli_query($conn, $sql6)) {
        echo "New record has been added successfully !";
        //mysqli_close($conn);
         
     } else {
        echo "Error: " . $sql6 . ":-" . mysqli_error($conn);
        //mysqli_close($conn);
         
     }

if (mysqli_query($conn, $sqlins)) {
        echo "New record has been added successfully !";
        //mysqli_close($conn);
         
     } else {
        echo "Error: " . $sqlins . ":-" . mysqli_error($conn);
        //mysqli_close($conn);
         
     }

if (mysqli_query($conn, $sql7)) {
        echo "New record has been added successfully !";
        //mysqli_close($conn);
         
     } else {
        echo "Error: " . $sql7 . ":-" . mysqli_error($conn);
        //mysqli_close($conn);
         
     }

if (mysqli_query($conn, $sql8)) {
        echo "New record has been added successfully !";
        //mysqli_close($conn);
         
     } else {
        echo "Error: " . $sql8 . ":-" . mysqli_error($conn);
        //mysqli_close($conn);
         
     }

if (mysqli_query($conn, $sql9)) {
        echo "New record has been added successfully !";
        //mysqli_close($conn);
         
     } else {
        echo "Error: " . $sql9 . ":-" . mysqli_error($conn);
        //mysqli_close($conn);
         
     }

return 0;

}

?>