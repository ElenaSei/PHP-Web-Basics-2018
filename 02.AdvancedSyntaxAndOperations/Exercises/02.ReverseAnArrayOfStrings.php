<?php
    $arr = explode(' ', readline());

    $reversedArr = array_reverse($arr);

    echo implode(' ', $reversedArr);