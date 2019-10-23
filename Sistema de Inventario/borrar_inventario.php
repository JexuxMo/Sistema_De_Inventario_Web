<?php
include_once"conexion.php";

$id_inventario = $_GET['id_inventario'];

//Ejecutar la consulta
$result = mysqli_query($con, "call BorrarInventario('".$id_inventario."');" );
           
//redirigir nuevamente a la página para ver el resultado
header("location:tabla_inventario.php");

?>