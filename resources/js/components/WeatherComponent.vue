<template>
    <div id="main-div" class="container my-3"> 

        <div id="main-card" class="card px-2">
            <div class="card-header pt-3">
                
                <input class="form-control" v-model="city" @keyup="find_city" type="text" id="cityname" placeholder="Enter a city name">

            </div>
            <div class="card-body">

                <div v-if="name">
                    
                    <h5><strong>Today: <small>{{ time }}</small></strong></h5>
                    <h4>
                        <a target="_blank" :href="`https://en.wikipedia.org/wiki/${name}`">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-geo-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" d="M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999zm2.493 8.574a.5.5 0 0 1-.411.575c-.712.118-1.28.295-1.655.493a1.319 1.319 0 0 0-.37.265.301.301 0 0 0-.057.09V14l.002.008a.147.147 0 0 0 .016.033.617.617 0 0 0 .145.15c.165.13.435.27.813.395.751.25 1.82.414 3.024.414s2.273-.163 3.024-.414c.378-.126.648-.265.813-.395a.619.619 0 0 0 .146-.15.148.148 0 0 0 .015-.033L12 14v-.004a.301.301 0 0 0-.057-.09 1.318 1.318 0 0 0-.37-.264c-.376-.198-.943-.375-1.655-.493a.5.5 0 1 1 .164-.986c.77.127 1.452.328 1.957.594C12.5 13 13 13.4 13 14c0 .426-.26.752-.544.977-.29.228-.68.413-1.116.558-.878.293-2.059.465-3.34.465-1.281 0-2.462-.172-3.34-.465-.436-.145-.826-.33-1.116-.558C3.26 14.752 3 14.426 3 14c0-.599.5-1 .961-1.243.505-.266 1.187-.467 1.957-.594a.5.5 0 0 1 .575.411z"/>
                            </svg>
                            {{ name }}, {{ country }}
                        </a>
                    </h4>
                    <strong>Population:</strong> {{ population }}<br>
                    <small>feels like: </small><strong>{{ feels }} °C</strong><br>
                    <small><strong>UV index: </strong>{{ uvi }}</small>
                    <hr>

                    <h5>
                        <svg width="1.1em" height="1.1em" viewBox="0 0 16 16" class="bi bi-list-ul" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm-3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                        </svg>
                        Current weather
                    </h5>

                    <hr>

                    <article>

                        <p>
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-geo-alt-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                            </svg>
                            <strong>Lon:</strong> {{ lon }}°, 
                            <strong>Lat:</strong> {{ lat }}°
                        </p>

                        <p v-for="dt in dweather">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cloud-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383z"/>
                            </svg>
                            <strong>Condition: </strong>
                            {{ dt.main }}, {{ dt.description }}
                        </p>

                        <p>
                            <svg width="1.1em" height="1.1em" viewBox="0 0 16 16" class="bi bi-thermometer-half" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" d="M6 2a2 2 0 1 1 4 0v7.627a3.5 3.5 0 1 1-4 0V2zm2-1a1 1 0 0 0-1 1v7.901a.5.5 0 0 1-.25.433A2.499 2.499 0 0 0 8 15a2.5 2.5 0 0 0 1.25-4.666.5.5 0 0 1-.25-.433V2a1 1 0 0 0-1-1z"/>
                              <path d="M8.25 2a.25.25 0 0 0-.5 0v9.02a1.514 1.514 0 0 1 .5 0V2z"/>
                              <path d="M9.5 12.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                            </svg>
                            <strong>Temperature:</strong> {{ temp }}°C, 
                            <strong>Max:</strong> {{ max }}°C
                        </p>
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-droplet-half" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10c0 0 2.5 1.5 5 .5s5-.5 5-.5c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
                              <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448z"/>
                            </svg>
                            <strong>Humidity:</strong> {{ hum }} %
                        <p>

                        </p>

                        <p>
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-tree-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" d="M8 0a.5.5 0 0 1 .416.223l3 4.5A.5.5 0 0 1 11 5.5h-.098l2.022 3.235a.5.5 0 0 1-.424.765h-.191l1.638 3.276a.5.5 0 0 1-.447.724h-11a.5.5 0 0 1-.447-.724L3.69 9.5H3.5a.5.5 0 0 1-.424-.765L5.098 5.5H5a.5.5 0 0 1-.416-.777l3-4.5A.5.5 0 0 1 8 0z"/>
                              <path d="M7 13.5h2V16H7v-2.5z"/>
                            </svg>
                            <strong>Wind speed:</strong> {{ wspeed }} <strong>m/s</strong>
                        </p>

                    </article>

                    <hr>

                    <h5>
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-map" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M15.817.113A.5.5 0 0 1 16 .5v14a.5.5 0 0 1-.402.49l-5 1a.502.502 0 0 1-.196 0L5.5 15.01l-4.902.98A.5.5 0 0 1 0 15.5v-14a.5.5 0 0 1 .402-.49l5-1a.5.5 0 0 1 .196 0L10.5.99l4.902-.98a.5.5 0 0 1 .415.103zM10 1.91l-4-.8v12.98l4 .8V1.91zm1 12.98l4-.8V1.11l-4 .8v12.98zm-6-.8V1.11l-4 .8v12.98l4-.8z"/>
                        </svg>
                        Map of {{ name + ', ' + country }}
                    </h5>

                    <hr>

                    <div>
                        <div class="google-maps">
                            <iframe width="100%" id="gmap_canvas" :src="`https://maps.google.com/maps?q=${ name + ', ' + country }&t=&z=13&ie=UTF8&iwloc=&output=embed`" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                            </iframe>
                        </div>
                        
                    </div>

                    <hr>

                    <h5>
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-hourglass-split" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M2.5 15a.5.5 0 1 1 0-1h1v-1a4.5 4.5 0 0 1 2.557-4.06c.29-.139.443-.377.443-.59v-.7c0-.213-.154-.451-.443-.59A4.5 4.5 0 0 1 3.5 3V2h-1a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-1v1a4.5 4.5 0 0 1-2.557 4.06c-.29.139-.443.377-.443.59v.7c0 .213.154.451.443.59A4.5 4.5 0 0 1 12.5 13v1h1a.5.5 0 0 1 0 1h-11zm2-13v1c0 .537.12 1.045.337 1.5h6.326c.216-.455.337-.963.337-1.5V2h-7zm3 6.35c0 .701-.478 1.236-1.011 1.492A3.5 3.5 0 0 0 4.5 13s.866-1.299 3-1.48V8.35zm1 0c0 .701.478 1.236 1.011 1.492A3.5 3.5 0 0 1 11.5 13s-.866-1.299-3-1.48V8.35z"/>
                        </svg>
                        Forecast (5 days)
                    </h5>

                    <hr>

                    <div id="forecast">
                        <div id="f_card" v-for="f in forecast" class="card px-3 pt-3 mb-2">
                            <p>
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-clock-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                  <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                                </svg>
                                <small>{{ f.f_time }}</small>
                                
                                <br>

                                <small>
                                
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cloud-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                      <path fill-rule="evenodd" d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383z"/>
                                    </svg>
                                    <strong>Forecasted conditions: </strong>
                                    {{ f.f_main }}, {{ f.f_desc }}

                                    <br>

                                    <svg width="1.1em" height="1.1em" viewBox="0 0 16 16" class="bi bi-thermometer-half" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                      <path fill-rule="evenodd" d="M6 2a2 2 0 1 1 4 0v7.627a3.5 3.5 0 1 1-4 0V2zm2-1a1 1 0 0 0-1 1v7.901a.5.5 0 0 1-.25.433A2.499 2.499 0 0 0 8 15a2.5 2.5 0 0 0 1.25-4.666.5.5 0 0 1-.25-.433V2a1 1 0 0 0-1-1z"/>
                                      <path d="M8.25 2a.25.25 0 0 0-.5 0v9.02a1.514 1.514 0 0 1 .5 0V2z"/>
                                      <path d="M9.5 12.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                                    </svg>
                                    <strong>Temperature: </strong>{{ f.f_temp }}°C<strong>, Max: </strong>{{f.f_max}}°C
                                </small>
                            </p>
                        </div>
                    </div>

                </div>

                <div v-else="err || city == '' ">
                    
                    <div style="text-align: center">
                        <strong>City name not entered or found...</strong><br>
                        <small>Meanwhile, take a look at this boi.</small><br><br>
                        <img id="robo" src="https://i.pinimg.com/originals/e5/5d/1e/e55d1ea6a6a488c810efbdb062465bf9.gif">
                    </div>

                </div>
            </div>
        </div>



    </div>
</template>

<script>

    import * as cc from '../countries.json';

    export default {

        data() {
            return {    
                time: null,

                dweather: [],
                name: '',
                lon: null,
                lat: null,
                temp: null,
                feels: null,
                max: null,
                hum: null,
                wspeed: null,
                country: '',
                city: '',
                err: '',

                forecast: [],
                population: null,

                uvi: null,
            }
        },

        mounted() {
            var today = new Date(); 
            var time = today.getFullYear()+'/'+(today.getMonth()+1)+'/'+today.getDate() + ", " + today.getHours() + ":" + today.getMinutes();

            this.time = time;
        },

        methods: {
            find_city(e){

                const api_key = "fdedc2e67c81b314b738019072d4568f";
                const url = "http://api.openweathermap.org/data/2.5/";

                fetch(url + "weather?q=" + this.city + "&appid=" + api_key)
                  .then(response => response.json())
                  .then(data => { 

                        if(data.cod && data.cod == '404'){
                            this.err = data.message;
                        } else {

                            this.name = data.name;
                            this.lon = data.coord.lon;
                            this.lat = data.coord.lat;
                            this.dweather = data.weather;
                            this.temp = Math.round(data.main.temp - 273);
                            this.feels = Math.round(data.main.feels_like - 273);
                            this.max = Math.round(data.main.temp_max - 273);
                            this.hum = data.main.humidity;
                            this.country = data.sys.country;
                            this.wspeed = data.wind.speed;

                            for(var c in cc.default)
                            {
                                if(cc.default.hasOwnProperty(c)){
                                    if(this.country == c){
                                        this.country = cc.default[c];
                                    }
                                }

                            }
                        }

                        

                  });

                fetch(url + "forecast?q=" + this.city + "&appid=" + api_key)
                  .then(response => response.json())
                  .then(data => {

                        for(var dl in data.list)
                        {
                            if(data.list.hasOwnProperty(dl)){

                                var f_unit = {
                                    "f_temp": Math.round(data.list[dl].main.temp - 273),
                                    "f_feels": Math.round(data.list[dl].main.feels_like - 273),
                                    "f_max": Math.round(data.list[dl].main.temp_max - 273),
                                    "f_hum": data.list[dl].main.humidity,
                                    "f_main": data.list[dl].weather[0].main,
                                    "f_desc": data.list[dl].weather[0].description,
                                    "f_wind": data.list[dl].wind.speed,
                                    "f_time": data.list[dl].dt_txt
                                };

                                this.forecast.push(f_unit);
                            }
                        }

                        this.population = data.city.population;

                  })

                fetch(url + "uvi?lat=" + this.lat + "&lon=" + this.lon + "&appid=" + api_key)
                    .then(response => response.json())
                    .then(data => {
                        this.uvi = data.value;
                    })

            }
        }




    }
</script>


<style type="text/css">

    .google-maps {
        position: relative;
        padding-bottom: 75%;
        height: 0;
        overflow: hidden;
    }
    .google-maps iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100% !important;
        height: 100% !important;
    }

    #main-div {
        font-family: monospace;
    }

    #main-card {
        border-radius: 1.2rem;
    }

    #robo {
        width: 50%;
        border-radius: 2rem;
        box-shadow: 7px 7px 15px -10px rgba(0,0,0,0.48);
    }

    #forecast {
        max-height: 300px;
        overflow: scroll;
    }

    #f_card {
        border-radius: 1.3rem;
        box-shadow: 7px 7px 15px -10px rgba(0,0,0,0.48);
    }

</style>
