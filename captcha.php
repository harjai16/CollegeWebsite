<?php 
session_start(); 
$text = rand(100000,999999); 
$_SESSION["vercode"] = $text;
$height = 25; 
$width = 70;  
header('Content-type: image/png');
$image_p = imagecreate($width, $height); 
$black = imagecolorallocate($image_p, 255, 255, 255); 
$white = imagecolorallocate($image_p, 216, 21, 19); 
// $font = 'Opensans.otf';
// $font = 'serif';
$font_size = 30; 
imagestring($image_p,  $font_size,5, 5, $text, $white); 
imagejpeg($image_p, null, 80); 
?>


