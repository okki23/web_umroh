<?php 
$get_surah = file_get_contents("https://api.quran.sutanlab.id/surah");
//echo $get_surah;

$pre = json_decode($get_surah);
echo '<pre>';
print_r($pre->data);
echo '</pre>';
?>