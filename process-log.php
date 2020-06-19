<?php



function saveOrder($IP, $user, $type) {
  echo '<br/>'.DOCUMENT_ROOT;

  $date = date('H:i, jS F Y');

  $outputString = $date."\t IP:".$IP."\t USER:".$user."\n";


  $file = @ fopen(DOCUMENT_ROOT.'/backend/log/'.$type.'.txt', 'ab');

  if (!$file) {
    echo '<p><strong>Your order could not be processed at this time.
      Please try again later.</strong></p>';
  } else {
    flock($file, LOCK_EX);
    fwrite($file, $outputString, strlen($outputString));
    fwrite($file, $outputString, strlen($outputString));
    flock($file, LOCK_UN);

    fclose($file);
  }
}




 ?>
