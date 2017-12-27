 var city = document.createElement("input");
     city.innerHTML = "Find City";
 city.addEventListener("submit",findWeather || currentGeo);
 function currentGeo() {
     navigator.geolocation.getCurrentPosition(showPosition)
 }
 const btn = document.createElement("button");
        btn.setAttribute("type","submit");
 btn.innerHTML = "Show Weather";

 let temp = document.createElement("div");
     document.body.appendChild(temp);

 let cityName = document.createElement("h3");
 let weather = document.createElement("span");

     function findWeather(city) {


         fetch("api.openweathermap.org/data/2.5/weather?q="+city+",1000&APPID=7ce8c33b2f49e7373c90e932af019974")
             .then((res) => res.json())
             .then((data) => {
                 console.log(data);



                 let visibility = data.visibility / 100;
                 let Celsius = (data.main.temp - 32) / 1.8000;
                 console.log(Celsius);


                 weather.innerHTML += `
                <b>Weather:</b>
                <div>Temperature: ${parseInt(Celsius)} <sup>&compfn;</sup>C</div>
                <div>Humidity: ${data.main.humidity} &percnt;</div>
                <div>Visibility: ${visibility}&nbsp;KM</div>
            `;

                 cityName.innerHTML += `
                <span>${data.name}</span>
                <span> &nbsp;${data.sys.country}</span>
            `;



             });
     }
        temp.appendChild(cityName);
        temp.appendChild(city);
        temp.appendChild(weather)
        document.body.appendChild(temp);
        temp.appendChild(btn);