<?php 
$get_solat = file_get_contents("https://api.banghasan.com/sholat/format/json/jadwal/kota/703/tanggal/2021-04-14");
$pre = json_decode($get_solat);
echo "<pre>";
print_r($pre);
echo "</pre>";
// echo "<pre>";
// foreach($pre->results->datetime as $val){
//     echo "<pre>";
//     echo $val->date->gregorian;
//     echo "<br>";
//     echo "<hr>";
//     echo $val->times->Imsak; 
//     echo "<br>";
//     echo $val->times->Fajr;
//     echo "<br>";
//     echo $val->times->Dhuhr;
//     echo "<br>";
//     echo $val->times->Asr;
//     echo "<br>";
//     echo $val->times->Sunset;
//     echo "<br>";
//     echo $val->times->Sunset;

//     echo "</pre>"; 
// }
// print_r($pre->results->datetime[0]);
// echo "</pre>"; 
?>