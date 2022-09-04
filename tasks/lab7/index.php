<h2>1. task</h2>
<?php
    $n = 3;
    $m = 3;
    $M = [
        [1, 2, 1],
        [3, 1, 10],
        [2, 10, 1]
    ];
    $max = PHP_INT_MIN;
    $pmax = -1;
    $qmax = -1;
    for ($i=0; $i < $n; $i++) { 
        for($j = 0; $j < $m; $j++) {
            if ($M[$i][$j] > $max) {
                $max = $M[$i][$j];
                $pmax = $i + 1;
                $qmax = $j + 1;
            }
        }
    }
    echo "Amax = $max, строка $pmax, столбец $qmax";
?>

<h2>2. task</h2>
<?php
    $N = [
        [2, 3, 1],
        [3, 1, 8],
        [1, 2, 1],
        [2, 3, 5]
    ];
    for ($i=0; $i < sizeof($N); $i++) { 
        for ($j=0; $j < sizeof($N[0]); $j++) { 
           echo $N[$i][$j]." ";
        }
        echo "<br>";
    }
    echo "<br>";
    usort($N, function($row1, $row2) {
        return array_sum($row1) < array_sum($row2) ? -1 : 1;
    });
    for ($i=0; $i < sizeof($N); $i++) { 
        for ($j=0; $j < sizeof($N[0]); $j++) { 
           echo $N[$i][$j]." ";
        }
        echo "<br>";
    }
?>

<h2>3. task</h2>
<?php
    $N = 7;
    $M = [];
    $buff = [];
    for ($i=0; $i < $N; $i++) { 
        $M[] = rand(1, 5);
    }
    foreach ($M as $k => $v) {
        if (!in_array($v, $buff)) {
            $buff[] = $v;
            $u[] = $v;
        }
    }
    // $u = array_unique($M);
    print_r($M);
    echo "<br>";
    print_r($u);
?>

<h2>4. task</h2>
<?php
    $N = 3;
    $M = 4;
    $ai = 0;
    $bi = 0;
    $ei = 0;
    $A = [
        [1, 5, 2, 1],
        [1, 3, 1, 4],
        [2, 2, 5, 1],
    ];
    $B = [
        [1, 1, 3, 3],
        [2, 1, 1, 2],
        [1, 2, 6, 3],
    ];
    for ($i=0; $i < $N; $i++) { 
        for ($j=0; $j < $M; $j++) { 
            $a = $A[$i][$j]; 
            $b = $B[$i][$j]; 
            if ($a < $b) {
                $ai++;
            } else if ($a > $b) {
                $bi++;
            } else {
                $ei++;
            }
        }
    }
    echo "km = $ai, kr = $ei, kb = $bi";
?>

<h2>5. task</h2>
<?php

    $n = 2;
    $a = 125;
    
    function makeSqrt($a, $i, $n) {
        if ($i > $n + 1) {
            return 0;
        } else {
            return pow($a + makeSqrt($a, $i + 1, $n), 1 / $i);
        }
    }
    $res = makeSqrt($a, 2, $n);
    echo $res;

?>

<h2>6. task</h2>
<?php
    $N = 3;
    $vector = [];
    while (sizeof($vector) < 3) {
        $el = rand(1, 5);
        if (!in_array($el, $vector)) {
            $vector[] = $el;
        }
    }
    $isDecrease = true;
    for ($i=0; $i < sizeof($vector) - 1; $i++) { 
        if ($vector[$i] < $vector[$i + 1]) {
            $isDecrease = false;
            break;
        }
    }
    print_r($vector);
    echo "<br>";
    echo $isDecrease ? "Да" : "Нет";
?>

<h2>7. task</h2>
<?php
    $N = 3;
    $M = [
        [4, 2, 4],
        [1, -2, 4],
        [5, -2, 5],
    ];
    $hasElement = false;
    for ($i=0; $i < $N; $i++) { 
        if ($M[$i][$i] > 0 && $M[$i][$i] % 2 === 1) {
            $hasElement = true;
            break;
        }
    }
    for ($i=0; $i < $N; $i++) { 
        for ($j=0; $j < $N; $j++) { 
           echo $M[$i][$j]." ";
        }
        echo "<br>";
    }
    echo $hasElement ? "Да" : "Нет";
?>

<h2>8. task</h2>
<?php
    $N = 7;
    $v1 = [1, 0, 0, 9, 0, 0, 0];
    $v2 = [1, 0, 9, 0, 8];
    $v = $v2;
    $hasTwoZeros = false;
    for ($i=1; $i < sizeof($v); $i++) { 
        if ($v[$i] === $v[$i - 1] && $v[$i] === 0) {
            $hasTwoZeros = true;
            break;
        }
    }
    echo $hasTwoZeros ? "Да" : "Нет";
?>

<h2>9. task</h2>
<?php
    function sumRow($arr) {
        $sum = 0;
        for ($i=0; $i < sizeof($arr); $i++) { 
            $sum+=$arr[$i];
        }
        return $sum;
    }
    $N = 4;
    $M = [];
    $sum = 0;
    for ($i=0; $i < $N; $i++) { 
        for ($j=0; $j < $N; $j++) { 
            $M[$i][] = rand(-2, 5);
        }
    }
    for ($i=0; $i < $N; $i++) { 
        echo print_r($M[$i])."<br>";
    }
    for ($i=0; $i < $N; $i++) { 
        if ($M[$i][$i] < 0) {
            $sum += sumRow($M[$i]);
        }
    }
    echo $sum;
?>

<h2>10. task</h2>
<?php

    $P = 49;
    $N = NULL;
    $start = $P > 100 ? $P : 100;
    for ($i=$start; $i < 1000; $i++) {
        if ($start >= 500) {
            break;
        } 
        if ($i % $P === 0 && $i !== $P) {
            $N = $i;
            break;
        }
    }
    echo isset($N) ? $N : "нет такого числа";

?>