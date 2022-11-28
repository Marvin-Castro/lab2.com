<?php
    $nombre_hospital = $_GET["nombre_hospital"];
    $presupuesto_anual = $_GET["presupuesto_anual"];

	$preginecologia = $presupuesto_anual * .40;
    $pretraumatologia = $presupuesto_anual * .30;
    $prepediatria = $presupuesto_anual * .30;
    ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>PRESUPUESTO HOSPITAL</title>
</head>
<body>
	<table class="table table-primary table-striped table-hover table-bordered table-sm table-responsive-sm">
        <thead>
            <tr>
                <th scope="col">Hospital</th>
                <th scope="col">Presupuesto Anual</th>
                <th scope="col">Ginecología</th>
                <th scope="col">Pediatría</th>
                <th scope="col">Traumatologia</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row"><?php echo $nombre_hospital ?></th>
                <td><?php echo $presupuesto_anual ?></td>
                <td><?php echo $preginecologia ?></td>
                <td><?php echo $prepediatria ?></td>
                <td><?php echo $pretraumatologia ?></td>
            </tr>
            <tr>
                <th scope="row"></th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>

<!-- http://lab2.com/7/index.php?nombre_hospital=Hospital%20Cruz&presupuesto_anual=100000  -->