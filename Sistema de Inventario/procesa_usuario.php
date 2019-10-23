<?php

    include_once"conexion.php";

    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $ap = $_POST['ap'];
    $am = $_POST['am'];
    $nomUser = $_POST['username'];
    $passwd = $_POST['pass'];
    $tipoUser = $_POST['tipouser'];


    switch($_POST['menu'])
    {
        case 'regresar':
            header("location:index.html");
            break;
        case 'modificar':
            $result = mysqli_query($con, "call ModificarUsuario(".$id.",'"
             .$nombre."','".$ap."','".$am."','".$nomUser."','".$passwd."',"
             .$tipoUser.")" );
            header("location:registrar.php");
            break;
        case 'guardar':
            $result = mysqli_query($con, "call AltaUsuario(".$id.",'"
             .$nombre."','".$ap."','".$am."','".$nomUser."','".$passwd."',"
             .$tipoUser.")" );
            header("location:registrar.php");
            break;
        case 'eliminar':
            $result = mysqli_query($con, "call BorrarUsuario(".$id.")" );
            header("location:registrar.php");
            break;
    }
?>