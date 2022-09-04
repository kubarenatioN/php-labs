<?php

    $n = $_POST["rays"];
    $r = 50;
    $r2 = 60;
    $r3 = 150;
    $cx = 250;
    $cy = 250;

    header('content-type: image/png');
    $i = imagecreate(500, 500);
    $w = imagecolorallocate($i, 255, 255, 255);
    $yel = imagecolorallocate($i, 255, 255, 0);

    imagefilledellipse($i, $cx, $cy, $r * 2, $r * 2, $yel);

    $step = 360 / $n;
    for ($j=0; $j <= 360; $j+=$step) { 
        getRay($j);
    }

    imagepng($i);
    imagedestroy($i);

    function getRay($deg) {
        global $cx;
        global $cy;
        global $yel;
        global $i;
        global $r2;
        global $r3;

        $delta = 5;

        $x1 = $cx + $r2 * cos(deg2rad($deg + $delta));
        $y1 = $cy + $r2 * sin(deg2rad($deg + $delta));
        
        $x2 = $cx + $r2 * cos(deg2rad($deg - $delta));
        $y2 = $cy + $r2 * sin(deg2rad($deg - $delta));

        $x3 = $cx + $r3 * cos(deg2rad($deg));
        $y3 = $cy + $r3 * sin(deg2rad($deg));

        imagefilledpolygon($i, [$x1, $y1, $x2, $y2, $x3, $y3], 3, $yel);
    }
    

?>