<link rel="stylesheet" href="style.css">
<h1>Задание 1</h1>
<?php 
  $a = 14;
  $b = 7;
  $c = 5;
  echo "<h3>a = $a, b = $b</h3>";
  echo "<br>a + b: ".($a + $b);
  echo "<br>a - b: ".($a - $b);
  echo "<br>b - a: ".($b - $a);
  echo "<br>a * b: ".($a * $b);
  echo "<br>a / b: ".($a / $b);
  echo "<br>a % c: ".($a % $c);
?>

<h1>Задание 2</h1>
<?php 
  $a = 7;
  $b = 9;
  $c = 6;
  $d = 3;
  $name = 'nikita';

  echo "<h3>a = $a, b = $b, c = $c, d = $d</h3>";

  echo "<div class='taskblock'>";
  echo "<br>a перед постфиксным инкрементом = ".$a;
  echo "<br>a++ = ".$a++;
  echo "<br>a после постфиксного инкремента = ".$a;
  echo "</div>";

  echo "<div class='taskblock'>";
  echo "<br>a перед постфиксным декрементом = ".$b;
  echo "<br>b-- = ".$b--;
  echo "<br>a после постфиксного декремента = ".$b;
  echo "</div>";

  echo "<div class='taskblock'>";
  echo "<br>a перед префиксным инкрементом = ".$c;
  echo "<br>++c = ".++$c;
  echo "<br>a после префиксного инкремента = ".$c;
  echo "</div>";

  echo "<div class='taskblock'>";
  echo "<br>a перед префиксным декрементом = ".$d;
  echo "<br>--d = ".--$d;
  echo "<br>a после префиксного декремента = ".$d;
  echo "</div>";

  echo "<div class='taskblock'>";
  echo "<br>name++ = ".$name++;
  echo "<br>name++ = ".$name++;
  echo "<br>name = ".$name;
  echo "</div>";

  echo "<div class='taskblock'>";
  echo "<br>++name = ".++$name;
  echo "<br>name = ".$name;
  echo "</div>";

?>

<h1>Задание 3 операции присвоения</h1>
<?php
  $a = 5;
  $b = $a + 5;
  $c = 7;
  $d = 3;
  echo "<br>b = $b";
  $b = ++$c;
  echo "<br>b = $b, c = $c";

  $b = $d*=2;
  echo "<br>b = $b, d = $d";

  echo "<br>a = $a, b = $b, c = $c, d = $d";
  $f = $a + $b + $c + $d;
  echo "<br>f = $f";
?>

<h1>Задание 4 конкатенация строк</h1>
<?php 
  $name = 'Nikita';
  $surname = 'Kubarko';

  $fullname = $name . ' ' . $surname;
  echo "<br>fullname = $fullname";

  $subject = 'Web';
  $subject .= ' Programming';
  echo "<br>subject = $subject";
?>

<h1>Задание 5 побитовые операции</h1>
<?php 
  $a = 10 & 2; //1010 & 10 = 10
  $b = 8 | 7; //1000 | 111 = 1111
  echo "<br>a = $a";//2
  echo "<br>b = $b";//15

  $c = 10 ^ 6; // 1010 ^ 0110 = 1100
  echo "<br>c = $c";//12

  $d = ~9; 
  // ...0 1001
  // ...1 0110
  echo "<br>d = $d";//-10

  $e = 5 << 2; // 101 = 10100
  $f = 3 << 4; // 11 = 110000
  $g = 9 >> 2; // 1001 = 10
  echo "<br>e = $e";//20
  echo "<br>f = $f";//48
  echo "<br>g = $g";//2
?>

<h1>Задание 6 операции сравнения</h1>

<?php 
  $a = 4;
  $b = "4";
  if ($a == $b) echo "4 == '4'<br>";
  if ($a != $b) echo "4 != '4'<br>";
  if ($a === $b) echo "4 === '4'<br>";
  if ($a !== $b) echo "4 !== '4'<br>";

  $c = 5.3 + 0.7;
  $d = 6;
  if ($c !== $d) echo "6.0 !== 6<br>";
  if ($c === $d) echo "6.0 !== 6<br>";
  if ($c == $d) echo "6.0 == 6<br>";

  $e = 'stra';
  $f = 'strb';
  if ($e == $f) echo "'stra' == 'strb'<br>";
  if ($e > $f) echo "'stra' > 'strb'<br>";
  if ($e < $f) echo "'stra' < 'strb'<br>";
?>

<h1>Задание 7 логические операции</h1>

<?php
  if (4 > 2 and -4 < 0) echo "4 > 2 and -4 < 0<br>";
  if (4 > 6 && -4 < 0) echo "4 > 6 and -4 < 0<br>";

  if (1 > 5 or 4 > 0) echo "1 > 5 or 4 > 0<br>";
  if (1 > 5 || 4 > 10) echo "1 > 5 or 4 > 10<br>";

  if (!"") echo "!\"\"<br>";
  if (!!"123") echo "!!\"123\"<br>";

  $fruits1 = array('apple', 'banana');
  $fruits2 = array(1 => 'banana', 0 => 'apple');
  if ($fruits1 == $fruits2) echo "fruits1 == fruits2 <br>";
  if ($fruits1 === $fruits2) echo "fruits1 === fruits2 <br>";
  if ($fruits1 !== $fruits2) echo "fruits1 !== fruits2 <br>";
?>
