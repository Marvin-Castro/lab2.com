<?php
    $nombre = $_GET["nombre"];
    $parcial1 = $_GET["parcial1"];
    $parcial2 = $_GET["parcial2"];
    $parcial3 = $_GET["parcial3"];

    $examenfinal = $_GET["examenfinal"];

    $trabajofinal = $_GET["trabajofinal"];

	$promedio = ($parcial1 + $parcial2 + $parcial3) / 3;
    $promedio_final = ($promedio * .55) + ($examenfinal * .30) + ($trabajofinal * .15)
 
    ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>CALIFICACION FINAL - ALGORITMOS</title>
</head>
<body>
	<table class="table table-primary table-striped table-hover table-bordered table-sm table-responsive-sm">
        <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Parcial 1</th>
                <th scope="col">Parcial 2</th>
                <th scope="col">Parcial 3</th>
                <th scope="col">Examen Final</th>
                <th scope="col">Trabajo Final</th>
                <th scope="col">Promedio Final</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row"><?php echo $nombre ?></th>
                <td><?php echo $parcial1 ?></td>
                <td><?php echo $parcial2 ?></td>
                <td><?php echo $parcial3 ?></td>
                <td><?php echo $examenfinal ?></td>
                <td><?php echo $trabajofinal ?></td>
                <td><?php echo $promedio_final ?></td>
            </tr>
            <tr>
                <th scope="row"></th>
                <td></td>
                <td></td>
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

<!-- http://lab2.com/6/index.php?nombre=Jose&parcial1=10&parcial2=9&parcial3=8&examenfinal=9&trabajofinal=10  -->