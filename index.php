
  <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Glosario Gastronomico</title>

        

        <link rel="apple-touch-icon" sizes="180x180" href="icono/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="icono/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="icono/favicon-16x16.png">
        <link rel="manifest" href="icono/site.webmanifest">
        <meta name="msapplication-TileColor" content="#f3f3f3">
        <meta name="theme-color" content="#ffffff">

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





    <body id="page-top  " >
        <?php include("conexion.php"); ?>
        <nav class="navbar navbar-expand-lg  text-uppercase fixed-top" id="mainNav" style="background-color: #333333;">
            <div class="container
        ">
                <!--<img src="img/LOGO UTSEM.png  " height="60px">-->
                <a class="navbar-brand titulo2" href="index.php">Glosario Gastronomico</a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1 titulo2"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="index.php">Inicio</a></li>
                        <li class="nav-item mx-0 mx-lg-1 titulo2"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#Buscar">Buscar</a></li>
                        <li class="nav-item mx-0 mx-lg-1 titulo2"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#Vertodas">Ver todas</a></li>
                        <li class="nav-item mx-0 mx-lg-1 titulo2"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="login.php">Iniciar sesi&oacuten</a></li>
                        
                    </ul>
                </div>
            </div>
        </nav>
       
       
        <section id="Buscar" class="fondo-index">
            <header class="masthead  ">
             <?php require ("buscador-barra.php")?>

        </header>
        
        </section>




  

        
        <section class=" container" id="Vertodas">
            <header class="masthead">
               <div class="vertodas_barra">Catalogo de Palabras</div>
               
      
&nbsp;&nbsp;


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.0/jquery.min.js"></script>

   

           <div class="col-md-12 select">
                <select class="form-select w-25  " id="seleccion"  >
                <option  value="todas">Todas</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
                <option value="E">E</option>
                <option value="F">F</option>
                <option value="G">G</option>
                <option value="H">H</option>
                <option value="I">I</option>
                <option value="J">J</option>
                <option value="K">K</option>
                <option value="L">L</option>
                <option value="M">M</option>
                <option value="N">N</option>
                <option value="O">O</option>
                <option value="P">P</option>
                <option value="Q">Q</option>
                <option value="R">R</option>
                <option value="S">S</option>
                <option value="T">T</option>
                <option value="U">U</option>
                <option value="V">V</option>
                <option value="W">W</option>
                <option value="X">X</option>
                <option value="Y">Y</option>
                <option value="Z">Z</option> 
 
                </select>
           </div>

<script type="text/javascript">
   
     $("#seleccion").change(function(){
      var letra = $("#seleccion").val();
       

      var datos="letra="+letra;
      

     $.ajax({
        

      url:'letras_sql/letras.php',
      type:'POST',
      data:datos
      })

     .done(function(res){
     $('#letra_buscar').html(res);

     })

 });

</script>

 &nbsp; &nbsp;

        
        <div id="letra_buscar" > 
         <?php
        require("conexion.php");
 
         $busca = $mysqli->query("SELECT * FROM palabra ORDER BY nombre ASC ");
        
          while($datos=mysqli_fetch_array($busca)){

          ?>   
         <div class="row ">
            <div class="col-md-12 col-sm-12 nombre2degradado">
                 <label class="nombre2"><?php echo $datos[1]; ?></label>  
            </div>
             &nbsp;
            <div class="col-md-12 col-sm-12">
                 <video src="admin/documentos/<?php echo $datos[3]; ?>" width="600" height="400" controls class="video"></video>  
            </div>
            <div class="col-md-12 col-sm-12">
                <label class="nombre">Definici&oacuten:</label>
                <label class="descripcion"><?php echo $datos[2]; ?></label>
                
                <div class="barrita "></div>
                &nbsp;
                &nbsp;
            </div>
         </div>
         
          <div class="barrita2 "></div>
 <?php } ?> 
        
        </div>  



                
            </header>
            
        </section>

       
        <!-- Copyright Section-->
            <div class="copyright py-4  text-white ">
                <div class="container ">
                     <center> <div><small>Copyright &copy; 2022 IT</small></div>
                        </center>
                </div>

            </div>



       

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


