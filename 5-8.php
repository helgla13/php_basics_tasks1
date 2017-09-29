<?php
$age=18;
if (is_numeric($age) && $age>0) {

    echo "Мне $age лет. <br>";

    if ($age >= 18 && $age <= 59)
        $message = "Вам еще работать и работать <br>";
    elseif ($age > 59)
        $message = "Вам пора на пенсию <br>";
    elseif ($age <= 17 && $age >= 0)
        $message = "Вам еще рано работать <br>";
}
    else
        $message = "Неизвестный возраст <br>";
echo $message;