<?php
include_once"conexion.php";

$id = $_GET['id_caja'];

//Ejecutar la consulta
$result = mysqli_query($con, "call BorrarCaja('".$id."');" );
           
//redirigir nuevamente a la página para ver el resultado
header("location:tabla_caja.php");

?>