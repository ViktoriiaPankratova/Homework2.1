<?php
$number1=10;
$number2=-4;
$number3=18;
$numberx=3;  //кількість аргументів для пошуку середнього арифметичного
    $result1=$number1+$number2+$number3;
    echo $result1.PHP_EOL;
        $result2=($number1+$number2+$number3)/$numberx;
        echo $result2.PHP_EOL; //або можна зі знайденої вище суми визначити середнє арифмефметичне. Тоді:
        $result2_1=$result1/$numberx;
        echo $result2_1.PHP_EOL; //альтернативний пошук середнього арифметичного:)
echo "What is your name?\n";
$userName= fgets(STDIN);
echo "Hello $userName";

