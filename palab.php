  <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Glosario Gastronomico</title>
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Roboto:wght@100&display=swap" rel="stylesheet">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />

        <link rel="stylesheet" href="css.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
         <!-- JavaScript Bundle with Popper -->
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

         <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>


         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
         <link href="js/scripts.js" rel="stylesheet" />

    </head>


       <style type="text/css">
            .card {
             width: 1120px;
             height: 700px;
             border-radius: 30px;
             border-color: rgba(111,111,111,0) transparent transparent;
             background: #e0e0e0;
             box-shadow: 15px 15px 30px #bebebe,
                         -15px -15px 30px #ffffff;
             padding-left: 15px; 
             padding-right: 15px;
            }


            @media  (max-width: 480px) {
              .card {
              width: 100%;
             height: 100%;
            
            padding-bottom: 15px;
             }
             }  

            .nombre_titulo{
             font-size: 40px;
             font-style: bold;
             font-family:  sans-serif;
             }


             .barrita{
              width: 100%; 
             height: 10px; 
              background: #1abc9c;
             border-radius: 100px 100px 100px 100px;
             }

             @media  (max-width: 480px) {
            .barrita2{
             width: 100%;
             height: 50px ;
            }
}

        </style>


    <body id="page-top  " >
        <?php include("conexion.php"); ?>
        <nav class="navbar navbar-expand-lg  text-uppercase fixed-top" id="mainNav" style="background-color: #333333;">
            <div class="container
        ">
                <a class="navbar-brand titulo2" href="index.php">Glosario Gastronomico</a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1 titulo2"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="index.php">Inicio</a></li>
                        <li class="nav-item mx-0 mx-lg-1 titulo2"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="login.php">Iniciar sesi&oacuten</a></li>
                        
                    </ul>
                </div>
            </div>
        </nav>
       
       
        <section  class="container">
            <header class="masthead  ">
              <?php
              include("conexion.php"); 

             $buscar=$mysqli->query("SELECT * FROM palabra WHERE nombre = '".$_REQUEST["busca"]."'");  
              while($datos=mysqli_fetch_assoc($buscar)) {

              ?>

             <div class=" card ">
                 <div class="row">
                 <div class="col-md-12 col-sm-12">
                  <label class="nombre_titulo "><?php echo $datos["nombre"]; ?></label>
                 </div>
                 <div class="col-md-12 col-sm-12">
                <center><video src="admin/documentos/<?php echo $datos["video"]; ?>"  controls class="video"> </video> </center>
                 </div>
                 <div class="col-md-12 col-sm-12">
                  <label class="nombre">Definici&oacuten:</label>
             <label class="descripcion"> <?php echo $datos["definicion"]; ?></label>
               
             <div class="barrita "></div>
                  </div>
                 </div>
    
             </div>
             <?php
             }
             ?>
             </header>   
        </section>
    </body>
</html>



