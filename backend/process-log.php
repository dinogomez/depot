<?php

define('DOCUMENT_ROOT', $_SERVER['DOCUMENT_ROOT']);


function logfile($IP, $user, $type) {
  date_default_timezone_set('Asia/Manila');

  $file = DOCUMENT_ROOT.'/Depot-VersionControl/depot-1.0.1c/backend/log/'.$type.'.txt';
  $date = date('H:i, jS F Y');
  if ($type == "register") {
    $outputString = $date."\t IP:".$IP."\t REGISTERED USER:".$user."\n";
  } elseif ($type == "login") {
    $outputString = $date."\t IP:".$IP."\t LOGIN USER:".$user."\n";
  }

  if (file_exists($file)) {
    $fh = fopen($file, 'a');
  } else {
    $fh = fopen($file, 'w');
  }
  fwrite($fh, $outputString."\n");
  fclose($fh);



}




 ?>
