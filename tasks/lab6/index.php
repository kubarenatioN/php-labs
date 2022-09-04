<style>
    html {
        font-size: 24px;
    }
</style>
<h2>1.</h2>
<?php

$arr = array('a', 'b', 'c', 'd');
echo "$arr[0]+$arr[1], $arr[2]+$arr[3]<br>";

?>

<h2>2.</h2>
<?php

$arr = array();
for ($i = 0; $i < 24; $i++) {
    $arr[] = round(20 + rand() / getrandmax() * 10, 2);
}
$max = max($arr);
$min = min($arr);
$avg = round(array_sum($arr) / count($arr), 2);
echo "max: $max; min: $min; avg: $avg<br>";

?>

<h2>3.</h2>
<?php

$arr = array(1, 3, 2);
asort($arr);
echo implode(":", $arr);

?>

<h2>4.</h2>
<?php

$arr = array("AA", "BB", "CC", "DD", "EE");
$arr = array_map('strtolower', $arr);
// foreach ($arr as $k => $v) {
//     $arr[$k] = strtolower($v);
// }
var_dump($arr);

?>

<h2>5.</h2>
<?php

$arr = array(17, 23, 56, 6, 10);
$mult = array_reduce($arr, function ($acc, $i) {
    $acc *= $i;
    return $acc;
}, 1);
echo $mult;
echo '<br>';
echo array_product($arr);

?>

<h2>6.</h2>
<?php

    // 1.
    $start = ord('a');
    $end = ord('z');
    // $codes = range($start, $end);
    // $arr = array_map(function ($el) {
    //     return chr($el);
    // }, $codes);
    $arr = range('a', 'z');
    array_unshift($arr, "anything");
    unset($arr[0]);
    $arr = array_flip($arr);
    var_dump($arr);
        echo "<br>";
        echo "<br>";
    // 2.
    $letters = "abcdefghijklmnopqrstuvwxyz";
    $arr = array_combine(range(1, 26), str_split($letters));
    $arr = array_flip($arr);
    var_dump($arr);

?>

<h2>7.</h2>
<?php

    // $a[] = array(1, 2, 3);
    // $a[] = array(4, 5, 6);
    // $a[] = array(7, 8, 9);

    $arr = range(1, 9);
    $a = array_chunk($arr, 3);

    print_r($a);

?>

<h2>8.</h2>
<?php

    $arr = [17, 23, 56, 6, 17, 78, 6, 45, 23, 10];
    $arr = array_unique($arr);
    array_splice($arr, 0, 0, '!');
    array_splice($arr, 2, 0, '!!!');
    // $arr[0] = "!";
    // $arr[2] = "!!!";

    print_r($arr);

?>

<h2>9.</h2>
<?php

    $a="eins";
    $b="zwei";
    $c="drei";
    $d="vier";
    $e="funf";
    $arr = ["один", "два", "три", "четыре", "пять"];

    $keys = array($a, $b, $c, $d, $e);
    $arr = array_combine($keys, $arr);
    print_r($arr);

?>

<h2>10.</h2>
<?php

    $numbers = range(5, 20);

    $m[] = array_rand($numbers, 3);
    $m[] = array_rand($numbers, 3);
    $m[] = array_rand($numbers, 3);

    $diff = array_sum($m[0]) - array_sum($m[2]);
    $max = max(array_column($m, 2));

    print_r($m);
    echo "<br> diff = $diff, max = $max<br>";

    rsort($m[2]);
    print_r($m[2]);

?>

<h2>11.</h2>
<?php

    $a1 = ["banana", "apple", "avocado", "kiwi", "banana"];
    $a2 = ["banana", "mango", "lemon", "kiwi", "banana"];

    $b = array_diff($a1, $a2);
    $n = array_count_values($a1)["banana"];

    print_r($b);
    echo "<br>num of banana = $n";

?>

<h2>12.</h2>
<?php

    $numbers = range(0, 40);
    $nums = array_map(function($el) {
        return $el - 20;
    }, $numbers);
    shuffle($nums);

    $a = array_slice($nums, 0, 5);

    print_r($a);

    $max = max($a);
    $maxi = array_search($max, $a);
    $min = min($a);
    $a[array_search($min, $a)] = $max;
    $a[$maxi] = $min;

    print_r($a);

?>