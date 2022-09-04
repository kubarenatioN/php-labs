<?php

  $text = $_POST['textfield'];
  $pass = $_POST['passfield'];
  $hidden = $_POST['hidden'];

  echo $text."<br>";
  echo $pass."<br>";
  echo $hidden."<br>";

  $ch1 = $_POST['checkbox1'];
  $ch2 = $_POST['checkbox2'];
  $ch3 = $_POST['checkbox3'];

  if (isset($ch1)) echo "Checkbox value: ".$ch1."<br>";
  if (isset($ch2)) echo "Checkbox value: ".$ch2."<br>";
  if (isset($ch3)) echo "Checkbox value: ".$ch3."<br>";

  $rd = $_POST['radioDay'];

  if (isset($rd)) echo "Radio: ".$rd."<br>";

  $textarea = $_POST['textarea'];
  echo "Text area: ".$textarea."<br>";

  echo "<hr size='1'>";  
  $sel1 = $_POST['select1'];
  echo $sel1."<br>";

  $sel2 = $_POST['select2'];
  foreach($sel2 as $key => $val) {
    echo "[$key] => $val <br>";
  }
  
?>