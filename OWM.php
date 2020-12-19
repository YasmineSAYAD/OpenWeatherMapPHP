<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
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
  ?>
 
  <div class="weathercl">
        <! -- City name -->
        <span  class="citycl" ><?php echo $data->name; ?> </span>
        <! -- Icone -->
        <span class="iconcl" > <?php echo '<img src="http://openweathermap.org/img/wn/'.$data->weather[0]->icon.'.png" />'; ?> </span>
        <br>
        <! -- Description -->
        <span  class="descriptioncl" ><?php echo $data->weather['0']->description; ?></span>
        <! -- temperature -->
        <span class="temperaturecl" ><?php echo ceil ($data->main->temp)."°C" ; ?></span> 
  </div>

</body>
</html>
