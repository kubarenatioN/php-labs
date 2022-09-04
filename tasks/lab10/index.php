<h2>Task 1.</h2>
<?php

    $heroes = [
        "Шрек",
        "Рапунцель",
        "Кот Том",
        "Мышка Джерри",
        "Дядюшка Скрудж",
        "Питер Пен"
    ];

    $form = "<form method='POST'><select name='heroes_list[]' multiple size='5'>";

    foreach ($heroes as $k => $v) {
        $form .= "<option value='$v'>$v</option>";
    }
                
    $form .= "</select><br><button type='submit'>Отправить</button></form>";

    echo $form;

    $textarea = "<textarea style='resize: none; width: 400px; height: 100px;' name='heroes'>";

    $sel_heroes = $_POST["heroes_list"] ?? [];
    foreach ($sel_heroes as $k => $v) {
        $textarea .= "$v - ".md5($v)."\n";
    }

    $textarea .= "</textarea>";

    echo $textarea;

?>