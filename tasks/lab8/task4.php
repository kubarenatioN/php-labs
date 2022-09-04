<?php

    function divider($s, $sep) {
        if ($sep === []) {
            return $s;
        }
        else {
            // echo "s = ";
            // print_r($s);
            // echo "<br>";
            $buff = [];
            $curSep = array_pop($sep);
            foreach ($s as $k => $v) {
                // echo "v = $v<br>";
                // echo "separator = $curSep<br>";
                $buff = array_merge($buff, explode($curSep, $v));
                // echo "divided:";
                // print_r($buff);
                // echo "<br>----<br>";
            }
            $s = $buff;
            // echo "<br>----================-------<br>";
            return divider($s, $sep);
        }
    }

    function divideSentence($text) {
        $dividers = array_slice(func_get_args(), 1);
        if (func_num_args() === 1) {
            echo "Не заданы разделители.";
            return;
        }
        return array_filter(divider([$text], $dividers));
    }

    $res = divideSentence("ni. ki! ta. ma? ri! na! da. ki! ta. ma? ri! na? da.");

    // echo "res: "; 
    print_r($res);

?>