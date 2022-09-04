<?php

    header('content-type: image/png');

    $img1 = "img1.png";
    $img2 = "img2.png";

    // $im = imagecreatefrompng($img1);
    // if ($im && imagefilter($im, IMG_FILTER_GRAYSCALE)) {
    //     imagepng($im);
    // } else {
    //     echo 'Conversion to filter failed.';
    // }
    // imagedestroy($im);

    $im2 = imagecreatefrompng($img2);
    if ($im2 && imagefilter($im2, IMG_FILTER_BRIGHTNESS, 10)) {
        imagepng($im2);
    } else {
        echo 'Conversion to filter failed.';
    }
    imagedestroy($im2);

?>