<?php 

  if (!empty($_GET["name"]) && !empty($_GET["age"])) {
    echo "Получены данные ".$_GET["name"].", ".$_GET["age"];
  }

?>