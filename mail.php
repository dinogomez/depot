<?php
$to = "dinogomez117@gmail.com";
$subject = "Hello";
$txt = "Hello world!";
$headers = "From: webmaster@example.com" . "\r\n" .
"CC: somebodyelse@example.com";
if (mail($to,$subject,$txt,$headers)) {
  echo "success";
}



?>
