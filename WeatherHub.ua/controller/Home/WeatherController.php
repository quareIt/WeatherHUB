<?php
session_start();
/*if(isset($_SESSION['userToken'])){
    header('Location: /View/Home/Weather.php');
}else{
    header('Location: /View/Home/WeatherLite.php');
}
*/
require_once '../../Repository/TranslateWord.php';
$urlDay = 'http://api.openweathermap.org/data/2.5/weather';
$urlWeek = 'http://api.openweathermap.org/data/2.5/forecast';
$APIKEY = '4b9b493507b1afdb7562d7d9f2a3699e';

$todayTimeStamp = time();
$NextWeekTimeStamp = $todayTimeStamp + 60*60*24*7;

$CityName = 'Ужгород';
if(isset($_GET['cityName'])){
    $CityName = $_GET['cityName'];
}

$options = array(
    'q'=>"$CityName",
    'APPID'=>$APIKEY,
    'units'=>'metric',
);

$optionsWeek = array(
    'q'=>"$CityName",
    'APPID'=>$APIKEY,
    'type'=>'day',
    'start'=>$todayTimeStamp,
    'end' => $NextWeekTimeStamp,
    'units'=>'metric'
);


$ch = curl_init();
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch,CURLOPT_URL,$urlDay.'?'.http_build_query($options));
$responseDay = curl_exec($ch);
$dataDay = json_decode($responseDay,true);
curl_close($ch);

$ch = curl_init();
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch,CURLOPT_URL,$urlWeek.'?'.http_build_query($optionsWeek));
$responseWeek = curl_exec($ch);
$dataWeek = json_decode($responseWeek,true);
$weekDataArray = array();
curl_close($ch);


$countHour = 1;
$tempMax = -99;
$AvgTemp = 0;
$tempMin = 100;
$AvgDayData =0;
$AvgHumidity = 0;
$del = 8;
foreach ($dataWeek['list'] as $setData) {
    
    if($countHour==$del){

        $whatDay = new DateTime();
        $whatDay->setTimestamp($setData['dt']);
        $dateFormat = $whatDay->format('d'). ' '. $tranlatedMonth[$whatDay->format('F')];
        $AvgTemp/=$del;
        $AvgHumidity/=$del;
        $AvgDayData['TempAvg'] =round($AvgTemp);
        $AvgDayData['TempMin'] = round($tempMin);
        $AvgDayData['HumidityAvg'] = round($AvgHumidity);
        $AvgDayData["weather"][0]["main"] =$translatedWeathers[$setData["weather"][0]["main"]];
        $AvgDayData['Day'] = $dateFormat;
        
        $weekDataArray[] = $AvgDayData;
        $AvgTemp = 0;
        $AvgHumidity = 0;
        $tempMax = -99;
        $tempMin = 100;
        $countHour = 1;
    }
    $AvgHumidity +=$setData["main"]["humidity"];
    $AvgTemp+= $setData['main']['temp'];
    if($tempMin > $setData['main']['temp'] ){
        $tempMin = $setData['main']['temp'];
    }
    if($tempMax<$setData['main']['temp']){
        $tempMax = $setData['main']['temp'];
        $AvgDayData = $setData;
        $AvgDayData['imageWeather'] = 'http://openweathermap.org/img/wn/' . $setData['weather'][0]['icon'] . '.png';
    }
    $countHour++;
    //$setData['imageWeather'] = 'http://openweathermap.org/img/wn/' . $setData['weather'][0]['icon'] . '.png';
    //$weekDataArray[] = $setData;
}

$nameWeather = $translatedWeathers[$dataDay['weather'][0]['description']];
$City = $dataDay['name'];
$SpeedWind = $dataDay['wind']['speed'];
$Temperature = $dataDay['main']['temp'];
$TemperatureFeels = $dataDay['main']['feels_like'];
$TemperatureMax = $dataDay['main']['temp_max'];
$TemperatureMin = $dataDay['main']['temp_min'];
$Cloud = $dataDay['clouds']['all'];
$ImageWeather = 'http://openweathermap.org/img/wn/' . $dataDay['weather'][0]['icon'] . '.png';



$_SESSION['WeatherWeekToken']  = $weekDataArray;

$_SESSION['WeatherDataToken'] = [
    'Weather'=>$nameWeather,
    'City'=>$City,
    'SpeedWind'=>$SpeedWind,
    'Temperature'=>$Temperature,
    'TemperatureFeels'=>$TemperatureFeels,
    'TempMax'=>$TemperatureMax,
    'TempMin'=>$TemperatureMin,
    'Cloud'=>$Cloud,
    'ImageWeather'=>$ImageWeather,

];


header('Location: /View/Home/Weather.php');

echo '<pre>';
print_r($dataWeek );
/*
header('Location: /View/Home/Weather.php');
echo '<img src="' . $imageUrl . '" alt="Weather Icon">';
echo '<h3>Temperature: '.$dataDay['main']['temp'].'</h3>';
echo '<h4>Max temperature: '.$dataDay['main']['temp_max'].'</h4>';
echo '<pre>';
print_r($dataWeek );
*/