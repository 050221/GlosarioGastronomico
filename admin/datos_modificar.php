<?php


$id_palabra= $_POST['id_palabra'];
$nombre= $_POST['nombre'];
$definicion= $_POST['definicion'];



require("conexion.php");

$guarda = $mysqli->query("UPDATE palabra  SET nombre='$nombre', definicion='$definicion' WHERE id_palabra='$id_palabra'");

if ($guarda ) {
	echo ' <script>alert("Modificado Correctamente")</script>';
	echo "<script>location.href='index.php ' </script>";

}else{
	echo ' <script>alert("No Modificado")</script>';
	
}


?>