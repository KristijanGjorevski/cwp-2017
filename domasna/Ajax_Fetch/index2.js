var city = document.createElement("input");
const btn = document.createElement("button");
let temp = document.createElement("div");
let cityName = document.createElement("h3");
let weather = document.createElement("span");

city.innerHTML = "Find City";
city.addEventListener("submit",findWeather || currentGeo);
btn.setAttribute("type","submit");

btn.innerHTML = "Show Weather";
document.body.appendChild(temp);

temp.appendChild(cityName);
temp.appendChild(city);
temp.appendChild(weather);
temp.appendChild(btn);
document.body.appendChild(temp);
