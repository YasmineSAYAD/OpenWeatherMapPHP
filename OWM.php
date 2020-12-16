<?php
/*****************GPS coordinates*************************************/
 //latitude (Béjaia)
  $lat=36.7508896;
 //longitude (Béjaia)
  $lon=5.0567333;
 /*API key (Generate your own API key on https://api.openweathermap.org )*/
  $key='8948c4503f8e2807bf69786aa433fe26';

 //get current weather in english
  $url = 'https://api.openweathermap.org/data/2.5/weather?lat='.$lat.'&lon='.$lon.'&units=metric&appid='.$key.'&lang=en' ;
  $contents = file_get_contents($url);
  $data=json_decode($contents);
  echo'
  <div class="weathercl">
        <! -- City name -->
        <span  class="citycl" >'.utf8_decode($data->name).'</span>
        <! -- Icone -->
        <span class="iconcl" ><img src="http://openweathermap.org/img/wn/'.$data->weather[0]->icon.'.png"/></span>
        <br>
        <! -- Description -->
        <span  class="descriptioncl" >'.utf8_decode($data->weather['0']->description).  '</span>
        <! -- temperature -->
        <span class="temperaturecl" >' .utf8_decode(ceil ($data->main->temp)."°C").'</span> 
  </div>';
 ?>
