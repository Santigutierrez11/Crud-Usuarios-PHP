<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>PHP MySQL CRUD</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<?php 
    include ('./conexion.php');
    $consulta = "SELECT * FROM datos";
    $datos = mysqli_query($conn, $consulta);
?>

<body>
    <div class="container">
        <nav class="navbar navbar-dark bg-dark">
            <div class="container">
                <a href="index.php" class="navbar-brand">PHP MySQL CRUD</a>
            </div>
        </nav>
        <div class="container p-4">            
            <div class="row">
                <div class="col-md-4 mx-auto">
                    <div class="card card-body">
                        <form method="post" name="form" action="create.php">
                            <div class="form-group">
                                <input type="text" name="id" class="form-control" placeholder="Ingresa ID" autocomplete="off" autofocus>
                            </div>
                            <div class="form-group">
                                <input type="text" name="nombre" class="form-control" placeholder="Ingresa nombre" autocomplete="off" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="direccion" class="form-control" placeholder="Ingresa direccion" autocomplete="off" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="telefono" class="form-control" placeholder="Ingresa telefono" autocomplete="off" required>
                            </div>
                            <input type="submit" class="btn btn-success btn-block" name="send" value="Agregar">
                            <input type="reset" class="btn btn-secondary btn-block" value="Limpiar">
                        </form>
                    </div>
                </div>
                
                <div class="col-md-8 mx-auto">
                    <table class="table table-hover ">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Dirección</th>
                                <th>Telefono</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while($row= mysqli_fetch_array($datos)) { ?>
                                <tr>
                                    <th><?php echo $row['id']?></th>
                                    <th><?php echo $row['nombre']?></th>
                                    <th><?php echo $row['direcion']?></th>
                                    <th><?php echo $row['telefono']?></th>
                                    <th>
                                        <a href="./actualizar.php?id=<?php echo $row['id'] ?>" class="btn btn-warning">editar</a>
                                        <a href="./delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">eliminar</a>
                                    </th>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
</body>

</html>