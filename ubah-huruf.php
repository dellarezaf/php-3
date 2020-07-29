<?php
function ubah_huruf($string){
  $string_geser = '';
  for($i=0;$i<strlen($string);$i++){
    $ascii = ord($string[$i]);
    $geser_karakter = chr($ascii+1);
    $string_geser .= $geser_karakter;
  }
  return $string_geser . "<br>";
}

// TEST CASES
echo ubah_huruf('wow'); // xpx
echo ubah_huruf('developer'); // efwfmpqfs
echo ubah_huruf('laravel'); // mbsbwfm
echo ubah_huruf('keren'); // lfsfo
echo ubah_huruf('semangat'); // tfnbohbu

?>