<h1>Лабораторная работа №10. Функции и ссылки</h1>

<h2>return</h2>
<?php
  // function retfunc($val) {
  //   return $val;
  // }
  // echo retfunc(7)."<br>";

  // function numbers() {
  //   return array(0, 1, 2);
  // }

  // list($zero, $one, $two) = numbers();
  // echo $zero." ".$one." ".$two."<br>";
?>

<h2>Ссылки</h2>
<?php
  // $a = 10;
  // $b = &$a;
  // echo "b = $b, a = $a<br>";
  // $b = 7;
  // echo "b = $b, a = $a<br>";

  // $A = array('a' => 'aaa', 'b' => 'bbb');
  // $b = &$A['b'];
  // echo $A['b']."<br>";

  // $b = 0;
  // echo $A['b']."<br>";


  // $a = 10;
  // $b = 20;
  // $c = 30;

  // $p = "c";
  // echo $$p."<br>";

  // $$p = 33;
  // echo $$p."<br>";
  // echo $c."<br>";

  // function foo(&$var) {
  //   $var += 11;
  // }
  // $a = 5;
  // foo($a);
  // echo $a."<br>";

  // $a = 1;
  // $b = &$a;

  // echo "a = $a, b = $b<br>";
  // unset($a);
  // echo "a = $a, b = $b<br>";

  // $a = 2;
  // echo "a = $a, b = $b<br>";

  // unset($b);
  // echo "a = $a, b = $b<br>";

?>

<h2>Функции</h2>
<?php
  function func() {
    $num = 777;
    return $num;
  }
  $a = func();
  echo "a = $a<br>";

  $a = 5;
  $b = 7;
  function sum() {
    global $b;
    $GLOBALS['c'] = $GLOBALS['a'] + $b;
  }
  sum();
  echo $c."<br>";

  function power($x, $n) {
    $res = 1;
    for($i = 1; $i <= $n; $i++) {
      $res *= $x;
    }
    return $res;
  }
  $aa = power(2, 5);
  echo $aa."<br>";

  function power2(&$x, $n) {
    $val = 1;
    for($i = 1; $i <= $n; $i++) {
      $val *= $x;
    }
    $x = $val;
  }
  $aa2 = 2;
  power2($aa2, 3);
  echo $aa2."<br>";

  function makeCupOf($type = "морса") {
    return "Сделай чашечку $type";
  }
  echo makeCupOf("какао")."<br>";
  echo makeCupOf()."<br>";

  function counArgs() {
    $n = func_num_args();
    echo "В функицю передано $n аргументов<br>";
    echo "Аргумент №2 = ".func_get_arg(1)."<br>";
    $argList = func_get_args();
    for($i = 0; $i < count($argList); $i++) {
      $ii = $i + 1;
      echo "Аргумент №{$ii} = {$argList[$i]}<br>";
    }
  }
  counArgs(1, 5, 3, 4);
?>

<h2>Статические переменные</h2>
<?php
  function myFn() {
    static $a;
    $a++;
    echo "a = $a<br>";
  } 
  for($i = 0; $i++ < 5; ) {
    myFn();
  }
?>

<h2>Рекурсия</h2>
<?php
  function factorial($x) {
    if ($x === 0) return 1;
    else return $x*factorial($x - 1);
  }
  echo factorial(5);

  $phpver = phpversion();
  switch($phpver[0]) {
    case "7": 
      function getversion() {return "PHP7";}
      break;
    case "5": 
      function getversion() {return "PHP5";}
      break;
    case "4": 
      function getversion() {return "PHP4";}
      break;
    case "3": 
      function getversion() {return "PHP3";}
      break;
    default:
      function getversion() {return "???";}
  }
  echo getversion();
?>