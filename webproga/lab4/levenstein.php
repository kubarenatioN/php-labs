<?php
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
    return array($shortest, $closest);
  }
?> 