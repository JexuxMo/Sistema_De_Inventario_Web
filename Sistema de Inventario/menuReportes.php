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
	
	<h2>	<br>Reportes de usuarios</h2>
	<form method="POST" action="reporte.php" name="Form1"> 
	
		Cajeros

		<select name="dynamic_data">
			<option value=""><-- Seleccionar usuario --></option>
			<?php
				$sql = "SELECT id_user,User FROM usuarios";
				$result=mysqli_query($con,$sql);

				//$i=0;
				while($row = mysqli_fetch_array($result)) {
			?>
			<option value="<?php echo $row["id_user"];?>"><?php echo
				$row["User"];?>
			</option>
			<?php
				//$i++;
				}
			?>		
		</select>
		<!-- <input type="submit" name="genera" value="generar Reporte"/> -->
		<input name="btnSubmit" type="submit" value="generar">
	</form>
</html> 