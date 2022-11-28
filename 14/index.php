<?php
$cant_años = $_GET["cant_años"];


if ($cant_años == 1) {
    $bono = $cant_años * 100;
}
else if ($cant_años == 2) {
    $bono = $cant_años * 200;
}
else if ($cant_años == 3) {
    $bono = $cant_años * 300;
}
else if ($cant_años == 4) {
    $bono = $cant_años * 400;
}
else if ($cant_años == 5) {
    $bono = $cant_años * 500;
}
else if ($cant_años > 5) {
    $bono = $cant_años * 1000;
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Ejercicio 14</title>
</head>
<body>
    <div class="container">
    <h1>Bono Empresa</h1>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
	<div class="container">
    Cantidad de Años: <?php echo $cant_años ?>
    <br>
	Bono: $<?php echo $bono ?>
    <br>
</div>
</body>
</html>

<!-- http://lab2.com/14/index.php?cant_años=7 -->
