<?php

    include_once"conexion.php";

    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $cantidad = $_POST['cantidad'];
    $precio_unidad = $_POST['precio_unidad'];

    switch($_POST['accion'])
    {
        case 'modificar':
            $result = mysqli_query($con, "call ModificarInventario('".$id."','"
            .$nombre."','".$descripcion."',".$cantidad.",".$precio_unidad.")");
            header("location:tabla_inventario.php");
            break;
        case 'guardar':
            $result = mysqli_query($con, "call AltaInventario('".$id."','"
             .$nombre."','".$descripcion."',".$cantidad.",".$precio_unidad.")" );
            header("location:tabla_inventario.php");
            break;
    }
?>