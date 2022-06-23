<?php
    include ('./conexion.php');

    if(isset($_POST['update'])){
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $direcion = $_POST['direcion'];
        $telefono = $_POST['telefono'];

        $consulta = "UPDATE datos SET id = '$id', nombre = '$nombre', direcion = '$direcion', telefono = '$telefono' WHERE id = '$id'";
        if(mysqli_query($conn, $consulta)){
            header('Location:index.php');
        }
    }