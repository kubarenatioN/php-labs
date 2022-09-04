<link href="style.css" rel="stylesheet"/>
<?php

    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];

    session_start();
    $_SESSION["user"] = "$name $surname";
    $username = $_SESSION["user"];
    // print_r($_SESSION);

    $questions_text = [
        "gleb" => "1. Что Глебу нравится больше",
        "nikita" => "2. Чем занимается Никита после пар",
        "flowers" => "3. Какие цветы любит Марина",
        "song" => "4. Кто спел песню для Ани",
        "font" => "5. Любимый шрифт Дианы",
        "siblings" => "6. Имена людей со знаком зодиака \"Близнецы\""
    ];

    $questions = [
        "siblings" => ["Диана", "Даша", "Аня", "Глеб"],
        "gleb" => "Motion Design",
        "nikita" => ["Пишет код", "Пьет кофе"],
        "flowers" => ["Гвоздики", "Пионы", "Розы", "Тюльпаны"],
        "song" => "Ed Sheeran",
        "font" => "comic sans"
    ];

    $right_answers = [];

    $base = $_POST;

    // print_r($_POST);
    // echo "<br>";

    $gleb = $_POST["gleb"];
    $nikita = $_POST["nikita"];
    $flowers = $_POST["flowers"];
    $song = $_POST["song"];
    $font = $_POST["font"];
    $siblings = $_POST["siblings"];

    $mark = 0;

    foreach ($questions as $k => $answer) {
        if ($k === "siblings") {
            $names = preg_split("/\s+/", $base[$k]);
            $base[$k] = [];
            foreach ($names as $key => $val) {
                if ($val != null) {
                    array_push($base[$k], $val);
                }
            }
        }
        if (is_array($base[$k])) { 
            $areEqual = array_diff($base[$k], $answer) === array_diff($answer, $base[$k]);
            if ($areEqual) {
                $mark++;
                $right_answers[$k] = true;
            }
            else {
                $right_answers[$k] = false;
            }
        } else {
            if ($base[$k] === $answer) {
                $mark++;
                $right_answers[$k] = true;
            }
            else {
                $right_answers[$k] = false;
            }
        }
    }

    // echo $mark."<br>";
    // print_r($right_answers);
    $mark_text = "";
    switch ($mark) {
        case 0:
            $mark_text = "Плохо";
            break;
        case 1:
            $mark_text = "Так себе";
            break;
        case 2:
            $mark_text = "Нормально";
            break;
        case 3:
            $mark_text = "Неплохо";
            break;
        case 4:
            $mark_text = "Хорошо";
            break;
        case 5:
            $mark_text = "Отлично";
            break;
        case 6:
            $mark_text = "Идеально";
            break;
    }

    echo "<h2>$username, ваш результат: <i>$mark - $mark_text</i></h2>";
    echo "<h3>Ваши ответы:</h3>";

    foreach ($questions_text as $k => $v) {
        $isCorrect = $right_answers[$k] ? "correct" : "error";
        echo "<p class='$isCorrect'>$v</p>";
        $res = "";
        $answ = "";
        if (is_array($base[$k])) {
            $res = implode(", ", $base[$k]);
            $answ = implode(", ", $questions[$k]);
        } else {
            $res = $base[$k];
            $answ = $questions[$k];
        }
        echo "<p>Ваш ответ: $res</p>";
        echo "<p>Правильный ответ: $answ</p>";

        echo "<hr>";

    }

?>