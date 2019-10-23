<?php
include_once"conexion.php";

echo $id_user=$_GET['id'];


//$consulta = "DELETE FROM usuarios WHERE ID=$id_user";

//Ejecutar la consulta
$result = mysqli_query($con, "delete from usuarios where id_user= '".$id_user."'" );

//redirigir nuevamente a la página para ver el resultado
header("location: tabla.php");

?>