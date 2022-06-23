<?php 

    include ('./conexion.php');

    $id = $_GET['id'];
    $consulta = "DELETE FROM datos WHERE id = '$id'";
    if(mysqli_query($conn, $consulta)){
        header('Location:index.php');
    }