<?php
header("Content-type: image/png");
session_start();
$_SESSION['cv'] = rand(10000,90000);
$im = @imagecreate(80, 20) or die("Erro indefinido!");
//$im = ImageCreateFromPNG('bg'.rand(1,3).'.png');
$background_color = imagecolorallocate($im, 200, 200, 200);
$text_color = imagecolorallocate($im, 300, 0, 0);
imagestring($im, 5, 16, 2,$_SESSION['cv'], $text_color);
imagepng($im);
imagedestroy($im);
?>