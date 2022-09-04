<?
    // $a = $_GET["a"];
    // $b = $_GET["b"];
    
    function get_rand_color($colors) {
        return $colors[rand(0, count($colors) - 1)];
    }

    $a = rand(0, 10);
    $ax = 70 + rand(0, 20) - 10;
    $ay = 70 + rand(0, 20) - 10;
    $a_angle = rand(0, 40) - 20;
    
    $b = rand(0, 10);
    $bx = 230 + rand(0, 20) - 10;
    $by = 70 + rand(0, 20) - 10;
    $b_angle = rand(0, 40) - 20;

    $c = "*";
    $cx = 150 + rand(0, 20) - 10;
    $cy = 80 + rand(0, 20) - 10;
    $c_angle = rand(0, 20) - 10;

    $font = dirname(__FILE__) . '/arial.ttf';

    $answer = $a * $b;
    session_start();
    $_SESSION["captcha"] = $answer;

    header('content-type: image/png');
    $i = imagecreate(300, 100);
    $w = imagecolorallocate($i, 240, 240, 240);
    $black = imagecolorallocate($i, 0, 0, 0);
    $red = imagecolorallocate($i, 255, 0, 0);
    $green = imagecolorallocate($i, 0, 255, 0);
    $blue = imagecolorallocate($i, 0, 0, 255);
    $yellow = imagecolorallocate($i, 220, 220, 0);
    $colors = [
        $red, $green, $blue, $yellow, $black
    ];
    
    imagettftext($i, 36, $a_angle, $ax, $ay, get_rand_color($colors), $font, $a);
    imagettftext($i, 36, $b_angle, $bx, $by, get_rand_color($colors), $font, $b);
    imagettftext($i, 40, $c_angle, $cx, $cy, get_rand_color($colors), $font, $c);

    for ($j=0; $j < 8; $j++) { 
        $x1 = 40 + rand(0, 40) - 20;
        $x2 = 260 + rand(0, 40) - 20;
        $y1 = rand(10, 90);
        $y2 = rand(10, 90);
        imageline($i, $x1, $y1, $x2, $y2, get_rand_color($colors));
    }
    
    imagepng($i);
    imagedestroy($i);
?>