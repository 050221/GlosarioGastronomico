
  
<?php 

require("conexion.php");


$id_palabra=$_GET['id_palabra'];

  
$busca =$mysqli->query("DELETE FROM palabra WHERE id_palabra ='$id_palabra'");


echo "<script>location.href='index.php ' </script>";   
?>
</body>
</html>