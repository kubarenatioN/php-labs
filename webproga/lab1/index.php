<?php
echo "Это текст в несколько строк";
?>

<?php echo "Это текст в одну строчку"?>

<?php
  echo "Это текст";
  // Однострочный комментарий
  
  /*Многострочный 
  комментарий*/

  echo "One more text block";
  echo "Last text block" #UNIX comment style
?>

<h1>Это <?php echo "простой "?>пример</h1>

<?php
/* 
   echo "Это тест"; /* Этот комментарий вызовет проблему 
*/
?>

<h2>
  <?php 
  $message = "Привет, я Никита";
  $age = 19;
  echo $message."<br>"; 
  echo "Мне $age лет"
  ?>
</h2>
