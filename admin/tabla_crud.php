<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
  </symbol>
  <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
  </symbol>
  <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
  </symbol>
</svg>


<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="styles.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body >
	<?php
    
    require("../conexion.php");
 ?>
  <script type="text/javascript">
     function ConfirmDelete(){
        var respuesta =confirm("Estas seguro de eliminar?");

        if (respuesta == true) {
            return true;

        } else {
            return false;
        }
     }
 </script>

<!--<div class="alert alert-danger d-flex align-items-center" role="alert">
  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
  <div>
    An example danger alert with an icon
  </div>
-->

 


 
  

  <div class="container ">
  	<center><h1>Todas las palabras</h1></center>
     <div class=""><a type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="color:black;"><i class="large material-icons agregar">library_add</i></div></a>
     <div class="row">
       <div class="col-lg-12">
         <table id="example" class="table table-striped table-bordered   " style="width:100%"> <!-- table-sm table-responsive -->
           <thead>
             <tr class="titulos">
              <td>Palabra</td>
              <td>Ajustes</td>
               
             </tr>
           </thead>
           <tbody>
            <?php
    $busca = $mysqli->query("SELECT * FROM palabra");
while($datos=mysqli_fetch_array($busca)){

 ?>  
             <tr>
               <td><?php echo $datos[1]?></td>
             
               <td><a href="modificar.php?id_palabra=<?php echo $datos[0];?> " style="color:black;"><i class="large material-icons edit">edit</i></a><a   href="eliminar.php?id_palabra=<?php echo $datos[0];?> "onclick="return ConfirmDelete()"  style="color:black;"><i class="large material-icons delete">delete</i></a></td>
             </tr>
             <?php 
           }
           ?>
           </tbody>
         </table>
       </div>
     </div>



<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
       <form name="Form1" action="insertar.php" method="post" enctype="multipart/form-data">
      <div class="modal-header " style="background-color:#5BBEB9;">
        <h5 class="modal-title" id="staticBackdropLabel">Nuevo Registro</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
    
        <div class="modal-body">
        <div class="col-md-12 col-sm-6">
        <label for="inputnombre" class="form-label">Palabra:(*)</label>
        <input type="text" id="nombre" name="nombre" class="form-control" >
         <div class="invalid-feedback">
                Valid first name is required.
              </div>
        </div>
        <p></p>
        <div class="col-md-12 col-sm-6">
        <label for="inputnombre" class="form-label">Definici&oacuten:(*)</label>
        <input type="text" id="definicion" name="definicion" class="form-control" >
         <div class="invalid-feedback">
                Valid first name is required.
              </div>
       </div>
       <p></p>

       <div class="col-md-12 col-sm-12">
              <label for="firstName" class="form-label">Video:(*) </label>
              <input type="file" class="form-control" name="url_doc"   placeholder="" value="" required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>

      </div>
     

         

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn" style="background-color: #B7DFE4">Añadir</button>

      </div>
      </form>
    </div>
  </div>
</div>
  </div>
 

  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
 <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js"></script> 
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css"/>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.0/css/jquery.dataTables.css">
  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.js"></script>

 
<script>
//Idiomas con el 1er método   
$(document).ready(function() {
    $('#example').DataTable({ 
        "language": {
           "url": "https://cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
        }
        
        });
});

</script>
</section>

</body>
</html>