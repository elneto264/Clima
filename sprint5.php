<?php
    $link = mysqli_connect("localhost", "root", "", "sprint5");
    session_start();
?>
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
<?php 
     if (isset($_SESSION['type'])){
         if ( $_SESSION['type']== 'u'){?>
             
<section class="container-fluid wrapper">
    
 	    		
    
    
    
<section class="container-fluid" id="cabezera">
    
      <div class="row">
            <div class="col-xs-2 col-md-2 col-lg-2 collogo">
            <!--<img src="img/logo.png" id="imglogo" alt="imagotipo">-->
          
            </div>
            <div class="col-xs-6 col-md-6 col-lg-6">
              
            <select class="form-control" name="ciudades" id="ciudades">
              <?php 
    
            $consulta = "SELECT id_city, name FROM city";
            $resultado = mysqli_query($link, $consulta);
            while ($arr = mysqli_fetch_array($resultado)) { ?>
                <option value="<?php echo $arr[0];?>"
                <?php if ($arr[1] === "Madrid" OR $arr[0] === "6359304")
                {echo "selected";}?>>
                    <?php echo $arr[1];?>
                               
                </option>
         <?php       }  ?>
    
    
              
            </select>
          
            </div>
          <div class="col-xs-2 col-md-2 col-lg-2 hola">
              <h4>Bienvenid@</h4>
              
          </div>
          
            <div class="col-xs-2 col-md-2 col-lg-2">
                <form method="post" action="controlador.php">
                    <button class="btn btn-danger text-nowrap" id="blogin" onClick="sale()">Log out</button>
                    <input type='hidden' name='oculto' value='3'>
                </form>
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

     
     
   
 <?php       }
     }else{
         ?>
	 
<section class="container-fluid wrapper">
    
 <div id="unover" >
          <div id="contenidoregis">
     
    <form class='form-inline lol' action='controlador.php' method='post'>
        
    <div class='form-group mb-2 col-md-6 col' style='width: 100%;'>
        <label for='email' class='sr-only'>Email</label>
        <input type='email' class='form-control col-md-11 col' id='email' name='email' placeholder='Email' required>
        
    </div>
        
    <div class='form-group mb-2 col-md-6 col'>
        <label for='pass' class='sr-only'>Password</label>
        <input type='password' class='form-control col-md-11 col' id='pass' name='pass' placeholder='Password' required>
    </div>
        
    <div class='form-group mb-2 col-md-6 col' style='width: 100%; display: flex; justify-content: center;'>
        <button type='submit' class='btn btn-info mb-2' name='submit' id='submit' style='color: #353A40; background-color: #0096F6'>Log In</button>
        </div>
    <div class='form-group mb-2 col-md-6 col' style='width: 100%; display: flex; justify-content: center;'>
        <button type='button' class='btn btn-outline-info mb-2' name='cancel' id='cancel' style='color: #0096F6; border-color: #0096F6' onClick="esconde()">Cancel</button></div> 
    <input type='hidden' name='oculto' value='1'>
        
    </form>
     
     
     
     
         </div>
          
</div>		  
    
    
 <div id="unover2" >
          <div id="contenidoregis2">
     
    <form class='form-inline lolRegister' action='controlador.php' method='post'>
        
    <div class='form-group mb-2 col-md-6 col' style='width: 100%;'>
        <label for='emailRegister' class='sr-only'>Email</label>
        <input type='email' class='form-control col-md-11 col' id='emailRegister' name='emailRegister' placeholder='Email' required>
    </div>
        
    <div class='form-group mb-2 col-md-6 col'>
        <label for='passRegister' class='sr-only'>Password</label>
        <input type='password' class='form-control col-md-11 col' id='passRegister' name='passRegister' placeholder='Password' required>
    </div>
        
    <div class='form-group mb-2 col-md-6 col' style='width: 100%; display: flex; justify-content: center;'>
        <button type='submit' class='btn btn-info mb-2' name='submitRegister' id='submitRegister' style='color: #353A40; background-color: #0096F6'>Register</button>
    </div>
        
    <div class='form-group mb-2 col-md-6 col' style='width: 100%; display: flex; justify-content: center;'>
        <button type='button' class='btn btn-outline-info mb-2' name='cancelRegister' id='cancelRegister' style='color: #0096F6; border-color: #0096F6'onClick="esconde2()">Cancel</button>
    </div> 
        
    <input type='hidden' name='oculto' value='2'>
              
    </form>
        
   
     
     
     
         </div>
          
</div>			
    
    
    
<section class="container-fluid" id="cabezera">
    
      <div class="row">
            <div class="col-xs-2 col-md-2 col-lg-2 collogo">
            <!--<img src="img/logo.png" id="imglogo" alt="imagotipo">-->
          
            </div>
            <div class="col-xs-6 col-md-6 col-lg-6">
              
            <select class="form-control" name="ciudades" id="ciudades">
              <?php 
    
            $consulta = "SELECT id_city, name FROM city";
            $resultado = mysqli_query($link, $consulta);
            while ($arr = mysqli_fetch_array($resultado)) { ?>
                <option  value="<?php echo $arr[0];?>"
                <?php if ($arr[1] === "Madrid" OR $arr[0] === "6359304")
                {echo "selected";}?>>
                    <?php echo $arr[1];?>
                               
                </option>
         <?php       }  ?>
    
    
              
            </select>
          
            </div>
          
            <div class="col-xs-2 col-md-2 col-lg-2">
                <button class="btn btn-info text-nowrap" id="blogin" onClick="sale()">Login</button>
                <input type='hidden' name='oculto' value='1'>
            </div>
          
            <div class="col-xs-2 col-md-2 col-lg-2">
                <button class="btn btn-danger text-nowrap" id="bregister"  role="button" onClick="sale2()">Registrar</button>
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

     <?php } ?>
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