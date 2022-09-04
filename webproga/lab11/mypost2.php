<?php 

  $var1 = $_POST["var1"];
  $var2 = $_POST["var2"];
  if (!empty($var1) && !empty($var2)) {
    $res = $var1 * $var2;
    echo "<p>Результат перемножения равен {$res}</p>";
  }

?>