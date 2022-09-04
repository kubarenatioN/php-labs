<?php
  for($i = 1; $i <= 5; $i++) {
    require "$i.txt";
  }
  include "header.html";
  for($i = 1; $i <= 3; $i++) {
    $filename;
    if ($i === 2) {
      require "$i.txt";
      $filename = "p$i.html";
    }
    else $filename = "p.html";
    include $filename;
  }
  include "footer.html";
?>