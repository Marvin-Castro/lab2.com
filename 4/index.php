<?php
    $pagoxh = $_GET["pagoxh"];
    $horast = $_GET["horast"];

	$salariobruto = $horast * $pagoxh;
	$descuento = 0.2 * $salariobruto;
	$salarioneto = $salariobruto - $descuento;

	//echo "El Salario Neto es B/.".$salarioneto; 
	echo "<br>";   
    ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>CALCULO DE SALARIO NETO</title>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
	<div class="container">
    Pago x Hora: <?php echo $pagoxh ?>
	<br>
	Horas Trabajadas: <?php echo $horast ?> 
	<br>
	<p></p>
	El Salario Neto es: B/.<?php echo $salarioneto ?> 
</div>
</body>
</html>

<!--http://lab2.com/4.1/index.php?pagoxh=50&horast=45-->