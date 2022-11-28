<?php
$cant_personas = $_GET["cant_personas"];

//MENOR A 200
$costoxplatillo = 95.00;

//SI LA CANTIDAD DE PERSONAS ES MAYOR A 200 PERO MENOR O IGUAL A 300 cant_personas>200 & cant_personas<=300
$costoxplatillo_dos = 85.00;

//MAYOR A 300 --- cant_personas>300
$costoxplatillo_tres = 75.00;

if ($cant_personas <=200) {
    $presupuesto = $cant_personas * $costoxplatillo;
}
else if ($cant_personas>200 & $cant_personas<=300) {
    $presupuesto = $cant_personas * $costoxplatillo_dos;
}
else if ($cant_personas >300) {
    $presupuesto = $cant_personas * $costoxplatillo_tres;
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Ejercicio 13</title>
</head>
<body>
    <div class="container">
    <h1>Presupuesto Banquetes - La Langosta Ahumada</h1>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
	<div class="container">
    Cantidad de Personas: <?php echo $cant_personas ?>
    <br>
	Presupuesto: $<?php echo $presupuesto ?>
    <br>
</div>
</body>
</html>

<!-- http://lab2.com/13/index.php?cant_personas=120 -->
