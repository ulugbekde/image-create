<?php

if(!empty($_REQUEST['text'])){
  
  $text = $_REQUEST['text'];
  
    
  header('Content-Type: image/jpeg');
  
  $image = imagecreatefromjpeg('logo.jpg'); 
  
  $rgb = imagecolorallocate($image, 0,0,0);
  
  $font = 'fonts/font.ttf';
  
  imagettftext($image, 30, 0, 280, 800, $rgb, $font, $text);
  
  imagejpeg($image);
  
  imagedestroy($image);
    
}else{
  echo json_encode(['status'=>false]);
}
?>
