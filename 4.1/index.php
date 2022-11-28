<?php
    $pagoxh = $_GET["pagoxh"];
    $horast = $_GET["horast"];

    $salariobruto = $horast * $pagoxh;
    $descuento = 0.2 * $salariobruto;
    $salarioneto = $salariobruto - $descuento;  
    ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous"> -->

    <title>CALCULO DE SALARIO NETO</title>
</head>
<body>
    <table class="table table-primary table-striped table-hover table-bordered table-sm table-responsive-sm">
        <thead>
            <tr>
                <th scope="col">Horas Trabajadas</th>
                <th scope="col">Pago por Hora</th>
                <th scope="col">Salario Bruto</th>
                <th scope="col">Descuento</th>
                <th scope="col">Salario Neto</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row"><?php echo $horast ?></th>
                <td><?php echo $pagoxh ?></td>
                <td><?php echo $salariobruto ?></td>
                <td><?php echo $descuento ?></td>
                <td><?php echo $salarioneto ?></td>
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
    <!--<script src="..js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">        
    </script> -->

</body>
</html>

<!--http://lab2.com/4.1/index.php?pagoxh=50&horast=45-->

