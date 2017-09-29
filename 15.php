<?php
$a=10;
$b=2;
$operator="/";
if ($b!==0){
    $result=$a.$operator.$b."=";
}
else{
   exit("Деление на ноль <br>");
}
echo $result;
switch ($operator){
    case "+": echo $a + $b;break;
    case "-": echo $a - $b;break;
    case "*": echo $a * $b;break;
    case "/": echo $a / $b;break;
    case "%": echo $a % $b;break;
}
