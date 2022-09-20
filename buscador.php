

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="styles.css">
<script src="admin/funciones.js"></script>


<?php include("conexion.php");

if(isset($_POST['buscar'])){
   $solicitud = $_POST['buscar'];
}
 



 if ($solicitud == null) {
     ?>
      <script type="text/javascript">
        box_search2.style.display = "none";   
      </script>

      <?php
 }else{
     $buscardor=$mysqli->query("SELECT * FROM palabra WHERE nombre LIKE LOWER('%".$_POST["buscar"]."%') "); 


 while($resultado = mysqli_fetch_assoc($buscardor)){



     ?>

  <a ><p  onclick="location.href='palab.php?busca=<?php echo $resultado['nombre']; ?>'"><i class="material-icons buscar">search</i> <label class="resul_bus" ><?php echo $resultado["nombre"]; ?></label></p></a>
  

    <?php


 }

 }


 ?>


    
    








