<?php 
$get_surah = file_get_contents("https://api.quran.sutanlab.id/surah/18");
//echo $get_surah;

$pre = json_decode($get_surah);
$total_ayat = $pre->data->numberOfVerses; 
echo "Surah ".$pre->data->name->transliteration->id;
echo "<br>";
echo "Surah ke".$pre->data->number;
// echo $pre->data->tafsir; 
echo "<br>";
echo $pre->data->numberOfVerses." Ayat";
echo "<br>";
echo $pre->data->tafsir->id;
echo "<br>";
echo $pre->data->preBismillah->text->arab;
echo "<br>";
echo $pre->data->preBismillah->translation->id;
echo "<br>";
echo "<hr>";
echo "<br>";
foreach($pre->data->verses as $val){
    echo "<br>";
    echo $val->number->inSurah." ".$val->text->arab;
    echo "<br>"; 
    echo $val->translation->id;
    echo "<br>"; 
}
?>