



$(document).ready(infogen);

$("#refresh").click(function(){
          infogen();
    console.log("refresca la info");
});   
 
    
function infogen(){ 
        $.ajax({
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
   
            /* seccion variables */

     /* lluvia */
            if (result.rain == undefined || result.rain["3h"] != null ){
                
               $("#rain").html("0 mm");
                
            }else{
               $("#rain").html(result.rain["1h"]);
            }
            
       /* nieve*/ 
             if (result.snow == undefined || result.snow["3h"] != null ){
                
               $("#snow").html("0 mm");
                
            }else{
               $("#snow").html(result.snow["1h"]);
            }
            
            
            
            /* seccion de imprimir en html*/
            console.log(result);
        $("#name").html(ciudad);
        $("#mainTemp").html(Math.round(result.main.temp) + "Cº");
        $("#maxMin").html(Math.round(result.main.temp_max) + "º" + " / " + Math.round(result.main.temp_min) + "º");
        $("#wind").html(result.wind.speed + " m/s");
        $("#cloud").html(result.clouds.all + " %");
        $("#imgcurrent").attr("src",iurl);
        $(".imgdias").attr("src",iurl);/* hacer variable con API de los 5 dias(horas en este caso)*/
        $("#day").html(dateString + " Hola");
        $("#date").html(dia + " Ten un buen día"); 
           
            
            
            
            
            
         
            
            
            
            
            
            
            
        
        },
        error: function(){
            console.log("ERROR: de este lado");
        }
       
 
       
   });  
                   
                   
    
 }
    
   
/*function para5(){
    $.ajax({
        url: "api.openweathermap.org/data/2.5/forecast?id=3117732&units=metric&APPID=6967c0545bc9b2c52b54e1fd9e453d42",
        datatype : "json",
        type: "GET",
        success: function(result){
            
        }
        
    })
    
    
    
    
}*/
     
    
    
    
