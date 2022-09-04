<?php 

  $name = $_POST["name"];
  $age = $_POST["age"];
  if (!empty($name) && !empty($age)) {
    echo "Получены данные:<br>";
    echo "имя - ".$name.", возраст - ".$age;
    echo "<br>";
  }
  else {
    echo "Переменные не найдены.<br>";
  }

?>