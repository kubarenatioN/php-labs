<?php

    $i = imagecreate(1000, 1000);
    $w = imagecolorallocate($i, 255, 255, 255);
    $b = imagecolorallocate($i, 0, 0, 0);
    $g = imagecolorallocate($i, 59, 211, 48);
    $dark_g = imagecolorallocate($i, 43, 128, 1);
    $br = imagecolorallocate($i, 162, 96, 48);
    $dark_br = imagecolorallocate($i, 126, 63, 28);
    $cyan = imagecolorallocate($i, 12, 253, 255);
    $red = imagecolorallocate($i, 236, 0, 45);
    $grey = imagecolorallocate($i, 179, 179, 179);
    $dark_grey = imagecolorallocate($i, 128, 128, 128);

    //bottom capsule
    imagesetthickness($i, 6);
    imagearc($i, 500, 530, 300, 300, 18, 162, $b);
    imageline($i, 350, 576, 650, 576, $b);
    imagearc($i, 355, 562, 30, 30, 90, 180, $b);
    imageline($i, 340, 562, 340, 540, $b);
    imagearc($i, 355, 542, 30, 30, 180, 270, $b);
    imageline($i, 350, 528, 648, 528, $b);
    imageline($i, 658, 562, 658, 540, $b);
    imagearc($i, 643, 542, 30, 30, 270, 0, $b);
    imagearc($i, 643, 562, 30, 30, 0, 90, $b);
    imagefill($i, 500, 550, $dark_grey);
    imagefill($i, 500, 620, $grey);

    imagearc($i, 500, 530, 240, 240, 31, 41, $dark_grey);
    imagearc($i, 500, 530, 240, 240, 50, 90, $dark_grey);

    // left border
    imagearc($i, 365, 510, 35, 20, 180, 0, $b);
    imageline($i, 348, 510, 348, 530, $b);
    imageline($i, 382, 510, 382, 530, $b);
    imagefill($i, 360, 520, $dark_grey);

    //right border
    imagearc($i, 635, 510, 35, 20, 180, 0, $b);
    imageline($i, 618, 510, 618, 530, $b);
    imageline($i, 652, 510, 652, 530, $b);
    imagefill($i, 630, 520, $dark_grey);

    //top capsule
    imagearc($i, 500, 530, 300, 300, 190, -10, $b);
    imagearc($i, 500, 530, 250, 250, 192, -12, $b);
    imagefill($i, 630, 490, $dark_grey);

    // left ear
    imagearc($i, 410, 380, 160, 120, -20, 90, $g);
    imagearc($i, 410, 380, 160, 120, 90, 160, $b);
    imagefilledarc($i, 398, 420, 50, 26, 70, 160, $g, IMG_ARC_PIE);
    imagearc($i, 292, 420, 90, 120, 282, -20, $b);
    imageline($i, 300, 360, 490, 360, $b);
    imagefill($i, 400, 390, $g);
    imagefilledarc($i, 400, 376, 120, 80, 70, 180, $dark_g, $IMG_ARC);
    imageline($i, 340, 376, 400, 376, $b);
    imageline($i, 400, 376, 420, 390, $b);

    // right ear
    imagearc($i, 590, 380, 160, 120, 90, 200, $g);
    imagearc($i, 590, 380, 160, 120, 20, 90, $b);
    imagefilledarc($i, 598, 418, 54, 30, 20, 110, $g, IMG_ARC_PIE);
    imagearc($i, 708, 420, 90, 120, 200, -102, $b);
    imageline($i, 450, 360, 700, 360, $b);
    imagefill($i, 560, 380, $g);
    imagefilledarc($i, 600, 376, 120, 80, 0, 120, $dark_g, $IMG_ARC);
    imageline($i, 600, 376, 660, 376, $b);
    imageline($i, 600, 376, 580, 390, $b);

    //yoda head
    imagearc($i, 500, 430, 200, 200, 190, -10, $b);
    imagefilledarc($i, 500, 430, 190, 190, 190, -10, $g, IMG_ARC_PIE);
    imagearc($i, 500, 410, 197, 150, 144, 180, $b);
    imagearc($i, 500, 410, 197, 150, 0, 35, $b);
    imagefilledarc($i, 500, 410, 188, 144, 0, 35, $g, IMG_ARC_PIE);
    imagefilledarc($i, 500, 410, 190, 143, 150, 180, $g, IMG_ARC_PIE);
    imageline($i, 415, 454, 582, 454, $b);
    imagefill($i, 440, 440, $g);    

    //eyes
    //left
    imagearc($i, 450, 418, 50, 50, 150, 30, $b);
    imagearc($i, 450, 430, 40, 8, 170, 10, $b);
    imagefill($i, 450, 420, $b);
    imagefilledellipse($i, 440, 410, 10, 10, $w);
    imagefilledellipse($i, 450, 420, 6, 6, $w);

    // right
    imagearc($i, 550, 418, 50, 50, 150, 30, $b);
    imagearc($i, 550, 430, 40, 8, 170, 10, $b);
    imagefill($i, 550, 420, $b);
    imagefilledellipse($i, 545, 410, 10, 10, $w);
    imagefilledellipse($i, 555, 420, 6, 6, $w);

    imagesetthickness($i, 4);
    imagearc($i, 450, 385, 30, 10, 200, -20, $b);
    imagearc($i, 550, 385, 30, 10, 200, -20, $b);
    imagearc($i, 500, 430, 30, 30, 10, 170, $b);
    imagearc($i, 500, 422, 16, 8, 200, -20, $b);

    imagesetthickness($i, 6);

    //coat
    imageline($i, 408, 463, 408, 488, $b);
    imageline($i, 510, 463, 510, 488, $b);
    imageline($i, 590, 463, 590, 488, $b);
    imageline($i, 415, 500, 582, 500, $b);
    imagearc($i, 422, 488, 28, 26, 90, 180, $b);
    imagearc($i, 576, 488, 28, 26, 0, 90, $b);
    imagearc($i, 496, 488, 28, 26, 0, 90, $b);
    imagearc($i, 496, 466, 28, 26, -90, 0, $b);
    imagearc($i, 576, 466, 28, 26, -90, 0, $b);
    imagearc($i, 422, 466, 28, 26, 180, 270, $b);
    imagefill($i, 440, 490, $dark_br);
    imagefill($i, 540, 490, $dark_br);

    imageline($i, 576, 500, 576, 528, $b);
    imageline($i, 426, 500, 426, 528, $b);
    imagefill($i, 430, 520, $br);

    imagefill($i, 600, 500, $b);
    imagefill($i, 400, 460, imagecolorallocate($i, 1,1,1));

    // hand
    imagesetthickness($i, 5);
    imagearc($i, 400, 500, 34, 36, 8, 140, $b);
    imageline($i, 386, 512, 380, 486, $b);
    imageline($i, 380, 486, 394, 494, $b);
    imageline($i, 394, 494, 396, 468, $b);
    imageline($i, 396, 468, 404, 490, $b);
    imageline($i, 404, 490, 418, 480, $b);
    imageline($i, 418, 480, 416, 510, $b);
    imagefilledpolygon($i, [404, 500, 415, 486, 412, 508], 3, $g);
    imagefill($i, 400, 500, $g);

    imageline($i, 416, 508, 420, 530, $b);
    imageline($i, 390, 512, 390, 530, $b);
    imagefill($i, 394, 520, $br);
    
    imagesetthickness($i, 4);
    imagefilledrectangle($i, 450, 546, 475, 562, $cyan);
    imagerectangle($i, 450, 546, 475, 562, $b);

    imagefilledrectangle($i, 475, 546, 500, 562, $red);
    imagerectangle($i, 475, 546, 500, 562, $b);

    imagefilledrectangle($i, 500, 546, 525, 562, $w);
    imagerectangle($i, 500, 546, 525, 562, $b);

    imagefilledrectangle($i, 525, 546, 550, 562, $w);
    imagerectangle($i, 525, 546, 550, 562, $b);



    header('content-type: image/png');
    imagepng($i);
    imagedestroy($i);

?>