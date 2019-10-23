<?php
include_once"conexion.php";

?>
<form method="POST" action="procesa_caja.php"> 
		<table border="1" name="tabla1">
		<tr>
			<td>Id</td>
		</tr>
		<tr>
			<td>     <input type="text" name="id" size="50" maxlength="20" />
			</td>
		</tr>
		<tr>
			<td>Id cajero</td>
		</tr>
		<tr>
			<td>     <input type="text" name="id_cajero" size="20" maxlength="20" />
			</td>
		</tr>
		<tr>
			<td>Id producto</td>
		</tr>
		<tr>
			<td>     <input type="text" name="id_producto" size="20" maxlength="100" />
			</td>
		</tr>
		<tr>
			<td>Descripcion</td>
		</tr>
		<tr>
			<td>     <input type="text" name="descripcion" size="20" maxlength="100" />
			</td>
		</tr>
		<tr>
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
			<td>Total</td>
		</tr>
		<tr>
			<td>     <input type="text" name="total" size="20" maxlength="20" />
			</td>
		 
		</tr>
		<tr>
			<td>     <input type="submit" size="20" maxlength="20" name="accion" value="guardar" />
				
				
		 	</td>
		 
		</tr>
	</table>
	
</form>