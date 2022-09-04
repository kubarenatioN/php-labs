<?php
    echo '
    <head>
    <link rel="stylesheet" href="style.css">
    <head>';
    echo "<header><h2>Task 1.</h2>";

    require "menu/menu.inc.php";
    // require "menu/menu.inc.php";

    // require - generate fatal error if can't find file, while include will only throw warning

    // require_once "menu/menu.inc.php";
    // require_once "menu/menu.inc.php";
    // require_once "menu/menu.inc.php";
    // require_once "menu/menu.inc.php";

    echo "</header>";

    echo "<h2>Task 2.</h2>";
    include "task2.php";

    echo "<h2>Task 3.</h2>";
    include "task3.php";

    echo "<h2>Task 4.</h2>";
    include "task4.php";

    echo "<h2>Task 5.</h2>";
    include "task5.php";
    
?>