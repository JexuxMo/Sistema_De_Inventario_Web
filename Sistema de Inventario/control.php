<?php
 
//conexiones, conexiones everywhere

include_once"conexion.php";
if($con->connect_error)
{
	die("LA CONEXION FALLO".$con->connect_error);
}
    if(isset($_POST['submit']))
    {
        //Aquí es donde seleccionamos nuestro csv
         $fname = $_FILES['sel_file']['name'];
         echo 'Cargando nombre del archivo: '.$fname.' <br>';
         $chk_ext = explode(".",$fname);
 
         if(strtolower(end($chk_ext)) == "csv")
         {
             //si es correcto, entonces damos permisos de lectura para subir
             $filename = $_FILES['sel_file']['tmp_name'];
             $handle = fopen($filename, "r");
 
             while (($data = fgetcsv($handle, 1000, ",")) !== FALSE)
             {
			 $sql_update = "DELETE from maestros_general2 where matricula ='".$data[0]."'";
				  mysqli_query($con,$sql_update) or die('Error: '.mysqli_error());
               //Insertamos los datos con los valores...
                $sql = "INSERT into maestros_general2 (matricula,nombre,oferta_educ,materia,costo_hora,sexo,edad,fecha_nacimiento,lugar_nacimiento,puesto,grado_estudios,grado_estudios_extras,estado_civil,estudia,nom_estudio,fecha_ingreso,antiguedad,status,fecha_baja)values('".$data[0]."','".$data[1]."','".$data[2]."','".$data[3]."','".$data[4]."','".$data[5]."','".$data[6]."','".$data[7]."','".$data[8]."','".$data[9]."','".$data[10]."','".$data[11]."','".$data[12]."','".$data[13]."','".$data[14]."','".$data[15]."','".$data[16]."','".$data[17]."','".$data[18]."')";
                mysqli_query($con,$sql) or die('Error3: '.mysqli_error());
             }
             //cerramos la lectura del archivo "abrir archivo" con un "cerrar archivo"
             fclose($handle);
			  echo "<script>
                alert('importacion con Exito');
               window.location= 'subir1.php'
 </script>";
         }
         else
         {
            //si aparece esto es posible que el archivo no tenga el formato adecuado, inclusive cuando es cvs, revisarlo para             
//ver si esta separado por " , "
             echo "Archivo invalido!";
         }
    }
 
?>