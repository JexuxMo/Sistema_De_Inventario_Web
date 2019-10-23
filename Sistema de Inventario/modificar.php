<?php
include_once"conexion.php";

echo $id_user=$_GET["id"];
?>
<form method="POST" action="modifcar2.php?id=<?php echo $id_user; ?>"> 
		<table border="1" name="tabla1">
 			<tr>
				<td>Nombre</td>
			</tr>
			<tr>
				<td>     <input type="text" name="nombre" size="20" maxlength="20" />
		 </td>
		 <tr>
				<td>AP.Paterno</td>
			</tr>
			<tr>
				<td>     <input type="text" name="ap" size="20" maxlength="20" />
		 </td>
			</tr>
				<td>AP.Materno</td>
			</tr>
			<tr>
				<td>     <input type="text" name="am" size="20" maxlength="20" />
		 </td>
		 
			</tr>
			
			
			</tr>
				<td>Usuario</td>
			</tr>
			<tr>
				<td>     <input type="text" name="user" size="20" maxlength="20" />
		 </td>
		 
			</tr>
			
			
			</tr>
				<td>password</td>
			</tr>
			<tr>
				<td>     <input type="text" name="password" size="20" maxlength="20" />
		 </td>
		 
			</tr>
			
			
			</tr>
				<td>Tipo</td>
			</tr>
			<tr>
				<td>     <input type="text" name="tipo" size="20" maxlength="20" />
		 </td>
		 
			</tr>
			
			
			
				<tr>
				<td>     <input type="submit" size="20" maxlength="20" value="Guardar" />
				
				
		 </td>
		 
			</tr>
	</table>
	
</form>
<?
//$consulta = "DELETE FROM usuarios WHERE ID=$id_user";

//Ejecutar la consulta
//$result = mysqli_query($con, "delete from usuarios where id_user= '".$id_user."'" );

//redirigir nuevamente a la página para ver el resultado
//header("location: tabla.php");

?>