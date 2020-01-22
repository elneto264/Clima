<!DOCTYPE html>
<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href="css/style.css" rel="stylesheet" type="text/css">

    <title>El Tiempo</title>

  </head>
 <body>

 
	 
<section class="fondor">	 
		  
<section class="container-fluid" id="cabezera">
    
      <div class="row">
            <div class="col-xs-2 col-md-2 col-lg-2 collogo">
            <!--<img src="img/logo.png" id="imglogo" alt="imagotipo">-->
          
            </div>
            <div class="col-xs-6 col-md-6 col-lg-6">
              
            <select class="form-control" name="ciudades" id="ciudades">
              <option value="3117732">Madrid</option>
              <option value="524901">Moscú</option>
              <option value="1609350">Bangkok</option>
              <option value="2172517">Canberra</option>
              <option value="1261481">New Delhi</option>
            </select>
          
            </div>
          
            <div class="col-xs-1 col-md-1 col-lg-1"> 
              <!--<input type="text" name="usuario" id="usuario" placeholder="Usuario">-->  
            </div>
            <div class="col-xs-1 col-md-1 col-lg-1">
               <!--<input type="password" name="usuario" id="clave" placeholder="Clave">  --> 
            </div>
            <div class="col-xs-1 col-md-1 col-lg-1">
                <!--<button class="btn btn-info" id="blogin">Login</button>-->
            </div>
            <div class="col-xs-1 col-md-1 col-lg-1">
                <!--<button class="btn btn-danger" id="bregister">Registrar</button>-->
            </div>
        
    
      </div>
    
      
</section>
      

	

	  
	  
<section id="cdatos" class="container cdatos">
    <!--CIUDAD, DIA Y TIEMPO ACTUAL-->

      <div class="row datosactual">
        <div class="col-xs-6 col-md-6 col-lg-6 cprincipal">
          <div class="infoprin">  
              
          <div class="tempactual">
			  <h3 id="tipodia"></h3>
            <h2 id="mainTemp"></h2>
            <h4 id="maxMin"></h4>
            
            
          </div> 
              
            <img id="imgcurrent" src="" alt="Weather icon" class="imgcurrent">
            <h4 id="name"></h4>
            <h6 id="day"></h6>
            <h6 id="date"></h6>     
         </div>
           
			
            <input type="image" id="refresh" class="refrescar sarrow" name="refrescar"  src="img/arrow2.png" alt="arroes">
            
			
        </div>
          
        <div class="col-xs-6 col-md-6 col-lg-6 detallesActual">
          <table  class="table table-striped detallesActual">
            <tbody class="detallesActual">
                <th style="border-top:none;">Información adicional </th>
              <tr>
                <td>Velocidad Viento<br>
                  <h6 id="wind"></h6>
                </td>
              </tr>
              <tr>
                <td>Nubes<br>
                  <h6 id="cloud"></h6>
                </td>
              </tr>
              <tr>
                <td>Volumen lluvia<br>
                  <h6 id="rain"></h6>
                </td>
              </tr>
              <tr>
                <td>Volumen nieve<br>
                  <h6 id="snow"></h6>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
    </div>
 </section>
        
        
        
<section class="container secDatos">
    <div class="row">
        <div class="col-xs-2 col-md-2 col-lg-2 pronostico2">
            
            <h4>Pronóstico para los próximos días</h4> 
                
        </div>
        
        <div class="col-xs-2 col-md-2 col-lg-2 cincodias" >
            <h4 id="forecastDay1"></h4> 
            <img src="" class="imgdias" id="imgdias1" alt="tiempo"> 
            <h6 id="maxMinDia1"></h6>     
        </div>
        
         <div class="col-xs-2 col-md-2 col-lg-2 cincodias" >
            <h4 id="forecastDay2"></h4> 
            <img src="" class="imgdias" id="imgdias2" alt="tiempo"> 
            <h6 id="maxMinDia2"></h6>     
        </div> 
        
         <div class="col-xs-2 col-md-2 col-lg-2 cincodias" >
            <h4 id="forecastDay3"></h4> 
            <img src="" class="imgdias" id="imgdias3" alt="tiempo"> 
            <h6 id="maxMinDia3"></h6>     
        </div> 
        
         <div class="col-xs-2 col-md-2 col-lg-2 cincodias" >
            <h4 id="forecastDay4"></h4> 
            <img src="" class="imgdias" id="imgdias4" alt="tiempo"> 
            <h6 id="maxMinDia4"></h6>     
        </div> 
        
         <div class="col-xs-2 col-md-2 col-lg-2 cincodias" >
            <h4 id="forecastDay5"></h4> 
            <img src="" class="imgdias" id="imgdias5" alt="tiempo"> 
            <h6 id="maxMinDia5"></h6>     
        </div> 
      
        
    </div>
   
       
</section>



	
<footer class="container-fluid piedepagina">
	 
	 
</footer> 	
	
</section>  
	 

    <!-- Jquery -->
    <script
      src="https://code.jquery.com/jquery-3.4.1.js"
      integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
      crossorigin="anonymous">
    </script>
    <!-- Hoja de JS -->
    <script type="text/javascript" src="js/moment.js"></script>

    <script src="js/sprint5.js"></script>

  </body>
</html>