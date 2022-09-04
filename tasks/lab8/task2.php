<?php

    function days($args) {
        $allArgs = func_get_args();
        list($d1, $m1, $y1) = $allArgs;
        list(,,,$d2, $m2, $y2) = $allArgs;
        // $y2 = isset($y2) ? $y2 : date("Y");
        $y2 = $y2 ?? date("Y");
        $m2 = $m2 ?? date("m");
        $d2 = $d2 ?? date("d");
        // $m2 = isset($m2) ? $m2 : date("m");
        // $d2 = isset($d2) ? $d2 : date("d");

        $diff = abs(strtotime("$y2-$m2-$d2") - strtotime("$y1-$m1-$d1"));
        // echo ($diff/3600)."<br>";
        echo "days:".($diff/(60*60*24))."<br>";
    }

    function main() {
        days(10, 11, 2020);
        days(10, 11, 2021, 13, 11, 2019);
        days(10, 11, 2021, 12, 11, 2022, 120, 1231);
    }
  
    main();
    
?>