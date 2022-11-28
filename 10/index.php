<?php
    $horas = $_GET["horas"];
    $minutos = $_GET["minutos"];
    $segundos = $_GET["segundos"];

    $costoxseg = 0.25;

    $total_segundos = (3600 * $horas + 60 * $minutos + $segundos);
    $costo_total = $total_segundos * $costoxseg;
    
    ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>HORAS, MINUTOS & SEGUNDOS</title>
</head>
<body>
    <div class="container">
    <h1>HORAS, MINUTOS & SEGUNDOS</h1>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
	<div class="container">
    Horas: <?php echo $horas ?>
    <br>
	Minutos: <?php echo $minutos ?> 
	<br>
    Segundos: <?php echo $segundos ?>
	<br>
    Costo x Segundo: $<?php echo $costoxseg ?>
    <br>
    <p></p>
	Costo Total: $<?php echo $costo_total ?> 
	<br>
</div>
</body>
</html>

<!-- http://lab2.com/10/index.php?horas=1&minutos=20&segundos=10 -->