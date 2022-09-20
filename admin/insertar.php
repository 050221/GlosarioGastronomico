<?php

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

$guarda = $mysqli->query("INSERT INTO palabra  Values('','$nombre','$definicion','$fichero_subido2')");


echo "<script>location.href='index.php ' </script>";    


?>

