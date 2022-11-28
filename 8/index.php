<?php
    $nombre1 = $_GET["nombre1"];
    $nombre2 = $_GET["nombre2"];
    $nombre3 = $_GET["nombre3"];

    $inv1 = $_GET["inv1"];
    $inv2 = $_GET["inv2"];
    $inv3 = $_GET["inv3"];

    $totalinversion =  $inv1 +  $inv2 +  $inv3;
    $porc1= ($inv1 / $totalinversion) * 100;
	$porc2 = ($inv2 / $totalinversion) * 100;
    $porc3 = ($inv3 / $totalinversion) * 100;  
    ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>INVERSION  - PORCENTAJE</title>
</head>
<body>
<h1>INVERSION  - PORCENTAJE</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
	<div class="container">
    Nombre 1: <?php echo $nombre1 ?>
    <br>
	Inversión: <?php echo $inv1 ?> 
	<br>
    Porcentaje Accionista: <?php echo $porc1 ?>%
	<br>
    <p></p>
    Nombre 2: <?php echo $nombre2 ?>
    <br>
	Inversión: <?php echo $inv2 ?> 
	<br>
    Porcentaje Accionista: <?php echo $porc2 ?>% 
	<br>
    <p></p>
    Nombre 3: <?php echo $nombre3 ?>
    <br>
	Inversión: <?php echo $inv3 ?> 
	<br>
    Porcentaje Accionista: <?php echo $porc3 ?>%
	<br>
</div>
</body>
</html>

<!-- http://lab2.com/8/index.php?nombre1=martin&inv1=200&nombre2=jose&inv2=300&nombre3=pablo&inv3=500 -->
