<h1>Управляющие конструкции языка</h1>

<h2>Условные операторы</h2>
<?php 
  $a = true;
  $b = 5 > 10;
  if ($a) echo "а истинно<br>";
  if (!$b) echo "b ложно<br>";

  $a = 5;
  $b = 1;
  if ($a > $b) {
    echo "a > b<br>";
    $c = $a - $b;
    echo "разность равна $c<br>";
  } 
  else if ($a === $b) {
    echo "a === b<br>";
  }
  else {
    echo "a < b<br>";
  }

	$x = -2;
	$mod = $x >= 0 ? $x : -$x;
	echo "Модуль числа $x равен ".$mod."<br>";

?>

<h2>Циклы</h2>
<?php 

		$x = 0;
		while($x++ < 10) echo "x = $x<br>";

		$a = 1;
		do {
			echo "a = $a<br>";
		} while (++$a < 10 && $a > 1);

		for($x = 0; $x < 10; $x++) echo "x = $x<br>";
		for($x = 0; $x++ < 10; ) echo "x2 = $x<br>";
		for($x = 0, $y = 10; $x < 10; $x++, $y--) {
			$res = $x+$y;
			echo "$res - ";
		}
		echo "<br>";

		for($i = 0, $j = 0, $k = "Точки"; $i < 10; $j++, $i+=$j) {
			$k.=".";
			echo $k."<br>";
		}

			$names = ["Nick", "Marina", "Anna"];
			foreach($names as $key) {
				echo "name: $key<br>";
			}

			$employees = ["John" => 1200, "Mark" => 1400, "Liza" => 1750];
			foreach($employees as $name => $salary) {
				echo "{$name}'s salary is {$salary}$<br>";
			}
?>

<h2>Конструкция break</h2>
<?php 

	// $x = 0;
	// while($x++ < 10) {
	// 	$y = 0;
	// 	if ($x === 11) break;
	// 	while($y++ < 10) {
	// 		echo "y = $y<br>";
	// 		if ($y === 3) break 2; //remove 2 to see difference
	// 	}
	// 	echo "<b>x = $x</b><br>";
	// }

?>

<h2>Конструкция continue</h2>
<?php
	// $x = 0;
	// $n = 0;
	// while(++$n <= 10) {
	// 	$x += 3;
	// 	if ($x % 2 === 0) {
	// 		echo "Итерация $n, x = $x<br>";
	// 		continue;
	// 	}
	// 	echo "x = $x<br>";
	// }
?>

<h2>Конструкция выбора</h2>
<?php 
	$x = rand(0, 2);
	echo "$x<br>";
	switch($x) {
		case 0: 
			echo "x равен нулю.<br>";
			break;
		case 1: 
			echo "x это единица<br>";
			break;
		case 2: 
			echo "x равен двум...<br>";
			break;
		default:
			echo "что-то пошло не так.<br>";
	}
?>