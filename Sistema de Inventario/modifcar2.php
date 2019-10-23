<?php
include_once"conexion.php";

echo $id=$_GET["id"];
  echo    $nombre=$_POST["nombre"];
  echo    $ap=$_POST["ap"];
echo    $am=$_POST["am"];
echo    $nomUser=$_POST["user"];
echo    $passwd=$_POST["password"];
echo    $tipoUser=$_POST["tipo"];



//$consulta = "DELETE FROM usuarios WHERE ID=$id_user";

//Ejecutar la consulta
$result = mysqli_query($con,  "call ModificarUsuario(".$id.",'"
 .$nombre."','".$ap."','".$am."','".$nomUser."','".$passwd."',"
 .$tipoUser.")");

//redirigir nuevamente a la página para ver el resultado
header("location: tabla.php");

?>