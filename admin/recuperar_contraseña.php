<?php

    if (isset($_POST['enviar'])) {
        if (!empty($_POST['email'])) {
            require("../conexion.php");
            $email = $_POST['email'];
            $busca = $mysqli->query("SELECT * FROM usuarios WHERE email='$email';");
            while ($datos=mysqli_fetch_array($busca)){
                $password =  $datos['8'];
            }
            $asunto = "Recuperar contraseña";
            $mensaje = "";
            $header = "From: support@comedor-universitario.proyectos-utsem.com". "\r\n";
            $header.="Reply-To: support@comedor-universitario.proyectos-utsem.com"."\r\n";
            $header.="X-Mailer: PHP/".phpversion();
            $mail = @mail($email,$asunto,$password,$header);
            if($mail){
                echo "<h4>Mail enviado</h4>";
            }
        }
    }

?>