<?php
//Определить  количество  цифр,  меньших  5,  используемых  при  
//записи натурального числа N.

$n = 189533;  
$value = $n;

$num = 0;
$counter = 0;
do{
    $num = ($value / 10 - floor($value / 10) )*10;
    $value = floor($value / 10);
    if($num < 5){
        $counter++;
    }    
}while($value != 0);

echo ("Количество цифр < 5 -".$counter);