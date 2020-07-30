<?php
function tentukan_deret_aritmatika($arr) {
  $sisa_pertama = $arr[1]-$arr[0];
  $output = false;
  echo "sisa pertama $sisa_pertama " . "<br>";
  for($i=0; $i<count($arr)-1;$i++){
    $sisa = $arr[$i+1]-$arr[$i];
    echo "sisa $sisa " . "<br>";
    
    if($sisa_pertama!=$sisa){
      $output = false;
    } else {
      $output = true;
    }
  }
  return $output;
  echo $output; 
}

// TEST CASES
//echo tentukan_deret_aritmatika([1, 2, 3, 4, 5, 6]) . "<br>";// true
echo tentukan_deret_aritmatika([2, 4, 6, 12, 24]) . "<br>";// false
//echo tentukan_deret_aritmatika([2, 4, 6, 8]) . "<br>"; //true
//echo tentukan_deret_aritmatika([2, 6, 18, 54]) . "<br>";// false
//echo tentukan_deret_aritmatika([1, 2, 3, 4, 7, 9]);// false
?>