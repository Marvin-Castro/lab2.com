<?php
$limite = $_GET["limite"];
$tipo_tarjeta = $_GET["tipo_tarjeta"];


if ($tipo_tarjeta == 1) {
    $aumento = $limite * .25;
    $n_limite = $limite  + $aumento;
}
else if ($tipo_tarjeta == 2) {
    $aumento = $limite * .35;
    $n_limite = $limite + $aumento;
}
else if ($tipo_tarjeta == 3) {
    $aumento = $limite * .40;
    $n_limite = $limite + $aumento;
}
else {
    $aumento = $limite * .50;
    $n_limite = $limite + $aumento;
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Ejercicio 15</title>
</head>
<body>
    <div class="container">
    <h1>BANCO EL PUEBLO</h1>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
	<div class="container">
    Limite: <?php echo $limite ?>
    <br>
	Tipo de Tarjeta: <?php echo $tipo_tarjeta ?>
    <br>
    Aumento de Credito: $<?php echo $aumento ?>
    <br>
    Nuevo Limite de la Tarjeta: $<?php echo $n_limite ?>
    <br>
</div>
</body>
</html>

<!-- http://lab2.com/15/index.php?limite=1000&tipo_tarjeta=2 -->