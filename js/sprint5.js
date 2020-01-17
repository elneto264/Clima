$(document).ready( function(){
    
 
    
  var infogen = $.ajax({
        url: "http://api.openweathermap.org/data/2.5/weather?id=3117732&units=metric&APPID=6967c0545bc9b2c52b54e1fd9e453d42",
        datatype : "json",
        type: "GET",
        success: function(result){
            /* seccion variables */
            
          
            var icono = result.weather[0].icon;
            var iurl = "http://openweathermap.org/img/wn/" + icono + "@2x.png";
            var ciudad = result.name;
            var dateUni = result.dt;  
            var dateString = moment.unix(dateUni).format("DD/MM/YYYY");
            var dia = moment.unix(dateUni).format('dddd');
            var dateNorm = new Date(dateUni*1000); 
            var day = date.getDate(dateUni*1000);
            
            
            /* seccion variables */
            
            
            console.log(result);
        $("#name").html(ciudad);
        $("#mainTemp").html(Math.round(result.main.temp) + "Cº");
        $("#maxMin").html(Math.round(result.main.temp_max) + "º" + "/" + Math.round(result.main.temp_min) + "º");
        $("#wind").html(result.wind.speed + " m/s");
        $("#cloud").html(result.clouds.all + " %");
        $("#imgcurrent").attr("src",iurl);
        $(".imgdias").attr("src",iurl);/* hacer variable con API de los 5 dias(horas en este caso)*/
        $("#date").html(day + " Ten un buen día"); 
        $("#day").html(dia + " Hola");
            
            
            
            
            
            
        
        },
        error: function(){
            console.log("ERROR: de este lado");
        }
       
 
       
   });  
    
    
  $("#refresh").click(function(){
     location.reload();
      console.log("refresca la info");
   /*  $.ajax({
        url: "http://api.openweathermap.org/data/2.5/weather?id=3117732&units=metric&APPID=6967c0545bc9b2c52b54e1fd9e453d42",
        datatype : "json",
        type: "GET",
        success: function(result){
            
            
          
            var icono = result.weather[0].icon;
            var iurl = "http://openweathermap.org/img/wn/" + icono + "@2x.png";
            var ciudad = result.name;
            var date = result.dt;  
            var dateString = moment.unix(date).format("DD/MM/YYYY");
            
            
            
            
            console.log(result);
        $("#name").html(ciudad);
        $("#mainTemp").html(Math.round(result.main.temp) + "Cº");
        $("#wind").html(result.wind.speed + " m/s");
        $("#imgcurrent").attr("src",iurl);
        $(".imgdias").attr("src",iurl);
        $("#date").html(dateString + " Datos actualizados");   
            
            
            
            
            
            
        
        },
        error: function(){
            console.log("ERROR: de este lado");
        }
       
 
       
   }); */
       
       
       });    
    
    
    
});