<?php
include_once"conexion.php";

$id_inventario=$_GET["id"];
?>
<form method="POST" action="procesa_inventario.php"> 
		<table border="1" name="tabla1">
		<tr>
			<td>Id</td>
		</tr>
		<tr>
			<td>     <input type="text" name="id" size="20" maxlength="20" value="<?php echo $id_inventario; ?>" />
			</td>
		<tr>
		<tr>
			<td>Nombre</td>
		</tr>
		<tr>
			<td>     <input type="text" name="nombre" size="20" maxlength="20" />
			</td>
		<tr>
			<td>Descripcion</td>
		</tr>
		<tr>
			<td>     <input type="text" name="descripcion" size="20" maxlength="100" />
			</td>
		</tr>
			<td>Cantidad</td>
		</tr>
		<tr>
			<td>     <input type="text" name="cantidad" size="20" maxlength="20" />
			</td>
		 
		</tr>
			
		</tr>
			<td>Precio de unidad</td>
		</tr>
		<tr>
			<td>     <input type="text" name="precio_unidad" size="20" maxlength="20" />
		 	</td>
		 
		</tr>

		<tr>
			<td>     <input type="submit" size="20" maxlength="20" name="accion" value="modificar" />
				
				
		 	</td>
		 
		</tr>
	</table>
	
</form>