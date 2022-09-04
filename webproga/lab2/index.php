<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <style>
    body {
      font-family: sans-serif;
      line-height: 1.5;
    }
    .hide {
      display: none;
    }
  </style>

  <div class="">
  <h1>Работа с переменными</h1>
  <?php 
    $hello = "Hello";
    $someVar = "Nick";
    $_age = 19;

    echo "<h2>$hello, I'am $someVar, I'am $_age</h2>";

    echo "<br>";
    
    $var1 = "test1";
    $var2 = "test2";
    $var1 = 7;
    echo $var1, $var2;
  ?>
  <h1>8 типов данных</h1>

  <ul>
    <li>
      <p>Скалярные</p>
      <ol>
        <li>boolean</li>
        <li>int</li>
        <li>float</li>
        <li>string</li>
      </ol>
    </li>
    <li>
      <p>Смешанные</p>
      <ol>
        <li>array</li>
        <li>object</li>
      </ol>
    </li>
    <li>
      <p>Специальные</p>
      <ol>
        <li>resourse</li>
        <li>NULL</li>
      </ol>
    </li>
  </ul>

  <h1>Boolean</h1>
  <?php 
    $isTrue = false;
    var_dump($isTrue); 
    echo "<br>";

    echo "<h2>Преобразование типов к boolean</h2>";
    echo "\"\": "; var_dump((bool) ""); 
    echo "<br>";
    echo "2: "; var_dump((bool) "2");
    echo "<br>";
    echo "1: "; var_dump((bool) 1);
    echo "<br>";
    echo "-7: "; var_dump((bool) -7);
    echo "<br>";
    echo "asd: "; var_dump((bool) "asd");
    echo "<br>";
    echo "2.4e: "; var_dump((bool) "2.4e");
    echo "<br>";
    echo "array(12): "; var_dump((bool) array(12));
    echo "<br>";
    echo "array(): "; var_dump((bool) array());
    echo "<br>";
    echo "false: "; var_dump((bool) "false");
    echo "<br>";
    echo "0: "; var_dump((bool) "0");
  ?>

  <h1>Integer</h1>
  <?php
    $int1 = 1;
    $int2 = -13;
    $int8 = 015;
    $int16 = 0x1A;

    echo $int8."<br>";
    echo $int16;
  ?>

  <h3>Деление</h3>
  <?php
    echo "25/5: "; var_dump(25/5);
    echo "<br>(float)25/5: "; var_dump((float)(25/5));
    echo "<br>25/6: "; var_dump(25/6);
    echo "<br>(int)(25/6): "; var_dump((int)(25/6));
  ?>

  <h3>intval()</h3>
  <?php
    $a = 1.55;
    $b = intval($a);
    var_dump($b);
    echo "<br>";
  ?>

  <h3>(0.1 + 0.7) * 10 != 8</h3>
  <?php
    echo (int)((0.1 + 0.7) * 10);
  ?>

  <h3>float to int</h3>
  <?php 
    $a = false;
    $b = intval($a);
    echo $b;
  ?>

  <h1>Float</h1>
  <?php
    $a = 1.123;
    var_dump($a);
    echo "<br>";
    $b = 1 / 3;
    var_dump($b);
  ?>


  <h1>String</h1>

  <?php 
    $str = "Some interesting string...";
    echo "$str <br>";
  ?>

  <h3>Одинарные кавычки</h3>
  <?php 
    echo 'Это просто строка в одинарных кавычках <br>';

    echo 'Это строка
    с
    переносами текста <br>';

    echo 'Экранируем вот такую \' одинарную кавычку <br>';

    echo 'Экранируем \\ обратный слеш <br>';

    echo 'Не экранируем \ обратный слеш, просто печатаем его <br>';

    $test = 'some test';
    echo 'Переменные $test не работают в одинарных кавычках <br>';
  ?>

  <h3>Двойные кавычки</h3>

  <?php
    $name = "Nick";
    echo "Позволяют интерполировать переменные: name = $name"
  ?>

  <h3>Heredoc строки</h3>

  <?php
    $name = 'Nick';
    echo <<<TEXT
      Какой-то текст
      Вывожу имя: $name
TEXT;
  ?>

  <h1>Array</h1>

  <?php 
    $group[0] = 'Nick';
    $group[2] = 'Anna';
    $group[3] = 'Dasha';

    echo $group[1];
    var_dump($group);
  ?>
  
  <br>

  <?php
    $fruits[] = 'Apple';
    $fruits[] = 'Banana';
    $fruits[] = 'Mango';

    var_dump($fruits);

    $fruits[] = 'Orange';
  ?>

  <h3>Многомерные массивы</h3>

  <?php 
    $arr[0][0] = 'Nikita';
    $arr[0][1] = 'Grisha';
    $arr[0][2] = 'Ilya';
    
    $arr[1][0] = 'Anna';
    $arr[1][1] = 'Diana';

    var_dump($arr);
    echo "<br>";
    var_dump($arr[0]);
  ?>


    <h1>Ассоциативные массивы</h1>

    <?php
      $student["name"] = "Nick";
      $student["age"] = 19;
      $student["hasJob"] = false;

      var_dump($student);
      echo "<br>";
      echo $student["name"];
    ?>

    <h3>Многомерные ассоциативые массивы</h3>

    <?php 
      $team["frontend"] = array("name" => "John", "age" => 20);
      $team["backend"] = array("name" => "Pete", "age" => 21);
      $team["design"] = array("name" => "Liza", "age" => 23, "software" => "Photoshop");

      echo $team["frontend"]["name"];
      echo "<br>";
      echo $team["design"]["software"];
    ?>

</div>

    <h1>Объект</h1>

    <?php
      class Student {
        function sayHi() {
          echo "Hi, I'm a student.";
        }
      }

      $st1 = new Student;
      var_dump($st1);
      echo "<br>";
      $st1->sayHi();
    ?>

    <h1>Null</h1>

    <?php
      $someNull = null;

      var_dump($someNull);
    ?>

    <h1>+</h1>
    <ul>
      <li>Mixed</li>
      <li>Number</li>
      <li>Callback</li>
    </ul>

</body>
</html>
