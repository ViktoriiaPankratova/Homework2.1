<?php
echo "Порахуємо суму та середнє арифметичне\n";
echo "Введіть перше число\n";
$userNumber1= fgets(STDIN);
echo "Введіть друге число\n";
$userNumber2= fgets(STDIN);
echo "Введіть третє число\n";
$userNumber3=fgets(STDIN);
echo "Скільки значень Ви ввели?)";
$userAmountNumber=fgets(STDIN);
    $result1=$userNumber1+$userNumber2+$userNumber3;
    echo "Сума аргументів $result1";
    $result2=($userNumber1+$userNumber2+$userNumber3)/$userAmountNumber;
    echo "Середнє арифметичне $result2";

