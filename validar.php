<?php


require("conexion.php");

$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];


if($correo=="administrador@gmail.com" and $contraseña=="admin"){
    echo "<script>location.href='admin/index.php ' </script>";

}else{
	echo ' <script>alert("CONTRASENA INCORRECTO")</script>' ;
	echo "<script>location.href='login.php' </script>";
   
}





?>

