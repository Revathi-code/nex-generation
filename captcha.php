<?php
session_start();
create_image();
function create_image()
{
//Generating Random Code
$md5_hash = md5 (rand(0,9999));
$captcha = substr($md5_hash,rand(1,10),5);

$_SESSION['captcha'] = $captcha;
$width =180;
$height= 75;

$image = ImageCreate($width,$height);

imagefill($image,0,0,imagecolorallocate($image,rand(0,255),rand(0,255),rand(0,255)));
$font ="SCRIPTIN.ttf";
imagettftext($image,30,15,38,60,imagecolorallocate($image,rand(0,255),rand(0,255),rand(0,255)),$font,$captcha);

header("Content-Type:image/jpeg");

imagejpeg($image);
imagedestroy($image);

}


