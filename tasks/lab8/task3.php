<?php

    $a = 10;
    $b = 20;

    function plusMinus(&$x, &$y) {
        $x++;
        $y-=3;
    }

    echo "a = $a, b = $b<br>";
    plusMinus($a, $b);
    plusMinus($a, $b);
    plusMinus($a, $b);
    plusMinus($a, $b);
    echo "a = $a, b = $b<br>";

?>