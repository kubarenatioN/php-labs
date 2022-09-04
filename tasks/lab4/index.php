<h2>1.</h2>
<?php
    $randNumbers = array(



    );
    
    for ($i=0; $i < 10; $i++) { 
        $r = rand() / getrandmax() * 10;
        array_push($randNumbers, $r);
        echo $r."<br>";
    }
    $min = min($randNumbers);
    $max = max($randNumbers);
    echo "Минимальное: $min<br>Максимальное: $max<br>";
?>

<h2>2.</h2>

<?php
// 2.1
    $start = -5;
    $end = 5;
    $step = 0.25;
    for ($i=$start; $i <= $end; $i += $step) { 
        $y = 2 * $i * pow(M_E, -abs($i));
        echo "x=$i y=$y<br>";
    }
    echo "<br><br>";

// 2.2
    $start = -M_PI;
    $end = M_PI;
    $step = M_PI/10;
    for ($x=$start; $x <= $end; $x += $step) { 
        $y = cos($x);
        $deg = rad2deg($x);
        echo "x=$deg y=$y<br>";
    }
    echo "<br><br>";

    $x = $y = $z = rand(0, 100) / 6;
    echo "x, y, z = $x<br>";

    // 2.3
    $a = sin(M_PI_4 * $x) * sqrt(abs(($y + log(pow($z, 2) + 1) / ($x * 3))));
    echo "a = $a<br>";

    // 2.4
    $b = $x * exp(-abs($x + $y) / 2) + cos(log10(1 + abs($y))) + pow($z, 1/3);
    echo "b = $b<br>";

    // 2.5
    $range = range(0, 100);
    $X = array_rand($range, 10);
    $Y = array_rand($range, 10);
    $c = sqrt(abs((max($Y) - min($Y)) / (max($X) + min($X))));
    echo "c = $c<br>";
    echo "<br><br>";

    // 2.6
    $d = ($y + 3) / sqrt(pow($z, 2) + 1) * log(abs($x + 1));
    echo "d = $d<br>";

    // 2.7
    $e = sin(pow($x, 2)) - log(abs(cos($y) + $z + 1));
    echo "e = $e<br>";

    // 2.8
    $f = sqrt((4*pow($b, 3) + log($x + pow($x, 4) / pow($y, 2), 2)) / ($x + log($b + $x, 3)));
    echo "f = $f<br>";

    // 2.9
    $g = pow(2 * $x + 3, 1/3) / pow(3 * pow($x, 5) / 4 / pow($x, cos($x)), 1/7);
    echo "g = $g<br>";

    echo "
    <style>
        table {
            margin-top: 10px;
            border-collapse: collapse;
        }
        td {
            padding: 10px;
            border: 1px solid #333;
        }
    </style>
    <ul>
        <li>x, y, z = $x</li>
    </ul>  
    <table>
            <tr>
                <td>
                    a
                </td>
                <td>
                    b
                </td>
                <td>
                    c
                </td>
                <td>
                    d
                </td>
                <td>
                    e
                </td>
                <td>
                    f
                </td>
                <td>
                    g
                </td>
            </tr>
            <tr>
                <td>".
                    round($a, 3)
                ."</td>
                <td>
                    $b
                </td>
                <td>
                    $c
                </td>
                <td>
                    $d
                </td>
                <td>
                    $e
                </td>
                <td>
                    $f
                </td>
                <td>
                    $g
                </td>
            </tr>
        </table>
    "
?>

<h2>3.</h2>
<table>
    <tr>
        <td>Исходное число</td>
        <td>В 10-й сс</td>
        <td>В 2-й сс</td>
        <td>В 8-й сс</td>
        <td>В 16-й сс</td>
    </tr>
    <tr>
        <?php  
            $n = 486;
            $n2 = decbin($n);
            $n8 = decoct($n);
            $n16 = dechex($n);
            echo "
                <td>$n</td>
                <td>-</td>
                <td>$n2</td>
                <td>$n8</td>
                <td>$n16</td>
            "
        ?>
    </tr>
    <tr>
        <?php  
            $n = 101010111;
            $n10 = bindec($n);
            $n8 = base_convert($n, 2, 8);
            $n16 = base_convert($n, 2, 16);
            echo "
                <td>$n</td>
                <td>$n10</td>
                <td>-</td>
                <td>$n8</td>
                <td>$n16</td>
            "
        ?>
    </tr>
    <tr>
        <?php  
            $n = 145;
            $n10 = octdec($n);
            $n2 = base_convert($n, 8, 2);
            $n16 = base_convert($n, 8, 16);
            echo "
                <td>$n</td>
                <td>$n10</td>
                <td>$n2</td>
                <td>-</td>
                <td>$n16</td>
            "
        ?>
    </tr>
    <tr>
        <?php  
            $n = "d8e0";
            $n10 = hexdec($n);
            $n2 = base_convert($n, 16, 2);
            $n8 = base_convert($n, 16, 8);
            echo "
                <td>$n</td>
                <td>$n10</td>
                <td>$n2</td>
                <td>$n8</td>
                <td>-</td>
            "
        ?>
    </tr>
</table>