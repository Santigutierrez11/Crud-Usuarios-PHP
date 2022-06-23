<!DOCTYPE html>

<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD PHP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<?php 
    include ('./conexion.php');

    $id = $_GET['id'];

    $consulta = "SELECT * FROM datos WHERE id = '$id'";
    $datos = mysqli_query($conn, $consulta);
    $row = mysqli_fetch_array($datos);
?>
<body>
    <div class="container">
        <nav class="navbar navbar-dark  bg-dark">
            <div class="container">
                <a href="index.php" class="navbar-brand">PHP MySQL CRUD</a>
            </div>
        </nav>
        <div class="container p-4">
            <div class="row">
                <div class="col-md-4 mx-auto">
                    <div class="card card-body">
                        <form action="./update.php" name="form" method="POST">
                            <div class="form-group">
                                ID <input type="text"  name="id" class="form-control" value="<?php echo $row['id'] ?>" autocomplete="off" autofocus>
                            </div>
                            <div class="form-group">
                                Nombre<input type="text" name="nombre" class="form-control" value="<?php echo $row['nombre'] ?>" autocomplete="off" required>
                            </div>
                            <div class="form-group">
                                Direccion<input type="text" name="direcion" class="form-control" value="<?php echo $row['direcion'] ?>" autocomplete="off" required>
                            </div>
                            <div class="form-group">
                                Telefono<input type="text" name="telefono" class="form-control" value="<?php echo $row['telefono'] ?>" autocomplete="off" required>
                            </div>
                            <button class="btn btn-success btn-block" name="update">
                                Actualizar
                            </button>
                            <a href="./index.php" class="btn btn-danger btn-block">Cancelar</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
</body>

</html>