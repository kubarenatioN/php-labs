<?php
  // $i = imageCreate(400, 300);
  // $color = imagecolorallocatealpha($i, 20, 220, 10, 127);
  // imageFilledRectangle($i, 0, 0, imageSX($i), imageSY($i), $color);
  // Header("Content-type: image/jpeg");
  // imageJpeg($i);
  // imageDestroy($i);
  // imageColorDeallocate($i, $color);

?>
<?php


  // $i = imageCreate(450, 350);
  // $color = imageColorAllocate($i, 255, 250, 100);
  // $color = imageColorAllocate($i, 255, 0, 0);
  // imageSetPixel($i, 4, 4, $color);
  // imageSetPixel($i, 5, 4, $color);
  // imageSetPixel($i, 4, 5, $color);
  // imageSetPixel($i, 5, 5, $color);
  // $color = imageColorAllocate($i, 0, 255, 0);
  // imageSetThickness($i, 4);
  // imageLine($i, 210, 210, 380, 50, $color);
  // imageDashedLine($i, 210, 210, 380, 310, $color);
  // $color = imageColorAllocate($i, 255, 0, 255);
  // imageDashedLine($i, 180, 180, 300, 60, $color);
  // Header("Content-type: image/jpeg");
  // imageJpeg($i);
  // imageDestroy($i);
?>
<?php
  header("Content-type: image/jpeg");
  $img = imageCreateTrueColor(300, 200);
  $whiteColor = imagecolorallocate($img, 255, 255, 255);
  $redColor = imageColorAllocate($img, 0, 255, 0);
  $color2 = imageColorAllocate($img, 255, 0, 255);

  // пунктирная линия, 5 красных точек, 5 белых
  $style1 = array();
  for ($i=0; $i < 20; $i++) { 
    array_push($style1, $whiteColor);
  }
  for ($i=0; $i < 20; $i++) { 
    array_push($style1, $redColor);
  }
  imagesetstyle($img, $style1);
  imagesetthickness($img, 4);
  imageline($img, 0, 0, 150, 100, IMG_COLOR_STYLED);

  $style2 = array();
  for ($i=0; $i < 20; $i++) { 
    array_push($style2, $colorWhite);
  }
  for ($i=0; $i < 5; $i++) { 
    array_push($style2, $color2);
  }
  imagesetstyle($img, $style2);
  $brush = imagecreatefrompng("https://cdn.pixabay.com/photo/2020/12/30/01/45/smile-5872116_1280.png");
  $brush = imagescale($brush, 50, 50);
  $w2 = imageColorAllocate($brush, 255, 255, 255);
  imagecolortransparent($brush, $w2);
  imagesetbrush($img, $brush);
  imagesetthickness($img, 2);
  imageline($img, 250, 50, 100, 200, IMG_COLOR_STYLEDBRUSHED);
  imagejpeg($img);
  imagedestroy($img);
?>

<?php
// header("Content-type: image/jpeg");
//   $i = imagecreate(400, 300);
//   $color = imagecolorallocate($i, 200, 250, 200);
//   $color = imagecolorallocate($i, 255, 0, 0);
//   imagerectangle($i, 90, 50, 360, 220, $color);
//   $color = imagecolorallocate($i, 150, 0, 220);
//   imageFilledRectangle($i, 60, 100, 320, 240, $color);

//   imagejpeg($i);
//   imagedestroy($i);
?>
<?php
  // header("content-type: image/jpeg");
  // $i = imagecreate(400, 300);
  // $color = imageColorAllocate($i, 255, 255, 255);
  // $color = imageColorAllocate($i, 255, 0, 255);
  // imagesetthickness($i, 3);
  // imagearc($i, 200, 150, 300, 160, 0, 230, $color);
  // $color = imageColorAllocate($i, 10, 255, 100);
  // imagearc($i, 200, 150, 200, 100, -30, 80, $color);
  // imagejpeg($i);
  // imagedestroy($i);
?>
<?php
// header("content-type: image/png");
//   $i = imagecreate(500, 400);
//   $bg = imagecolorallocate($i, 255, 255, 255);
//   $bg = imagecolorallocate($i, 100, 0, 100);

//   imagefill($i, 100, 100, $bg);

//   $el_color = imagecolorallocate($i, 0, 255, 0);
//   $el_color2 = imagecolorallocate($i, 200, 255, 0);
//   imageellipse($i, 250, 200, 400, 200, $el_color);
//   imagefilledellipse($i, 250, 200, 200, 80, $el_color2);

//   imagepng($i);
//   imagedestroy($i);
?>
<?php
  // header("content-type: image/jpeg");
  // $i = imagecreate(500, 200);
  // $color = imagecolorallocate($i, 255, 250, 100);
  // imagesetthickness($i, 3);
  // $red = imagecolorallocate($i, 255, 0, 0);
  // imagearc($i, 380, 100, 80, 80, 180, 360, $red);
  // imagearc($i, 50, 100, 100, 100, 0, 360, $red);

  // $blue = imagecolorallocate($i, 0, 0, 255);
  // imageellipse($i, 220, 100, 150, 150, $blue);

  // $green = imagecolorallocate($i, 0, 255, 0);
  // imagefilledellipse($i, 220, 100, 120, 90, $green);

  // imagejpeg($i);
  // imagedestroy($i);
?>
<?php
  // header("content-type: image/jpeg");
  // $i = imagecreate(500, 400);
  // $color = imagecolorallocate($i, 0, 0, 0);
  
  // imagesetthickness($i, 10);

  // $color = imagecolorallocate($i, 255, 0, 200);
  // $points = array(10, 20, 470, 80, 360, 320, 180, 250, 10, 20);
  // imagepolygon($i, $points, 4, $color);

  // imagesetthickness($i, 2);
  // $color = imagecolorallocate($i, 200, 240, 210);
  // $points2 = array(60, 40, 460, 300, 200, 200, 350, 160, 30, 10);
  // imagefilledpolygon($i, $points2, 4, $color);

  // imagejpeg($i);
  // imagedestroy($i);
?>
<?php
  // $i = imagecreate(300, 200);
  // $text = "Neo, wake up!";
  // $bg = imagecolorallocate($i, 255, 255, 255);
  // $black = imagecolorallocate($i, 0, 0, 0);
  // $red = imagecolorallocate($i, 255, 0, 0);
  // $text_color = imagecolorallocate($i, 0, 0, 200);

  // imagechar($i, 5, 25, 0, $text, $black);
  // imagechar($i, 5, 50, 0, "i", $red);
  // imagechar($i, 5, 75, 0, "c", $black);
  // imagechar($i, 5, 100, 0, "k", $red);

  // imagecharup($i, 5, 25, 50, "Philip", $black);
  // imagecharup($i, 5, 25, 75, "Henry", $red);
  // imagecharup($i, 5, 25, 100, "Peter", $black);

  // imagestring($i, 5, 100, 150, "Captain", $text_color);
  // imagestringup($i, 5, 180, 150, "Jack Sparrow", $text_color);

  // header("content-type: image/png");
  // imagepng($i);
  // imagedestroy($i);
?>