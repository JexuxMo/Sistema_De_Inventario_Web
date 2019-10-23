<?php

    include_once"conexion.php";

    if($_POST['accion'] == 'modificar')
    {
        $id = $_POST['id'];
        $idCajero = $_POST['id_cajero'];
        $idProducto = $_POST['id_producto'];
        $descripcion = $_POST['descripcion'];
        $cantidad = $_POST['cantidad'];
        $precioUnitario = $_POST['precio_unitario'];
        $total = $_POST['total'];
    }
    else if($_POST['accion'] == 'agregar')
    {
        session_start();
        $idCajero= $_SESSION["id_user"];

        $idProducto = $_POST['id_producto'];
        $cantidad = $_POST['cantidad'];

    }
    //else if($_POST['accion'] == 'cobrar')
    //{

    //}
    

    switch($_POST['accion'])
    {
        case 'modificar':
            $result = mysqli_query($con, "call ModificarCaja(".$id.","
             .$idCajero.",'".$idProducto."','".$descripcion."',".$cantidad.",
             ".$precioUnitario.",".$total.")");
            header("location:tabla_caja.php");
            break;
        case 'agregar':
            $result = mysqli_query($con, "call ProcesaVenta(".$idCajero.",'"
            .$idProducto."',".$cantidad.")" );
            $result2 = mysqli_query($con, "call AltaVentas(".$idCajero.",'"
            .$idProducto."',".$cantidad.")" );

            header("location:tabla_caja.php");
            break;
        case 'cobrar':
            $result = mysqli_query($con,"TRUNCATE table caja");
            header("location:tabla_caja.php");
            break;
    }
?>