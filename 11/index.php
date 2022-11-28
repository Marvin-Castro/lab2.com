<?php
    $cm = $_GET["cm"];
    $cm_plg = $cm * 0.39737;
    ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>CONVERSION DE CM - PULGADAS</title>
</head>
<body>
    <div class="container">
    <h1>CONVERSION DE CM - PULGADAS</h1>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
	<div class="container">
    Cm: <?php echo $cm ?>
    <br>
    ---------------------
    <br>
	Pulgadas: <?php echo $cm_plg ?> 
	<br>
</div>
</body>
</html>

<!-- http://lab2.com/11/index.php?cm=100 -->