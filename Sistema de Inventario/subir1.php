<!DOCTYPE html>
 
	<?php
		session_start();
	$n= $_SESSION["nombre"];
include_once"conexion.php";
	?>
	<h2>	<br>Bienvenido: <?php echo $n;?></h2>
	<?php
	include_once"menu.html";
	
	?>
	<br>
	<br>
  <body>
  <br>
  <h1>Importando archivo CSV</h1>
  <form action='control.php' method='post' enctype="multipart/form-data">
   Importar Archivo : <input type='file' name='sel_file' size='20'>
   <input type='submit' name='submit' value='submit'>
  </form>
  
  
	<h2>	<br>Tabla de usuarios</h2>
	<form method="POST" action="borrar.php"> 
		<table border="1" name="tabla1">
 			<tr>
				<td>ID_MAESTRO</td>
				<td>MATRICULA</td>
				<td>NOMBRE</td>
				<td>OFERTA_EDUC</td>
				<td>MATERIA</td>
				<td>COSTOXHORA</td>
				<td>SEXO</td>
				<td>EDAD</td>
				<td>FECHA_NACIM</td>
				<td>LUGAR_NACI</td>
				<td>PUESTO</td>
				<td>GRADO_ESTUD</td>
				<td>GRADO_ESTUD_EXTRA</td>
				<td>ESTADO_CIV</td>
				<td>ESTUDIA</td>
				<td>NOM_ESTUDIO</td>
				<td>FECHA_INGRESO</td>
				<td>ANTIGUEDAD</td>
				<td>STATUS</td>
			    <td>FECHA_BAJA</td>
			    <td>ELIMINAR</td>
			    <td>MODIFICAR</td>
			</tr>
			
			
			
			<?php 

					$sql="SELECT * from maestros_general2";
				

				$result=mysqli_query($con,$sql);
				while($ver=mysqli_fetch_row($result)){ 

					$datos=$ver[0]."||".
						   $ver[1]."||".
						   $ver[2]."||".
						   $ver[3]."||".
					       $ver[4]."||".
						   $ver[5]."||".
						   $ver[7]."||".
						   $ver[8]."||".
						   $ver[9]."||".
						   $ver[10]."||".
						   $ver[11]."||".
						   $ver[12]."||".
						   $ver[13]."||".
						   $ver[14]."||".
						   $ver[15]."||".
						   $ver[16]."||".
						$ver[17]."||".
						$ver[18]."||".
						$ver[19]."||";
			 ?>
			<tr>
				<td> <?php echo $ver[0] ?></td>
				<td><?php echo $ver[1] ?></td>
				<td><?php echo $ver[2] ?></td>
				<td><?php echo $ver[3] ?></td>
				<td><?php echo $ver[4] ?></td>
                <td><?php echo $ver[5] ?></td>
                <td><?php echo $ver[6] ?></td>
                <td><?php echo $ver[7] ?></td>
                <td><?php echo $ver[8] ?></td>
                <td><?php echo $ver[9] ?></td>
                <td><?php echo $ver[10] ?></td>
                <td><?php echo $ver[11] ?></td>
                <td><?php echo $ver[12] ?></td>
                <td><?php echo $ver[13] ?></td>
                <td><?php echo $ver[14] ?></td>
                <td><?php echo $ver[15] ?></td>
                <td><?php echo $ver[16] ?></td>
                <td><?php echo $ver[17] ?></td>
                <td><?php echo $ver[18] ?></td>
                <td><?php echo $ver[19] ?></td>
                <td> <a href="borrar.php?id=<?php echo $ver[0];?>">Eliminar</a>
				</td>
				<td>

					  <a href="modificar.php?id=<?php echo $ver[0];?>">Modificar </a>
					  
</td>
				
							</tr>
			<?php 
		}
			 ?>

			
			
			
	</table>
	</form>
 </body>
</html>