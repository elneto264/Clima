$(document).ready(infogen);

$("#refresh").click(function(){
    infogen();
    console.log("refresca la info");
}); 

function infogen(){ 
	$.ajax({
		url:"http://api.openweathermap.org/data/2.5/weather?id=3117732&APPID=6967c0545bc9b2c52b54e1fd9e453d42&units=metric",
		datatype: "json",
		type: "GET",
		success: function(result){
			var icono = result.weather[0].icon;
			var iurl = "http://openweathermap.org/img/wn/" + icono + "@2x.png";
			var ciudad = result.name;
			var dateUni = result.dt;  
        	var dateString = moment.unix(dateUni).format("DD/MM/YYYY");
        	var dia = moment.unix(dateUni).format('dddd');
        	var dateNorm = new Date(dateUni*1000);


			if(result.rain == undefined || result.rain != null){
				$("#rain").html("0 mm");
			}
				else{
					$("#rain").html(result.rain["1h"]);
				}

			if(result.snow == undefined || result.snow != null){
				$("#snow").html("0 mm");
			}
				else{
					$("#snow").html(result.snow["1h"]);
				}

			$("#wind").html(result.wind.speed + " m/s");
			$("#cloud").html(result.clouds.all + " %");
			$("#imgcurrent").attr("src", iurl);
			$(".imgdias").attr("src", iurl);
			$("#name").html(ciudad);
			$("#mainTemp").html(Math.round(result.main.temp) + " ºC");
			$("#maxMin").html(Math.round(result.main.temp_max) + "º" +"/"
								+ Math.round(result.main.temp_min) + "º");
			$("#day").html(dateString);
        	$("#date").html(dia);

			console.log(result);
			
		},
		error: function(){
			console.log("ERROR:");		
		}

	});

	$.ajax({
		url:"http://api.openweathermap.org/data/2.5/forecast?id=3117732&APPID=6967c0545bc9b2c52b54e1fd9e453d42&units=metric",
		datatype: "json",
		type: "GET",
		success: function(forecast){
			var icono1 = forecast.list[7].weather[0].icon;
			var icono2 = forecast.list[15].weather[0].icon;
			var icono3 = forecast.list[23].weather[0].icon;
			var icono4 = forecast.list[31].weather[0].icon;
			var icono5 = forecast.list[39].weather[0].icon;
			
			var dateUni = forecast.list[0].dt;  
        	var dateNorm = new Date(dateUni*1000);
        	var d = (dateNorm.getDay());
        	        	
        	var days = ["Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado"];
			
			$("#imgdias1").attr("src", "http://openweathermap.org/img/wn/" + icono1 + "@2x.png");
			$("#imgdias2").attr("src", "http://openweathermap.org/img/wn/" + icono2 + "@2x.png");
			$("#imgdias3").attr("src", "http://openweathermap.org/img/wn/" + icono3 + "@2x.png");
			$("#imgdias4").attr("src", "http://openweathermap.org/img/wn/" + icono4 + "@2x.png");
			$("#imgdias5").attr("src", "http://openweathermap.org/img/wn/" + icono5 + "@2x.png");

			$("#forecastDay1").html(days[(d + 1)%7]);
			$("#forecastDay2").html(days[(d + 2)%7]);
			$("#forecastDay3").html(days[(d + 3)%7]);
			$("#forecastDay4").html(days[(d + 4)%7]);
			$("#forecastDay5").html(days[(d + 5)%7]);

			$("#maxMinDia1").html(Math.round(Math.max(forecast.list[0].main.temp_max, forecast.list[1].main.temp_max,
				forecast.list[2].main.temp_max, forecast.list[3].main.temp_max, forecast.list[4].main.temp_max,
				forecast.list[5].main.temp_max, forecast.list[6].main.temp_max, forecast.list[7].main.temp_max)) + " ºC" +"/"
				+ Math.round(Math.min(forecast.list[0].main.temp_min, forecast.list[1].main.temp_min,
				forecast.list[2].main.temp_min, forecast.list[3].main.temp_min, forecast.list[4].main.temp_min, 
				forecast.list[5].main.temp_min, forecast.list[6].main.temp_min, forecast.list[7].main.temp_min)) + " ºC");
			$("#maxMinDia2").html(Math.round(Math.max(forecast.list[8].main.temp_max, forecast.list[9].main.temp_max, 
				forecast.list[10].main.temp_max, forecast.list[11].main.temp_max, forecast.list[12].main.temp_max,
				forecast.list[13].main.temp_max, forecast.list[14].main.temp_max, forecast.list[15].main.temp_max)) + " ºC" +"/"
				+ Math.round(Math.min(forecast.list[8].main.temp_min, forecast.list[9].main.temp_min,
				forecast.list[10].main.temp_min, forecast.list[11].main.temp_min, forecast.list[12].main.temp_min, 
				forecast.list[13].main.temp_min, forecast.list[14].main.temp_min, forecast.list[15].main.temp_min)) + " ºC");
			$("#maxMinDia3").html(Math.round(Math.max(forecast.list[16].main.temp_max, forecast.list[17].main.temp_max, 
				forecast.list[18].main.temp_max, forecast.list[19].main.temp_max, forecast.list[20].main.temp_max,
				forecast.list[21].main.temp_max, forecast.list[22].main.temp_max, forecast.list[23].main.temp_max)) + " ºC" +"/"
				+ Math.round(Math.min(forecast.list[16].main.temp_min, forecast.list[17].main.temp_min,
				forecast.list[18].main.temp_min, forecast.list[19].main.temp_min, forecast.list[20].main.temp_min, 
				forecast.list[21].main.temp_min, forecast.list[22].main.temp_min, forecast.list[23].main.temp_min)) + " ºC");
			$("#maxMinDia4").html(Math.round(Math.max(forecast.list[24].main.temp_max, forecast.list[25].main.temp_max, 
				forecast.list[26].main.temp_max, forecast.list[27].main.temp_max, forecast.list[28].main.temp_max,
				forecast.list[29].main.temp_max, forecast.list[30].main.temp_max, forecast.list[31].main.temp_max)) + " ºC" +"/"
				+ Math.round(Math.min(forecast.list[24].main.temp_min, forecast.list[25].main.temp_min,
				forecast.list[26].main.temp_min, forecast.list[27].main.temp_min, forecast.list[28].main.temp_min, 
				forecast.list[29].main.temp_min, forecast.list[30].main.temp_min, forecast.list[31].main.temp_min)) + " ºC");
			$("#maxMinDia5").html(Math.round(Math.max(forecast.list[32].main.temp_max, forecast.list[33].main.temp_max, 
				forecast.list[34].main.temp_max, forecast.list[35].main.temp_max, forecast.list[36].main.temp_max,
				forecast.list[37].main.temp_max, forecast.list[38].main.temp_max, forecast.list[39].main.temp_max)) + " ºC" +"/"
				+ Math.round(Math.min(forecast.list[32].main.temp_min, forecast.list[33].main.temp_min,
				forecast.list[34].main.temp_min, forecast.list[35].main.temp_min, forecast.list[36].main.temp_min, 
				forecast.list[37].main.temp_min, forecast.list[38].main.temp_min, forecast.list[39].main.temp_min)) + " ºC");

		console.log(forecast);
			
		},
		error: function(){
			console.log("ERROR:");		
		}

	});


}