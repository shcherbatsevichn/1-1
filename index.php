<?php
//Определить  количество  цифр,  меньших  5,  используемых  при  
//записи натурального числа N.

$n = 21; 

$h = 0;
$dz = 0;
$pc = 0;  

$counter = 0; 

//--------------------Тысячи----------------
if($n < 5000 && $n >999){
    $counter++;
}
//--------------------Сотни----------------
$h = $n % 1000; 
if($h < 500 && $h >99){
    $counter++;
}elseif($h == 0){
    $counter++;
}
//-------------------Десятки----------------
$dz = $h % 100; 
if($dz < 50 && $dz >9){
    $counter++;
}elseif($dz == 0){
    $counter++;
}
//--------------------единицы------------
$pc = $dz % 10; 
if ($pc < 5 && $pc > 0){
    $counter++;
}elseif($pc == 0){
    $counter++;
}


echo ($n."<br>".$h."<br>".$dz."<br>".$pc."<br>");  

echo ("Количество цифр < 5 -".$counter);