<?php
include 'connection.php';

  //mktime is the time in seconds
  //a good choice in making unique variables @POL
  $str = W34Z21223SDX;
  //getting key from encryption database
  $sql = "SELECT * FROM encryption";
  $result = mysqli_query($conn, $sql);


      // output data of each row
      while($row = mysqli_fetch_assoc($result)) {
          echo "Key:".$row["encryptionkey"]."<br>";
          $encryption_key = "mktime()";
      }


  //
  // Store a string into the variable which
  // need to be Encrypted

  // Display the original string
  echo "Original String: " . $str."<br/>";

  // Store the cipher method
  $ciphering = "AES-256-OFB";

  // Use OpenSSl Encryption method
  $iv_length = openssl_cipher_iv_length($ciphering);
  $options = 0;

  // Non-NULL Initialization Vector for encryption
  $encryption_iv = date("Y-m-d");

  // Store the encryption key
  ;

  // Use openssl_encrypt() function to encrypt the data
  $encryption = openssl_encrypt($str, $ciphering,
  $encryption_key, $options, $encryption_iv);

  // Display the encrypted string
  echo "Encrypted String: " . $encryption . "<br/>";

  // Non-NULL Initialization Vector for decryption
  $decryption_iv = date("Y-m-d");

  // Store the decryption key
  $decryption_key = $encryption_key;

  // Use openssl_decrypt() function to decrypt the data
  $decryption=openssl_decrypt ($encryption, $ciphering,
  $decryption_key, $options, $decryption_iv);

  // Display the decrypted string
  echo "Decrypted String: " . $decryption."<br/>";

echo "timestamp:".mktime();

?>
