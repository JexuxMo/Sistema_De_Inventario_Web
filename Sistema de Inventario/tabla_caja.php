<html>

	<?php
		session_start();
		$n= $_SESSION["Nombre"];
		$idCajero= $_SESSION["id_user"];
		include_once"conexion.php"; 

	?>
	<h2>	<br>Bienvenido: <?php echo $n;?></h2>
	<?php
		include_once"menu.html";
	?>
	<br>
	
	<h2>	<br>Tabla de caja</h2>

	<?php
		$sql="SELECT * from caja where IdCajero = ".$idCajero;
	?>
	<!-- TOTAL DE LA CAJA ---------------------------->
	<h2 align="center">
	TOTAL:
	<? 
	$sqlT="SELECT SUM(total) AS total_apagar FROM caja where IdCajero=".$idCajero;
	$result2=mysqli_query($con,$sqlT);
	$row =  mysqli_fetch_array($result2); 
	$total=$row['total_apagar'];
	echo $total;
	?>
	</h2>
	<!-- ------------------------------------------ -->

	<form method="POST" action="procesa_caja.php"> 
		<table border="1" name="tabla1">
 			<tr>
				<td>ID</td>
				
				<td>ID CAJERO</td>
				<td>ID PRODUCTO</td>
				<td>DESCRIPCION</td>
				<td>CANTIDAD</td>
				<td>PRECIO UNITARIO</td>
				<td>TOTAL</td>
				<td>FECHA</td>
				
				 
				 <td>ELIMINAR</td>
			 <td>EDITAR</td>
			</tr>
			</br>
			ID
			<input type="text" name="id_producto"/>
			Cantidad
			<input type="text" name="cantidad"/>
			<input type="submit" name="accion" value="agregar"/>

			<input type="submit" name="accion" value="cobrar">

			<?php 

				
				$sql="SELECT * from caja where IdCajero = ".$idCajero;
				

				$result=mysqli_query($con,$sql);
				while($ver=mysqli_fetch_row($result)){ 

					$datos=$ver[0]."||".
						   $ver[1]."||".
						   $ver[2]."||".
						   $ver[3]."||".
						   $ver[4]."||".
						   $ver[5]."||".
						   $ver[6]."||".
						   $ver[7]."||";
			 ?>		
			
			
			<tr>
				<td><?php echo $ver[0] ?></td>
				<td><?php echo $ver[1] ?></td>
				<td><?php echo $ver[2] ?></td>
				<td><?php echo $ver[3] ?></td>
				<td><?php echo $ver[4] ?></td>
				<td><?php echo $ver[5] ?></td>
				<td><?php echo $ver[6] ?></td>
                <td><?php echo $ver[7] ?></td>
	
	
				<td> <a href="borrar_caja.php?id_caja=<?php echo $ver[0];?>">Eliminar</a>
				</td>
				<td>

					  <a href="modificar_caja.php?id=<?php echo $ver[0];?>">Modificar </a>
					  
				</td>

				
							</tr>
			<?php 
		}
			 ?>

			
			
			
		</table>
		
	</form>
	<br/>
	
</html> 