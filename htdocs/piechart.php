<!DOCTYPE html>
<html class="h-100" lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<title>Jonathan Creedon Final Year Project</title>


</head>
<body class="bg-dark h-100">
	 	
<?php include ('./View/header.php');?>	

<main class="jumbotron text-center bg-light h-75" style="margin-bottom:0;">
<header>
<h1>Course Evaluation Service</h1>
</header>


<script type="text/javascript" src="https://www.google.com/jsapi">
 </script>
 <script type="text/javascript">
    
    google.load("visualization", "1",{             
        packages: ["corechart"]
    });
 t =  "<?php echo $_GET['piec'];?>";
n = "<?php echo $_GET['piep'];?>";
b = "<?php echo $_GET['barp'];?>";
t = t.split(",");
n = n.split(",");
b = b.split(",");
function drawChart(t,n,b) {



        var data = google.visualization.arrayToDataTable
        ([
            ['Careers', 'Percentage of graduates in each career'],
            
            [t[0],parseInt(n[0])],
            [t[1],parseInt(n[1])], 
            [t[2],parseInt(n[2])],
            [t[3],parseInt(n[3])],

        ]);

         var data2 = google.visualization.arrayToDataTable
        ([
            ['Salaries', 'Graduates in this salary range'],
            
            ['0-10K',parseInt(b[0])],
            ['11-20K',parseInt(b[1])],
            ['21-30K',parseInt(b[2])],
            ['31-40K',parseInt(b[3])],
            ['41-50K',parseInt(b[4])],
            ['51-60K',parseInt(b[5])],
           

        ]);

        var options = {
            title: 'Percentage of graduates per Career', 
            is3D: true 
        };

        var options2 = {
            title: 'Salaries of graduates', 
            is3D: true 
        };

       
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        var chart2 = new google.visualization.BarChart(document.getElementById('chart_div2'));
        
        chart.draw(data, options);
        chart2.draw(data2,options2);
    }

google.setOnLoadCallback(function (){
    drawChart(t,n,b);//$piec,$piep c1,c2,p1,p2 
    })//( );drawChart
    
</script>
<div class="container text-center bg-light h-50" id="chart_div" style="width: 900px; height: 500px;"></div>
<div class="container text-center bg-light h-50" id="chart_div2" style="width: 900px; height: 500px;"></div>


</main>

<footer class="jumbotron text-center bg-dark" style="margin-bottom:0">
	
</footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>