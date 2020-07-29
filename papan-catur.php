<?php

function papan_catur($angka) {
  return str_repeat("#",$angka);
}

// TEST CASES
echo papan_catur(4) 
/*
# # # #
 # # #
# # # #
 # # #
 */

//echo papan_catur(8)
/* 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # #
# # # # # # # #
 # # # # # # #

echo papan_catur(5) 
/*
# # # # #
 # # # #
# # # # #
 # # # # 
# # # # #
*/
?>