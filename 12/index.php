<?php
    $lb = $_GET["lb"];
    $lb_kg = $lb / 2.2046;
    ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>CONVERSION DE LIBRA - KILOGRAMOS</title>
</head>
<body>
    <div class="container">
    <h1>CONVERSION DE LIBRA - KILOGRAMOS</h1>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
	<div class="container">
    Libras: <?php echo $lb ?>
    <br>
    ---------------------
    <br>
	Kilogramos: <?php echo round($lb_kg,2) ?> 
    <!-- CON LA OPCION ROUND(RESULTADO,2) SE REDONDEA UN DECIMAL GRANDE A SOLO 2 DECIMALES-->
	<br>
</div>
</body>
</html>

<!-- http://lab2.com/12/index.php?lb=220 -->
