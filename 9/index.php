<?php
    $cant_alumnos1 = $_GET["cant_alumnos1"];
    $cant_alumnos2 = $_GET["cant_alumnos2"];

    $totalalumnos =  $cant_alumnos1 +  $cant_alumnos2;
    $porc_alumnos1 = ($cant_alumnos1 / $totalalumnos) * 100;
	$porc_alumnos2 = ($cant_alumnos2 / $totalalumnos) * 100; 
    ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>ALUMNOS(A) DE LA CLASE DE DSVII</title>
</head>
<body>
<center><h1>ALUMNOS(A) DE LA CLASE DE DSVII</h1></center> 
<table class="table table-primary table-striped table-hover table-bordered table-sm table-responsive-sm">
        <thead>
            <tr>
            <th scope="col">Alumnos</th>
                <th scope="col">Alumnas</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row"><?php echo $cant_alumnos1 ?></th>
                <td><?php echo $cant_alumnos2 ?></td>
            </tr>
            <tr>
                <th scope="row"><?php echo $porc_alumnos1 ?>%</th>
                <td><?php echo $porc_alumnos2 ?>%</td>
            </tr>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>

<!-- http://lab2.com/9/index.php?cant_alumnos1=25&cant_alumnos2=20 -->