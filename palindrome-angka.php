<?php

function palindrome($angka){
  $temp = $angka;
  $reverse_angka = 0;
  while(floor($temp)){
    $d = $temp%10;
    $reverse_angka = $reverse_angka*10 + $d;
    $temp = $temp/10;
  }
  $output = false;
  if($reverse_angka==$angka){
    return $output=true;
  } else {
    return $output=false;
  }
}

function palindrome_angka($angka) {
  // tulis kode di sini
  if($angka<=9){
    return $angka++;
  }

  while(palindrome($angka)==false){
    $angka++;
  }
  return $angka;
}

// TEST CASES
echo palindrome_angka(9); // 9
echo "<br>" . palindrome_angka(10); // 11
echo "<br>" . palindrome_angka(117); // 121
echo "<br>" . palindrome_angka(175); // 181
echo "<br>" . palindrome_angka(1000); // 1001

?>