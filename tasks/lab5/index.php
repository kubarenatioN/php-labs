<h2>1.</h2>
<?php

  $letters = "abcdefghijklmnopqrstuvwxyz";
  $str = "";
  $substr = "ma";
  srand();
  for ($i=0; $i <= 20; $i++) {
    $index = rand(0, strlen($letters));
    $str .= $letters[$index];
  }
  
  $pos = strpos($str, $substr, intval(strlen($str)/2));
  echo "Исходная строка: $str<br>";
  echo "Подстрока $substr<br>";
  echo $pos."<br>";
  if($pos) {
    echo "Последовательность найдена на позиции $pos <br>";
  } else {
    echo "Последовательность не найдена <br>";
  }

?>


<h2>2.</h2>
<?php

  $letters = "abcdefghijklmnopqrstuvwxyz";
  $str = "qweqwNmaQeewew";
  $substr = "ma";
  srand();
  // for ($i=0; $i <= 20; $i++) {
  //   $index = rand(0, strlen($letters));
  //   $str .= $letters[$index];
  // }

  echo "Исходная строка: $str<br>";
  echo "Подстрока $substr<br>";
  $pos = strpos($str, $substr);
  if($pos) {
    echo $str[$pos - 1]."<br>";
    echo $substr."<br>";
    echo $str[$pos + strlen($substr)]."<br>";
  } else {
    echo "Последовательность не найдена <br>";
  }
?>

<h2>3.</h2>
<?php

  $letters = "abcdefghijklmnopqrstuvwxyz";
  // $str = "qweqwNmaasdezxcewew";
  $str = "qweqwe";
  // for ($i=0; $i <= 20; $i++) {
  //   $index = rand(0, strlen($letters));
  //   $str .= $letters[$index];
  // }
  srand();
  $len = strlen($str);
  $n = rand(1, $len/2);
  $s1 = substr($str, 0, $n);
  $s2 = substr($str, $n - $len);

  echo "Исходная строка: $str<br> Строка 1: $s1<br>Строка 2: $s2<br>";
  if (strcmp($s1, $s2) === 0) {
    echo "Строки равны<br>";
  } else {
    echo "Строки не равны<br>";
  }

?>

<h2>4.</h2>
<?php
    $letters = "abcdefghijklmnopqrstuvwxyz";
    $len = strlen($letters);
    $str = "";
    $symbols = "a";
    for ($i=0; $i < 20; $i++) { 
        $str .= $letters[rand(0, $len)];
    }
    $substring = substr($str, 0, strlen($str) / 2);

    echo "Исходная строка: $str<br>Подстрока: $symbols<br>Первая половина: $substring<br>";

    $pos = strpos($substring, $symbols);
    if ($pos !== false) {
        echo "Совпадение есть на позиции $pos<br>";
    }
    else {
        echo "Ничего не найдено<br>";
    }
?>

<h2>5.</h2>
<?php
    $letters = "abcdefghijklmnopqrstuvwxyz";
    $len = strlen($letters);
    $str = "";
    $symbols = "a";
    for ($i=0; $i < 20; $i++) { 
        $str .= $letters[rand(0, $len)];
    }

    echo "Исходная строка: $str<br>Подстрока: $symbols<br>";

    $pos = strpos($str, $symbols);
    if ($pos !== false) {
        echo "Совпадение есть на позиции $pos<br>";
        $r = rand(-10, 17);
        echo "Случайное число: $r<br>";
    }
    else {
        echo "Совпадений не найдено<br>";
        echo strlen($symbols)."<br>";
    }
?>

<h2>6.</h2>
<?php
    $str = "abc abc abc";
    $firstOc = strpos($str, "b");
    $lastOc = strrpos($str, "b");
    $firstOcFrom3 = strpos($str, "b", $firstOc + 1);
    echo "Первое вхождение: $firstOc<br>Последнее вхождение: $lastOc<br>Поиск начиная с 3 позиции: $firstOcFrom3";
?>

<h2>7.</h2>
<?php
    $spaceNumber = 4;
    $str = "aaa aaaaa aaa aaaa aaa";
    $pos = -1;
    for ($i=0; $i < $spaceNumber; $i++) { 
        $pos = strpos($str, " ", $pos + 1);
    }
    echo "Позиция {$spaceNumber}-го пробела: $pos";
?>

<h2>8.</h2>
<?php
// compare lowercase
    $char = 'v';
    echo "char: $char<br>";
    $code = ord($char);
    $codeUpper = ord(strtoupper($char));
    
    if ($code === $codeUpper && ctype_alpha($char)) {
        echo "latin lowercase letter";
    }
    echo "<br>";
    
    echo "Is alphabetic letter? "; 
    var_dump(ctype_alpha($char));
    echo "<br>";

    // 2.
    echo "Is uppercase? "; 
    var_dump(ctype_upper($char));
?>

<h2>9.</h2>
<?php
    $str = "Слова слова слова.";
    $withoutDot =  rtrim($str, ".");
    echo $withoutDot .= "...";
?>

<h2>10.</h2>
<?php
    $polyndrom = "level";
    $len = strlen($polyndrom);
    $revPolyndrom = strrev($polyndrom);
    if (strcmp($polyndrom, $revPolyndrom) === 0) {
        echo "Строка $polyndrom - полиндром";
    } else {
        echo "Строка $polyndrom - не полиндром";
    }
    // $isPolyndrom = true;
    // for ($i=0; $i < intval($len / 2); $i++) { 
    //     if (strcmp()
    //     if ($polyndrom[$i] !== $revPolyndrom[$i]) {
    //         $isPolyndrom = false;
    //         break;
    //     }
    // }
    // if ($isPolyndrom) {
    //     echo "Строка $polyndrom - полиндром<br>";
    // } else {
    //     echo "Строка $polyndrom - не полиндром<br>";
    // }
?>

<h2>11.</h2>
<?php
    $str = "apple";
    echo str_shuffle($str);
?>

<h2>12.</h2>
<?php
    $start = 100;
    $end = 120;
    $letters = "abcdefghijklmnopqrstuvwxyz";
    $l = strlen($letters);
    $len = rand($start, $end);
    for ($i=0; $i < $len; $i++) { 
        $str .= $letters[rand(0, $l)];
    }
    echo "$str<br>";
    $start = 0;
    $end = intval($len*0.1);
    $sub = substr($str, $start, $end);
    echo "Длина: $len<br><br>";
    echo "Подстрока: $sub<br>";
    
    while ($end < $len && $start !== $end) {
        $subLen = strlen($sub);
        $start = $end;
        $end = rand($start + $subLen, intval($start + $subLen * 1.2));
        echo "Начало: $start<br>";
        echo "Конец: $end<br>";
        $sub = substr($str, $start, intval($end) - $start);
        echo "Sub: $sub<br>----<br>";
    }
?>

<h2>13.</h2>
<?php
    $str = "1234567890";
    echo var_dump(str_split($str, 2));
?>

<h2>14.</h2>
<?php
    $str = "1234567890";
    echo implode("-", str_split($str, 2));
?>

<h2>15.</h2>
<?php
    $str = "12345678";
    echo strrev(implode(" ", str_split(strrev($str), 3)));
?>

<h2>16.</h2>
<?php
    $str = "I--love-you";
    $sub = substr($str, 1);
    $pos = strpos($sub, "-", 2);
    $res = substr_replace($sub, "-", $pos, 0);
    echo "Исходная строка: ".$str."<br>Полученная строка: ".$res."<br>";
?>