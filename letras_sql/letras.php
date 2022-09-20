<?php

  require("../conexion.php");

  $letra = $_POST['letra'];
 
    if($letra=="todas") {

         $busca = $mysqli->query("SELECT * FROM palabra ORDER BY nombre ASC ");
         while($datos=mysqli_fetch_array($busca)){

         include("mostrar_todas.html");
         echo '<div class="barrita2 "></div>';
        }
      
    } else {

         $busca2 = $mysqli->query("SELECT * FROM palabra WHERE nombre LIKE '$letra%' ");
         while($datos2=mysqli_fetch_array($busca2)){

         include("mostrar_letra.html");
         echo '<div class="barrita2 "></div>';

 }
    }
    
?>