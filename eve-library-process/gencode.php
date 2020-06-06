<?php

  function guest_keygen($size, $alpha){
    //MAX SIZE, NUMBER OF ALPHABETS


    //intialized var
  	$alpha_key = '';
    //creates Array with char range from A to Z
  	$keys = range('A', 'Z');

    //for loop to select 2 letters randomly from Charachter array.
    //array_rand = php function to select a random element from an array.
  	for ($i = 0; $i < $alpha; $i++) {
  		$alpha_key .= $keys[array_rand($keys)];
  	}

    //length is the remaining slot for the numeric value subtracted by the two charachters.
    // 2 Letters , 4 Numbers
  	$length = $size - $alpha;

    //intialized var
  	$key = '';
    //creates Array with a range of numeric 0 to 9
  	$keys = range(0, 9);

    //for loop to get the remaining numeric list from the length subtracted by the n charachters
  	for ($i = 0; $i < $length; $i++) {
      //key is = to key + random key selected from array_rand.
      // .= is a concatenate function which appends the new value rather than adding is numeric value
      // ie = 2 += 2 = 4 // 2 .= 2 = 22; so everytime the for loop iterates a random number it appends it value
  		$key .= $keys[array_rand($keys)];
  	}

    //generatekey is the combination of the alpha character ke and the remaining numeric $keys.
    //str_shuffle is a pre-defined php function that rearranges a given string.


    //i will plan to remake this code to a shorter one for the mean time use this -@pol
  	$generatekey = str_shuffle($alpha_key.$key);

    return $generatekey;
  }

  function token_keygen($size, $alpha){
    //MAX SIZE, NUMBER OF ALPHABETS


    //intialized var
    $alpha_key = '';
    //creates Array with char range from A to Z
    $keys  = array_merge(range('A', 'Z'), range('a', 'z'));

    //for loop to select 2 letters randomly from Charachter array.
    //array_rand = php function to select a random element from an array.
    for ($i = 0; $i < $alpha; $i++) {
      $alpha_key .= $keys[array_rand($keys)];
    }



    //length is the remaining slot for the numeric value subtracted by the two charachters.
    // 2 Letters , 4 Numbers
    $length = $size - $alpha;

    //intialized var
    $key = '';
    //creates Array with a range of numeric 0 to 9
    $keys = range(0, 9);

    //for loop to get the remaining numeric list from the length subtracted by the n charachters
    for ($i = 0; $i < $length; $i++) {
      //key is = to key + random key selected from array_rand.
      // .= is a concatenate function which appends the new value rather than adding is numeric value
      // ie = 2 += 2 = 4 // 2 .= 2 = 22; so everytime the for loop iterates a random number it appends it value
      $key .= $keys[array_rand($keys)];
    }

    //generatekey is the combination of the alpha character ke and the remaining numeric $keys.
    //str_shuffle is a pre-defined php function that rearranges a given string.


    //i will plan to remake this code to a shorter one for the mean time use this -@pol
    $generatekey = str_shuffle($alpha_key.$key);

    return $generatekey;
  }


 ?>
