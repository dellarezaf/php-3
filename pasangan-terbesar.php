<?php
function pasangan_terbesar($angka){
  //1.looping per karakter per angka
  //2.bandingkan pasangan angka sebelum dan sesudah digeser
  $angka_terbesar = 0;
  for($i=0;$i<strlen($angka)-1;$i++){
    $angka_str = substr($angka, $i, 2);
    if($angka_str>$angka_terbesar){
      $angka_terbesar = $angka_str;
    } 
  }
  return $angka_terbesar;
}

// TEST CASES
echo pasangan_terbesar(641573) . "<br>"; // 73
echo pasangan_terbesar(12783456) . "<br>"; // 83
echo pasangan_terbesar(910233) . "<br>"; // 91
echo pasangan_terbesar(71856421) . "<br>"; // 85
//echo pasangan_terbesar(79918293); // 99

?>