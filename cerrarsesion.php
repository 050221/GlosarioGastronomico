<?php
session_start();
if($_SESSION['correo']){
  session_destroy();
  echo "<script>location.href='../index.php'</script>";
  }
  else{
  	echo "<script>location.href='../index.php'</script>";
 }
 ?>