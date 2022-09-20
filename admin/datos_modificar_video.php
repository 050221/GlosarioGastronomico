<?php
$id_palabra =$_POST['id_palabra']; 
$nombre =$_POST['nombre'];
$definicion =$_POST['definicion'];
$url_doc =$_POST['url_doc']; 

$dirprueba = '\ ';
$fichero_subido2 =basename($_FILES['url_doc']['name']);

$dir_subida = 'documentos/';
$fichero_subido = $dir_subida.basename($_FILES['url_doc']['name']);

echo '<pre>';
if(move_uploaded_file($_FILES['url_doc']['tmp_name'],$fichero_subido)){
	
}
else{echo"posible problema de subida de ficheros!\n";

}


require("../conexion.php");
$guarda = $mysqli->query("UPDATE palabra  SET nombre='$nombre',definicion='$definicion',video='$fichero_subido2' WHERE id_palabra='$id_palabra' ");

if ($guarda ) {
	echo ' <script>alert("Modificado Correctamente")</script>';
	echo "<script>location.href='index.php ' </script>";
	

}else{
	echo ' <script>alert("No Modificado")</script>';
	
}

?>










