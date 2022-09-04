<h1>Массивы</h1>
<h2>list()</h2>
<?php

  $names[0] = "Никита";
  $names[1] = "Marina";
  $names[2] = "Anna";

  var_dump($names);
  echo "<br>";
  $nick = $names[0];
  $marina = $names[1];
  $anna = $names[2];

  list($nick2, , $marina2) = $names;

  var_dump($nick2);
  var_dump($marina2);

?>

<h2>array()</h2>
<?php

  $arr = array();
  $arr2 = array('Nick', 'Marina', 'Anna');
  $arr3 = array(13=>"Nick", "age"=>19, "isStudent"=>true);

  var_dump($arr3);

?>

<h2>Сортировка массивов</h2>
<?php 

  $A = array("a"=>"Banana", "b"=> "Apple", "c"=> "Durian", "d" => "Coconut");
  $B = array("Banana", "Apple", "Durian", "Coconut");

  // var_dump($B);
//   asort($B);
// echo "<br>";
//   var_dump($B);

  $C = array("z"=>"Banana", "y"=> "Apple", "x"=> "Durian", "a" => "Coconut");

//   var_dump($C);
//   ksort($C);
// echo "<br>";
// var_dump($C);

  $ar = array(
    array("10", 2, 14, "15", "n"),
    array(1, 5, 3, "4", 11)
  );

  // print_r($ar);
  // array_multisort($ar[0], SORT_ASC, SORT_STRING,
  //   $ar[1], SORT_NUMERIC, SORT_DESC);
  // echo "<br>";
  // print_r($ar);
  // echo "<br>";

  // foreach($ar as $key1 => $value1) {
  //   echo "{$key1} строка:<br>";
  //   foreach($value1 as $key2 => $value2) {
  //     echo "{$key2}: ";
  //     var_dump($value2);
  //     echo "<br>";
  //   }
  //   echo "<br>";
  // }

    // $a = array("a" => "Dota 2", "b" => "CS:GO", "c" => "Apex");
    // var_dump($a);
    // $b = array_reverse($a);
    // echo "<br>";
    // var_dump($b);


    // $a = array("4", 5, "1", -4, "17");
    // var_dump($a);
    // sort($a);
    // echo "<br>";
    // var_dump($a);


    $a = array("4", 5, "1", -4, "-10", "17");
    
    // var_dump($a);
    // echo "<br>";
    
    // sort($a);
    
    // var_dump($a);
    // echo "<br>";

    // shuffle($a);

    // foreach($a as $k) echo $k."  ";
    // echo "<br>";

    // shuffle($a);
    
    // foreach($a as $k) echo $k."  ";
    // echo "<br>";

    // shuffle($a);

    // foreach($a as $k) echo $k." ";
    // echo "<br>";

?>

<h2>Ключи и значения массива</h2>
<?php

  $a = array("name"=> "Nick", "age" => 19, "isStudent" => "true", "shortname" => "Nick");

  
  // var_dump($a);
  // echo "<br>";
  // $b = array_flip($a);    
  // var_dump($b);
  // echo "<br>";

    $a = array("name"=> "Nick", "age" => 19, "isStudent" => "true", "phone" => "+123");

    // $keys = array_keys($a);
    // var_dump($keys);
    // echo "<br>";

    // $key = array_keys($a, "Nick");
    // var_dump($key);
    // echo "<br>";
  
    $a = array("name"=> "Nick", "age" => 19, "isStudent" => "true", "phone" => "+123");

    // $values = array_values($a);
    // var_dump($values);
    // echo "<br>";

    // $age = in_array(19, $a);
    // var_dump($age);
    // echo "<br>";

    // $name = in_array("Nick", $a);
    // var_dump($name);
    // echo "<br>";


    $a = array("name"=> "Nick", "age1" => 19, "isStudent" => "true", "phone" => "+123", "age2" => 19, "isProgrammer" => "true");
    
    // $namesInArr = array_count_values($a);
    // var_dump($namesInArr);
    // echo "<br>";

    $a1 = array("One", "Two");
    $a2 = array("Three", "Four", "Five", "Six");
   
    // $res1 = $a1 + $a2;
    // var_dump($res1);
    // echo "<br>";

    // $res2 = $a2 + $a1;
    // var_dump($res2);
    // echo "<br>";


    $a1 = array("One", "Two");
    $a2 = array("Three", "Four", "Five", "Six", "Two", "two");

    // $res1 = $a1 + $a2;
    // var_dump($res1);
    // echo "<br>";

    // $res2 = array_merge($a1, $a2);
    // var_dump($res2);
    // echo "<br>";

?>

<h2>Получение части массива</h2>
<?php

  $a = array("Nick", "Marina", "Anna", "Dasha", "Olya", "Veronika");
  $res = array_slice($a, 0, 2);
  $res2 = array_slice($a, 2);
  $res3 = array_slice($a, -2, 3);
  
  // var_dump($res);
  // echo "<br>";
  
  // var_dump($res2);
  // echo "<br>";

  // var_dump($res3);
  // echo "<br>";

?>


<h2>Вставка и удаление элементов массива</h2>
<?php

  // $arr = array(5 => "1", 11 => -7);
  // var_dump($arr);
  // echo "<br>";

  // $arr[] = 13;
  // var_dump($arr);
  // echo "<br>";

  // $arr["name"] = "Nick";
  // var_dump($arr);
  // echo "<br>";

  // unset($arr[11]);
  // var_dump($arr);
  // echo "<br>";

  // echo "<br>push:<br>";
  // array_push($arr, 19, "+123");
  // var_dump($arr);
  // echo "<br>";

  // echo "<br>pop:<br>";
  // $item = array_pop($arr);
  // var_dump($item);
  // echo "<br>";
  // var_dump($arr);
  // echo "<br>";

  // echo "<br>unshift:<br>";
  // array_unshift($arr, "Marina", true);
  // var_dump($arr);
  // echo "<br>";

  // echo "<br>shift:<br>";
  // $item = array_shift($arr);
  // var_dump($item);
  // echo "<br>";
  // var_dump($arr);
  // echo "<br>";

  // echo "<br>unset array:<br>";
  // unset($arr);
  // var_dump($arr);
  // echo "<br>";

  // $arr = array(1, 2, 3, 4, 4, 5, 5, 2, 6, 7);
  // $b = array_unique($arr);
  // print_r($b);
  // echo "<br>";

  // $colors = array("red", "green", "yellow", "black");
  // array_splice($colors, 1, 2);
  // var_dump($colors);
  // echo "<br>";

  // $colors = array("red", "green", "yellow", "black");
  // array_splice($colors, 1, 2, array("blue", "orange", "violet"));
  // var_dump($colors);
  // echo "<br>";

  // $colors = array("red", "green", "yellow", "black");
  // array_splice($colors, 2, 0, array("blue", "orange", "violet"));
  // var_dump($colors);
  // echo "<br>";

?>

<h2>Преобразования переменных в массив и обратно</h2>

<?php

  $name = "Nick";
  $age = 19;
  $isStudent = true;
  $language = "JavaScript";
  $parameters = array("name", "age", "isStudent");
  $arr = compact("name", "age", "isStudent");
  var_dump($arr);
  echo "<br>";

  $arr2 = compact("language", $parameters);
  var_dump($arr2);
  echo "<br>";

  $arr2["language"] = "php";
  $arr2["age"] = 20;
  extract($arr2);
  echo $language."<br>".$age."<br>";

  // $range = range(7, 13);
  // var_dump($range);
  // echo "<br>";

  // echo count($range)."<br>";

?>


<h2>Сравнение массивов</h2>
<?php

    // $arr1 = array("JS", "PHP", "C#", "Java");

    // $arr2 = array("JS", "HTML", "C++", "Java");

    // $diff = array_diff($arr2, $arr1);
    // var_dump($diff);
    // echo "<br>";

    // $p1 = array("name"=> "Nick", "age"=> 19, "isStudent"=> true);
    // $p2 = array("name"=> "Marina", "age"=> 19, "isDancer"=> true);
    // $diff = array_diff_assoc($p1, $p2);
    // var_dump($diff);
    // echo "<br>";

    $arr1 = array("JS", "PHP", "C#", "Java");
    $arr2 = array("JS", "HTML", "C++", "Java");

    $intersect = array_intersect($arr2, $arr1);
    var_dump($intersect);
    echo "<br>";


?>