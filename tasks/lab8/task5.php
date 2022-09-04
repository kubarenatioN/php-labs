<?php

    function findSum() {
        $args = func_get_args();
        // print_r($args);
        // echo "<br>";
        if (count($args) === 1) {
            return 0;
        }
        $res = $args[0] * $args[1] + findSum(...array_slice($args, 1));
        // echo $res."<br>";
        return $res;
    }
    $res = findSum(1, 2, 3, 4, 5);
    echo $res;

?>