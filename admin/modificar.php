<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Glosario Gastronomico</title>
        <!-- Favicon-->

        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
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
        <link href="../css/styles.css" rel="stylesheet" />
        <!-- CSS only -->

        <link rel="stylesheet" href="../css.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

       

        <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>


         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

         <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

         <link rel="stylesheet" href="styles.css">
         </head>





    <body id="page-top  " >
        
        <nav class="navbar navbar-expand-lg  text-uppercase fixed-top" id="mainNav" style="background-color: #333333;">
            <div class="container">
                <a class="navbar-brand titulo2" href="index.php">Glosario Gastronomico</a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1 titulo2"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="index.php">Inicio</a></li>
                        <li class="nav-item mx-0 mx-lg-1 titulo2"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="login.php">Cerrar sesi&oacuten</a></li>
                        
                    </ul>
                </div>
            </div>
        </nav>
       
       
        <section id="Buscar" >
            <header class="masthead   ">
            <body>
                <?php include("../conexion.php"); ?>
      <?php

      $id_palabra=$_GET['id_palabra'];

    $busca = $mysqli->query("SELECT * FROM palabra WHERE id_palabra='$id_palabra' ");
while($datos=mysqli_fetch_array($busca)){

 ?>  


<section class="container bg-light">
     <form name="Form2" action="datos_modificar.php" method="POST" >
<br>
<center><h2><label> "<?php echo $datos[1]; ?>"</label></h2></center>        
   
<div class="row">    

<input type="hidden" id="id_palabra" name="id_palabra" value="<?php echo $datos[0]; ?>">

 
 &nbsp;
<div class="col-md-12">  
<label for="firstName" class="form-label"><h5>Nombre:</h5></label>
<input type="text" class="form-control"  name="nombre"  value="<?php echo $datos[1]; ?>" required>
<div class="invalid-feedback">
Valid first name is required.
</div>
</div>
 &nbsp;

<div class="col-md-12">
<label for="firstName" class="form-label"><h5>Definici&oacuten:</h5></label>
<textarea class="form-control" cols="40" rows="5" name="definicion"><?php echo $datos[2]; ?></textarea   required>
<div class="invalid-feedback">
Valid first name is required.
</div>
</div>
</div>

 &nbsp;

<div class="row">
<div class="col-sm-6">
<label for="firstName" class="form-label"><h5>Video:</h5></label>
 <video src="documentos/<?php echo $datos[3]; ?>" width="400" height="200" controls class="video"></video> 
<div class="invalid-feedback">
Valid first name is required.
</div>
<a type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop2" style="color:black;"><i class="large material-icons agregar_video" >insert_photo</i></div></a>
</div>
<p></p>

</div>

<div align="right"><a href="index.php" class="btn-secondary btn">cancelar</a> <input type="submit" class=" btn " style="background-color:#1abc9c; " value="Modificar " ></div>




    </form>
    <!-- Modal -->
<div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
       <form name="Form1" action="datos_modificar_video.php" method="post" enctype="multipart/form-data">
      <div class="modal-header " style="background-color:#5BBEB9;">
        <h5 class="modal-title" id="staticBackdropLabel">Modoficar video</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <div class="modal-body">
        <div class="col-md-12 col-sm-6">
        <label for="inputnombre" class="form-label"><?php echo $datos[1]; ?></label>
        <input type="hidden"  name="id_palabra" class="form-control" value="<?php echo $datos[0]; ?>" >
         <input type="hidden"  name="nombre" class="form-control" value="<?php echo $datos[1]; ?>" >
         <div class="invalid-feedback">
                Valid first name is required.
              </div>
        </div>
        <p></p>
        <div class="col-md-12 col-sm-6">
        <input type="hidden"  name="definicion" class="form-control" value="<?php echo $datos[2]; ?>" >
         <div class="invalid-feedback">
                Valid first name is required.
              </div>
       </div>
       <p></p>

       <div class="col-md-12 col-sm-12">
              <label for="firstName" class="form-label">Nuevo video:(*) </label>
              <input type="file" class="form-control" name="url_doc"    required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn" style="background-color: #B7DFE4">Modificar</button>

      </div>
      </form>
    </div>
  </div>
</div>

</section>
 <?php 
           }
           ?>

</body>

        </header>
        
        </section>




 

        
    



            

      
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>


