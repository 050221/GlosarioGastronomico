<style type="text/css">
    

.logogrande{
     position: relative;
     height: 200px;


 }

@media  (max-width: 480px) {
.logogrande{
    height: 100px ;
    
  }
}



.search_wrap .search_box{
     position: relative;
     margin-top: 65px;
     width: 700px;
     height: 60px;
     left: 50%;
     transform: translate(-50%,-50%);

    
    
}

@media (max-width: 480px) {
  .search_wrap .search_box {
    width: 375px;
     height: 50px;
   
  }
}

.search_wrap .search_box .input{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    padding: 10px 20px;
    border-radius: 6px;
    font-size: 18px;
    border-color: black;
    font-family: 'Open Sans', sans-serif;

}

.search_wrap .search_box .btn{
     position: absolute;
     background: #1abc9c;
     width: 60px;
     height: 60px;
     border-radius: 0;
     font-size: 28px;

  }

  @media (max-width: 480px) {
  .search_wrap .search_box .btn{
     width: 50px;
     height: 50px;
     font-size: 25px;
  }
}



.search_wrap .search_box .btn.btn_commone .fas{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    color: #000;
   
   
}

.search_wrap.search_wrap_1 .search_box .btn{
    right: 0;
    border-top-right-radius: 4px;
    border-bottom-right-radius: 4px;
}

.search_wrap.search_wrap_1 .search_box .input{
    padding-right: 80px;
}



.box-search2{
    position: absolute;
    top: 241px;
    left: 50%;
    transform: translateX(-50%);
    width: 700px;
    
    border-radius:0px 0px 20px 20px;
    background-color: #ffff;
    padding-left: 20px; 
    box-shadow: 0px 0px 5px 0px black;

    
}


@media  (max-width: 480px) {
  .box-search2{
    top: 151px;
    width: 375px;
    margin: 0 30px 0 0;
    
  }
}





</style>

        <section >
            <center><img src="img/LOGO PROGRAMA INCLUSION_01.png" class="logogrande " ></center>
            <div class="search_wrap search_wrap_1">
            
            <div class="search_box " >
                <input onkeyup="buscar_ahora($('#buscar_1').val());"   id="buscar_1" name="buscar_1" placeholder="buscar....." class="input  " >  <!--clase shadow-lg p-3 mb-5 bg-body rounded -->
               
                <div class="btn btn_commone">
                    <i class="fas fa-search"></i>
                </div>
            </div>
        </div>
 
        <div class="box-search2">
            <div class="box-search2" >
                <div id="datos_buscador" ></div>
            </div>
        </div>

     </section>
        
    
      


           

         


          <script type="text/javascript">
        
        function buscar_ahora(buscar) {
        var parametros = {"buscar":buscar};
        $.ajax({
        data:parametros,
        type: 'POST',
        url: 'buscador.php',
        success: function(data) {
        document.getElementById("datos_buscador").innerHTML = data;
        }
        });
        }
     //   buscar_ahora();
</script>