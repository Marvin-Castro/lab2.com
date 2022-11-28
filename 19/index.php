<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Ejercicio 18</title>

</head>
<body>
<center><h1>NUMEROS ENCRIPTADOS</h1></center>
    <div class="container-sm">
        <table class="table table-primary table-striped table-hover table-bordered table-sm table-responsive-sm">
            <thead>
                <tr>
                    <th scope="col">Número</th>
                    <th scope="col">Encriptado</th> 
                    <th scope="col">Ver</th>
                    <th scope="col">Modal</th>
                </tr>
            </thead>
            <tbody>
            <?php for ($i=0; $i<=100; $i++){
                $hash = md5($i);
                ?>
            <tr>
                    <th scope="row"><?php echo $i?> </th>
                    <td scope="row"><?php echo $hash?> </td>
                    <td> <a href="encriptado2.php?num=<?php echo $i?>"><button type="button" class="btn btn-primary">Ver</button></a> </td>
                    <td> 
                       <!-- Button trigger modal -->
                       <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $i?>">
                        Ver Modal
                       </button>
                       
                       <!-- Modal -->
                       <div class="modal fade" id="exampleModal<?php echo $i?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog        ">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modal Números Encriptados</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                <!-- AQUI SE COLOCA EL CODIGO DEL RESULTADO DENTRO DEL MODAL-->
                                <?php
                                   // $hash = md5($num);
                                    echo "El Número $i con md5 es $hash";
                                    ?>
    
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                       </div> 
                </tr>
               <?php     }?>
            </tbody>
            
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
