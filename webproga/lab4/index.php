<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Document</title>
</head>

<body>
  <style>
    body {
      font-size: 20px;
    }
  </style>
  <h2>Простые математические функции</h2>

  <?php
  echo "floor(4.7): " . floor(4.7) . "<br>";
  echo "ceil(3.1) : " . ceil(3.1) . "<br>";
  echo "round(3.5): " . round(3.5) . "<br>";
  echo "round(3.49): " . round(3.49) . "<br>";
  echo "abs(-4): " . abs(-4) . "<br>";
  echo "min(4, 6, 8, 1): " . min(4, 6, 8, 1) . "<br>";
  echo "max(4, 6, 8, 1): " . max(4, 6, 8, 1) . "<br>";
  echo "sqrt(16): " . sqrt(16) . "<br>";
  ?>

  <h2>Случайные числа</h2>
  <?php
  echo "<br><p>Без задания начального значения</p>";
  for ($i = 0; $i < 5; $i++) {
    echo rand() . "<br>";
  }
  echo "<br>";
  for ($i = 0; $i < 5; $i++) {
    echo mt_rand() . "<br>";
  }

  echo "<br><p>С заданием начального значения</p>";
  mt_srand((float)(microtime() * 1e6));
  srand((float)(microtime() * 1e6));
  for ($i = 0; $i < 5; $i++) {
    echo rand() . "<br>";
  }
  echo "<br>";
  for ($i = 0; $i < 5; $i++) {
    echo mt_rand() . "<br>";
  }

  echo "<br><p>Случайное число в диапазоне</p>";
  for ($i = 0; $i <= 10; $i++) {
    $random = 100.0 + 20.0 * mt_rand() / mt_getrandmax();
    echo $random . "<br>";
  }
  ?>

  <h2>Константы</h2>
  <?php
  echo "<br>" . M_PI;
  echo "<br>" . M_PI_2;
  echo "<br>" . M_PI_4;
  echo "<br>" . M_1_PI;
  echo "<br>" . M_E;
  echo "<br>" . M_LOG2E;
  echo "<br>" . M_LNPI;
  ?>


  <h2>Проверка формата чисел</h2>
  <?php
  echo "is numeric<br>";
  echo var_dump(is_numeric("123")) . "<br>";
  echo var_dump(is_numeric("123z")) . "<br>";
  echo var_dump(is_numeric(123)) . "<br>";
  echo var_dump(is_numeric(1.23)) . "<br>";
  echo var_dump(is_numeric(5 + "-4")) . "<br>";
  echo "<br>";

  echo "is int<br>";
  echo var_dump(is_int(4)) . "<br>";
  echo var_dump(is_int(1.4)) . "<br>";
  echo var_dump(is_int("4")) . "<br>";
  echo "<br>";

  echo "is float<br>";
  echo var_dump(is_float(4)) . "<br>";
  echo var_dump(is_float(4.6)) . "<br>";
  echo var_dump(is_float(M_PI)) . "<br>";

  echo "is finite<br>";
  echo var_dump(is_finite(4 / 0)) . "<br>";
  echo var_dump(is_finite(4.6)) . "<br>";
  ?>

  <h2>Бинарные операции</h2>
  <?php
  echo var_dump(bindec('111')) . "<br>";
  echo var_dump(hexdec('a')) . "<br>";
  echo var_dump(decbin('9')) . "<br>";
  echo var_dump(dechex('13')) . "<br>";
  echo var_dump(decoct('9')) . "<br>";
  echo var_dump(base_convert('1100', 2, 10)) . "<br>";
  echo var_dump(base_convert('13', 10, 2)) . "<br>";
  ?>

  <h2>Экспоненты и логарифмы</h2>
  <?php
  echo pow(3, 4) . "<br>";
  echo exp(2) . "<br>";
  echo log(M_E) . "<br>";
  echo log10(1000) . "<br>";
  ?>

  <h2>Тригонометрия</h2>
  <?php
  echo pi() . "<br>";
  echo sin(1) . "<br>";
  echo cos(1) . "<br>";
  echo tan(1) . "<br>";
  echo asin(M_PI / 6) . "<br>";
  echo deg2rad(57.296) . "<br>";
  echo rad2deg(1) . "<br>";
  ?>

  <h2>Работа со строками</h2>
  <?php
  $name = "Nikita";
  echo "Is is {$name}'s notebook<br>";
  echo "Is is ${name}'s pen<br>";

  $plants[0][0] = "apples";
  $fruits[0][1] = "bananas";
  $fruits[1][0] = "tomatos";
  $fruits[1][1] = "cucumbers";
  echo "I want some {$fruits[0][1]} and {$fruits[1][0]}";
  ?>

  <h2>Доступ к символу в строке</h2>
  <?php
  $str = 'It is my message';
  $first = $str[0];
  $second = $str{1};
  $last = $str[strlen($str) - 1];
  echo $first . " and " . $second . "<br>";
  echo "last: " . $last;
  ?>

  <h2>Строковые функции и операторы</h2>
  <?php
  $str = "";
  if ($str == "") echo "Empty string<br>";
  if ($str != "") echo "Not an empty string<br>";

  $name1 = "Nick";
  $name2 = "John";
  if ($name1 === $name2) echo "Имена одинаковые<br>";
  if ($name1 !== $name2) echo "Имена различны<br>";

  echo strlen("Nikita") . "<br>";

  echo strpos("Banana", "ana", 2) . "<br>";
  if (strpos("Banana", "bana") === false) {
    echo "bana is not in Banana.";
  } else {
    echo "bana is in Banana";
  }
  echo "<br>";

  $str = "Programmer";
  echo substr($str, 0, 2) . "<br>";
  echo substr($str, -4, 3) . "<br>";
  echo substr($str, 3, -2) . "<br>";
  echo substr($str, -4, -1) . "<br>";
  echo "<br>";

  var_dump(strcmp("nick", "nick"));
  echo "<br>";
  var_dump(strcmp("nickk", "nick"));
  echo "<br>";
  var_dump(strcmp("nick", "nickk"));
  echo "<br>";
  var_dump(strcmp("aick", "bick"));
  echo "<br>";
  var_dump(strcmp("bick", "aick"));
  echo "<br>";
  var_dump(strcmp("board", "foard"));
  echo "<br>";
  echo strcmp("Program", "Programmerr");
  echo "<br>";

  echo "Test str cmp: <br>";
  $str1 = "aad";
  $str2 = "aaa";
  echo strcmp($str1, $str2); // -18
  echo "<br>";

  echo "<b>strcasecmp:</b><br>";
  var_dump(strcasecmp("NiCk", "nick"));
  echo "<br>";
  var_dump(strcmp("Programmer", "Program"));
  echo "<br>";
  echo "<br>";

  echo "<b>strstr:</b><br>";
  var_dump(strstr("Prograrogmming", "rogra"));
  echo "<br>";
  echo "<br>";

  echo "<b>strrchr:</b><br>";
  var_dump(strrchr("somesomeword", "some"));
  echo "<br>";
  echo "<br>";

  echo "<b>str_replace:</b><br>";
  $str = "Hello it is a message";
  $str1 = " my ";
  echo $str . "<br>";
  echo $str1 . "<br>";
  echo str_replace(" a ", $str1, $str);
  echo "<br>";
  echo "<br>";

  echo "<b>str_word_count:</b><br>";
  var_dump(str_word_count("Nick Rick Patrik"));
  echo "<br>";
  echo "<br>";

  echo "<b>wordwrap:</b><br>";
  $longText = "Это текст электронного письма, которое нужно будет отправить адресату...";
  echo $longText . "<br>";
  $prettyText = wordwrap($longText, 20, "<br>");
  echo $prettyText . "<br>";
  echo "<br>";
  echo "<br>";


  echo "<b>strip_tags:</b><br>";
  $str = "Это какой то <i style='color: red;'>интересный</i> <b>текст</b>";
  $stripped = strip_tags($str, "<b><i>");
  echo $stripped . "<br>";
  echo "<br>";
  echo "<br>";
  ?>

  <h2>Преобразование строк в массивы и наоборот</h2>
  <?php
  echo "<b>explode():</b><br>";
  $subjects = "php, js, c#, design";
  $list = explode(", ", $subjects);
  var_dump($list);
  echo "<br>";
  echo "<br>";

  echo "<b>implode():</b><br>";
  $words = array("I", "love", "php");
  $sentense = implode(" ", $words);
  var_dump($sentense);
  echo "<br>";

  ?>

  <h2>Quotemeta</h2>
  <?php
  $str = "Hello. I'm Nick. What about you?";
  var_dump($str);
  $strQ = quotemeta($str);
  echo "<br>";
  var_dump($strQ);
  ?>

  <h2>Работа с отдельными символами</h2>
  <?php
  $str = "JavaScript";
  echo $str[0] . $str[4] . "<br>";

  echo chr(65) . "<br>";
  echo ord("A") . "<br>";
  ?>

  <h2>Удаление пробелов</h2>
  <?php
  $text = "   Hello, how are you?    \n";
  var_dump($text);
  echo "<br>";
  var_dump(trim($text, " Hell"));
  echo "<br>";
  echo trim("Добрый день", "Доб");
  echo "<br>";
  echo ltrim($text);
  echo "<br>";
  echo chop($text);
  echo "<br>";
  ?>


  <h2>Преобразование символов</h2>
  <?php
  $name = "NiKiTa";
  echo strtr($name, "NKTia", "nktIA") . "<br>";
  ?>


  <h2>Функции кодирования и декодирования</h2>
  <?php

  $str = "Hello, Nick !!!";
  echo urlencode($str);

  echo "<br>";

  $strDecode = "Hello%2C+Nick+%21";
  echo urldecode($strDecode);

  echo "<br>";

  echo rawurlencode($str);

  echo "<br>";

  $htmlStr = "<a href='test'>Test</a>";
  echo htmlspecialchars($htmlStr, ENT_QUOTES);
  echo "<br>";

  $slashes = "\"";
  echo $slashes . "<br>";
  echo stripslashes($slashes) . "<br>";
  ?>

  <h2>Изменение регистра</h2>
  <?php
  echo strtolower("NiKiTA");
  echo "<br>";

  echo strtoupper("nikita");
  echo "<br>";
  ?>

  <h2>Преобразование кодировок</h2>
  <?php
  $func = function (string $char): int {
    return ord($char);
  };
  $str = "Никита";
  echo $str . "<br>";
  $arr = str_split($str);
  $arr2 = array_map($func, $arr);
  var_dump($arr2);
  echo "<br>";
  echo mb_internal_encoding();
  echo "<br>";
  $str2 = convert_cyr_string($str, 'w', 'k');
  $arr3 = array_map($func, $arr2);
  var_dump($arr3);
  var_dump($str2)
  ?>


  <h2>Шифрование</h2>
  <?php
  $pass_a = "MySecret";
  $pass_b = "MySecret";
  $hash_a = md5($pass_a);
  echo $hash_a . "<br>";

  $hash_b = md5($pass_b);
  echo $hash_b . "<br>";

  if ($hash_a === $hash_b) echo "Пароли совпадают";
  else echo "Пароли не совпадают";
  echo "<br><br><br>";

  $fruit = "Banana";
  $fruit2 = "Watermelon";
  echo sha1($fruit)."<br>";
  echo sha1($fruit2)."<br>";
  echo "<br><br><br>";

  $file = "file.txt";
  echo "Хеш файла $file по md5: " . md5_file($file);
  echo "<br><br><br>";

  echo "Хеш файла $file по sha1: " . sha1_file($file);
  echo "<br><br><br>";

  $hash1 = crypt("Nikita", "Nick");
  $hash2 = crypt("Nikita", "Apple");
  echo $hash1."<br>".$hash2."<br>";
  
  $pass_hash = password_hash("Nikita", PASSWORD_DEFAULT);
  echo $pass_hash."<br>";

  ?>

<h2>Сравнение строк</h2>

<?php
  echo levenshtein("Nick", "Nikita")."<br>";
  echo levenshtein("Nick", "Nikita", 3, 2, 4)."<br>";
?>

<?php
  $input = 'apple';
  function findWord(string $input) {
    $words = array('apple', 'pineapple', 'banana', 'orange', 'radish', 'carrot', 'pea', 'bean', 'potato');
    $shortest = -1;
    foreach($words as $word) {
      $lev = levenshtein($input, $word);
      if ($lev === 0) {
        $closest = $word;
        $shortest = 0;
        break;
      }
      if ($lev <= $shortest || $shortest < 0) {
        $closest = $word;
        $shortest = $lev;
      }
    }
    // if ($shortest === 0) {
    //   // echo "Найдено точное совпадение: $closest \n";
    //   return $closest;
    // }
    // else {
    //   // echo "Возможно вы хотели ввести $closest \n";
    // }
    return array($shortest, $closest);
  } 
  $res = findWord($input);
  var_dump($res);
  if ($res[0] === 0) {
    echo "<br>"."Найдено точное совпадение: {$res[1]}\n";
  }
  else {
    echo "<br>"."Возможно вы хотели ввести: {$res[1]}\n";
  }
?>

<h2>Форматные преоразования строк</h2>
<?php
  print("Hello world!");
  print("<br>Hello world2");
  print("Экранирование делается \"Так\".");

  $a = "My a";
  $b = "My b";
  print("<br> это а: $a, а это b: $b");

  $arr = array("val" => "БЖЧ", "type" => "boring");
  print("<br>это {$arr['val']}!");
?>

<?php
  echo "<br>";
  echo sprintf("Дробное число с 2 точками после запятой %.2f", 2.567);

  echo sprintf("<br>Ответ: %d%%<br>", 21.12345);

  printf("У меня есть %d друзей", 5.1);
  echo "<br>";
  printf("Дробное число с одной цифрой после запятой %.1f", 2.567);

?>

<br>
<?php
  $number=1234567.56123;
  $number_eng=number_format($number, 2);
  echo $number_eng;
  echo "<br>";
  $number_fr = number_format($number, 4, ',', ' ');
  echo $number_fr;  
?>


</body>

</html>