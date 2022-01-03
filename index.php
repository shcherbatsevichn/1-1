<?php
//Определить  количество  цифр,  меньших  5,  используемых  при  
//записи натурального числа N.

$n = 16657114;  
$value = $n;

$num = 0;
$counter = 0;
while($value != 0){
    $num = ($value / 10 - floor($value / 10) )*10;
    $value = floor($value / 10);
    if($num < 5){
        $counter++;
    }    
}

echo ("Количество цифр < 5 -".$counter);