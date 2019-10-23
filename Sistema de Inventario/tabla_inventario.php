<html>

	<?php
		session_start();
		$n= $_SESSION["Nombre"];
		include_once"conexion.php";
	?>
	<h2>	<br>Bienvenido: <?php echo $n;?></h2>
	<?php
		include_once"menu.html";
	?>
	<br>
	
	<h2>	<br>Tabla de inventario</h2>
	<form method="POST" action="registrar_inventario.php"> 
		<table border="1" name="tabla1">
 			<tr>
				<td>ID</td>
				
				<td>NOMBRE</td>
				<td>DESCRIPCION</td>
				<td>CANTIDAD</td>
				<td>PRECIO UNITARIO</td>
				<td>FECHA DE REGISTRO</td>
				
				 
				 <td>ELIMINAR</td>
			 <td>EDITAR</td>
			</tr>
			</br>
			<button>REGISTRAR PRODUCTO</button>
			<?php 

					$sql="SELECT * from inventario";
				

				$result=mysqli_query($con,$sql);
				while($ver=mysqli_fetch_row($result)){ 

					$datos=$ver[0]."||".
						   $ver[1]."||".
						   $ver[2]."||".
						   $ver[3]."||".
					       $ver[4]."||".
						   $ver[5]."||";
			 ?>
			<tr>
				<td> <?php echo $ver[0] ?></td>
				<td><?php echo $ver[1] ?></td>
				<td><?php echo $ver[2] ?></td>
				<td><?php echo $ver[3] ?></td>
				<td><?php echo $ver[4] ?></td>
                <td><?php echo $ver[5] ?></td>
	
	
				<td> <a href="borrar_inventario.php?id_inventario=<?php echo $ver[0];?>">Eliminar</a>
				</td>
				<td>

					  <a href="modificar_inventario.php?id=<?php echo $ver[0];?>">Modificar </a>
					  
				</td>

				
							</tr>
			<?php 
		}
			 ?>

			
			
			
	</table>
	</form>
</html> 