<?php
$age=18;
if (is_numeric($age) && $age>0) {

    echo "��� $age ���. <br>";

    if ($age >= 18 && $age <= 59)
        $message = "��� ��� �������� � �������� <br>";
    elseif ($age > 59)
        $message = "��� ���� �� ������ <br>";
    elseif ($age <= 17 && $age >= 0)
        $message = "��� ��� ���� �������� <br>";
}
    else
        $message = "����������� ������� <br>";
echo $message;