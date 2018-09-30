<?php
    $num1 = readline();
    $num2 = readline();

    $result = $num1 + $num2;
    echo '$firstNumber + $secondNumber = '. "$num1 + $num2 = "
        . number_format($result, 2, '.', '');