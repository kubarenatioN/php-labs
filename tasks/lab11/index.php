<?php
    
    $form = "
        <form method='post' action='sun.php'>
        <label>
            <span>Введите количество лучей: </span>
            <input type='number' min='1' name='rays'/>
        </label>
        <br>
        <button type='submit'>Нарисовать</button>
        </form>
        <br>
    ";

    echo $form;
    $n = -1;
    $n = (int)$_POST["rays"];

?>