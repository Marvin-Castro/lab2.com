<?php
    $nombre = $_GET["nombre"];
    $cal1 = $_GET["cal1"];
    $cal2 = $_GET["cal2"];
    $cal3 = $_GET["cal3"];
    $cal4 = $_GET["cal4"];
    $cal5 = $_GET["cal5"];

	$promedio = ($cal1 + $cal2 + $cal3 + $cal4 + $cal5) / 5;
	//echo "El Promedio de $nombre es: ".$promedio;  
    ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>PROMEDIO CALIFICACIONES</title>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
	<div class="container">
    Nombre: <?php echo $nombre ?>
	<br>
	Promedio: <?php echo $promedio ?> 
	<br>
</div>
</body>
</html>

<!-- http://lab2.com/5/index.php?nombre=Jose&cal1=5&cal1=4&cal2=4&cal3=5&cal4=3&cal5=2 -->