<h2>Regex match</h2>
<?php
  $str = "123 456 4789 3123 789";
  $pattern = "/\d{3}/";
  // $pattern = "/\d(\d)\d/";
  $res = preg_match($pattern, $str, $output);
  $res2 = preg_match_all($pattern, $str, $output2);
  echo $res."<br>";
  var_dump($output);
  echo $res2."<br>";
  var_dump($output2);
  echo "<br>";
?>

<h2>Regex match all</h2>
<?php
  echo "order 1: <br>";
  $str = "123 234 345 456 567";
  $pattern = "/\d(\d)\d/";
  $res = preg_match_all($pattern, $str, $output, PREG_PATTERN_ORDER);
  print_r($output);

  echo "<br>";
  echo "<br>";
  echo "order 2: <br>";
  $res2 = preg_match_all($pattern, $str, $output2, PREG_SET_ORDER);
  print_r($output2);
?>

<h2>Replace</h2>
<?php
  $text = "there       is \t a\n\t\t lot \t of\n spaces\t ;)";
  echo "Перед заменой: <br>";
  echo "<pre>$text</pre>";
  echo "<br>";

  $pattern = "/[\t+\n+]/";
  $text = preg_replace($pattern, " ", $text);
  echo "После замены: <br>";
  echo "<pre>$text</pre>";
?>
<?php
  $text = "Today is 11/16/2001";
  echo "Text: $text<br>";
  $pattern = "/(\d{2})\/(\d{2})\/(\d{4})/";
  $text = preg_replace($pattern, "\\2.\\1.\\3", $text);
  echo "Text: $text<br>";
?>

<h2>Split</h2>
<?php
  $text = join("", file("text.txt"));
  $words = preg_split("/\s+/s", $text);
  print_r($words);
  echo "<br>";
  echo "<br>";

  $str = "Hello";
  $chars = preg_split("//", $str, -1, PREG_SPLIT_NO_EMPTY);
  print_r($chars);
?>

<h2>Quoting</h2>
<?php
  $text = "?<>*^[]";
  $quoted = preg_quote($text);
  echo $text."<br>";
  echo $quoted."<br>";
?>

<h2>preg_grep</h2>
<?php
  $data = file("numbers.txt");
  echo "Data: <br>";
  print_r($data);
  echo "<br>";
  $numbers = preg_grep("/\d+/", $data);
  echo "Data with numbers: <br>";
  print_r($numbers);
?>  