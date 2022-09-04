<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <p>метод GET:</p>
  <a href="http://webproga:82/lab11/myget.php?name=Nick&age=19">Link here</a>
  
  <p>метод POST:</p>
  <form method="POST" action="mypost.php">
    <div class="group">
      <label for="name">Ваше имя:</label>
      <input name="name" id="name" placeholder="Имя" size="25">
    </div>
    <div class="group">
      <label for="age">Ваш возраст:</label>
      <input name="age" id="age" placeholder="Возраст" size="3">
    </div>
    <button type="submit">Отправить</button>
  </form>

  <form method="POST" action="mypost2.php">
    <div class="group">
      <label for="var1">Переменная 1:</label>
      <input name="var1" id="var1" placeholder="Variable 1">
    </div>
    <div class="group">
      <label for="var2">Переменная 2:</label>
      <input name="var2" id="var2" placeholder="Variable 2">
    </div>
    <button type="submit">Отправить</button>
  </form>

  <br>
  <br>
  <br>

  <form action="form-test.php" method="POST" name="myForm">

    <p>
      <label for="textfield">Текстовое поле:</label>
      <input type="text" name="textfield">
    </p>

    <p>
      <label for="passfield">Поле для пароля:</label>
      <input type="password" name="passfield">
    </p>

    <p>
      <label for="hidden">Скрытое поле:</label>
      <input type="hidden" name="hidden" id="hidden" value="Hidden value">
    </p>

    <hr size="1">

    <p>Чекбоксы</p>
    <div>
      <input type="checkbox" name="checkbox1" value="ch1" id="check1">
      <label for="check1">
        Один
      </label>
      <input type="checkbox" name="checkbox2" value="ch2" id="check2" checked>
      <label for="check2">
        Два
      </label>
      <input type="checkbox" name="checkbox3" value="ch3" id="check3">
      <label for="check3">
        Три
      </label>
    </div>

    <hr size="1">

    <p>Радиокнопки</p>
    <div>
      <label for="radio1">
        <input type="radio" name="radioDay" value="yesterday" id="radio1">
        Вчера
      </label>
      <label for="radio2">
        <input type="radio" name="radioDay" value="today" id="radio2" checked>
        Сегодня
      </label>
      <label for="radio3">
        <input type="radio" name="radioDay" value="tomorrow" id="radio3">
        Завтра
      </label>
    </div>

    <hr size="1">

    <p>Textarea</p>
    <textarea name="textarea" id="myTextarea" cols="30" rows="10">
      Default text
    </textarea>

    <p>Select</p>
    <select name="select1" id="mySelect1">
      <option value="One">Раз</option>
      <option value="Two">Два</option>
      <option value="Three">Три</option>
    </select>

    <hr size="1">

    <p>Select multiple</p>
    <select name="select2[]" id="mySelect2" multiple size="5">
      <option value="1">Раз</option>
      <option value="2">Два</option>
      <option value="3">Три</option>
      <option value="4">Четыре</option>
      <option value="5">Пять</option>
    </select>

    <hr size="1">

    <button type="submit">Отправить</button>
    <button type="reset">Сбросить</button>

  </form>

</body>
</html>



<?php 

  // myget.php
  // if (!empty($_GET["name"]) && !empty($_GET["age"])) {
  //   echo "Получены данные ".$_GET["name"].", ".$_GET["age"];
  // }


  // mypost.php
  // $name = $_POST["name"];
  // $age = $_POST["age"];
  // if (!empty($name) && !empty($age)) {
  //   echo "Получены данные:<br>";
  //   echo "имя - ".$name.", возраст - ".$age;
  //   echo "<br>";
  // }
  // else {
  //   echo "Переменные не найдены.<br>";
  // }

  // mypost2.php
  // $var1 = $_POST["var1"];
  // $var2 = $_POST["var2"];
  // if (!empty($var1) && !empty($var2)) {
  //   $res = $var1 * $var2;
  //   echo "<p>Результат перемножения равен {$res}</p>";
  // }


  //form-test.php
  // $text = $_POST['textfield'];
  // $pass = $_POST['passfield'];
  // $hidden = $_POST['hidden'];

  // echo $text."<br>";
  // echo $pass."<br>";
  // echo $hidden."<br>";

  // $ch1 = $_POST['checkbox1'];
  // $ch2 = $_POST['checkbox2'];
  // $ch3 = $_POST['checkbox3'];

  // if (isset($ch1)) echo "Checkbox value: ".$ch1."<br>";
  // if (isset($ch2)) echo "Checkbox value: ".$ch2."<br>";
  // if (isset($ch3)) echo "Checkbox value: ".$ch3."<br>";

  // $rd = $_POST['radioDay'];

  // if (isset($rd)) echo "Radio: ".$rd."<br>";

  // $textarea = $_POST['textarea'];
  // echo "Text area: ".$textarea."<br>";

  // echo "<hr size='1'>";  
  // $sel1 = $_POST['select1'];
  // echo $sel1."<br>";

  // $sel2 = $_POST['select2'];
  // foreach($sel2 as $key => $val) {
  //   echo "[$key] => $val <br>";
  // }

?>