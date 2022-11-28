<?php
    $radio = $_GET["radio"];
	$area = 3.1415927 * $radio * $radio;
   // echo "El Área del Círculo es: ".$area; 
    ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>AREA DE UN CIRCULO</title>
</head>
<body>
<h1>AREA DE UN CIRCULO</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
	<div class="container">
    El Área del Círculo es: <?php echo $area ?> 
</div>
</body>
</html>

<!-- http://lab2.com/3/index.php?radio=5 -->