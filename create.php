<?php
    include ('./conexion.php');

    if (isset($_POST['send'])){
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $direccion = $_POST['direccion'];
        $telefono = $_POST['telefono'];

        $consulta = "INSERT INTO datos (id, nombre, direcion, telefono) VALUES ('$id', '$nombre', '$direccion', '$telefono')";
        if (mysqli_query($conn, $consulta)) {
            header('Location:index.php');
        }else {
            echo('error usted no sirve');
        }
    }
