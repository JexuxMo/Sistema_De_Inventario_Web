<?php
session_start();
?>
<?php
include_once"conexion.php";
if($con->connect_error)
{
	die("LA CONEXION FALLO".$con->connect_error);
}
  $user=$_POST['login'];
   $password=$_POST['password'];
$result = mysqli_query($con, "SELECT * FROM usuarios where User = '".$user."' AND Password = '".$password."'");
 if($result){
   if(mysqli_num_rows($result) > 0) {
	 
	   while($ver=mysqli_fetch_row($result)){ 
		   	      $id=$ver[0];
				 $nombre=$ver[1];
		         $ap=$ver[2];
		   
		  
	   }
	    $_SESSION["id_user"]=$id;
	    $_SESSION["Nombre"]=$nombre;
	    $_SESSION["AP"]=$ap;
	  header('location:tabla.php');
   }
   else {
       echo "<script>
                alert('VERIFIQUE SUS DATOS ACCESO DENEGADO');
                window.location= 'index.html'
    </script>";
   }
}
else
 {
echo  "Problemas en la query:" . mysqli_error($con);
}
 
mysqli_close($con);
?>
