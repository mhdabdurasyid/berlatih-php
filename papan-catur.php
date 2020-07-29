<?php

function papan_catur($angka)
{
    // tulis kode di sini
    echo "<pre>";
    for ($i = 0; $i < $angka; $i++) {
        for ($j = 0; $j < $angka; $j++) {
            if ($i % 2 == 0) {
                echo "# ";
            } else if ($i % 2 == 1 && $j < $angka - 1) {
                echo " #";
            }
        }
        echo "<br>";
    }
    echo "</pre>";
}

// TEST CASES
echo papan_catur(4);
/*
# # # #
 # # #
# # # #
 # # #
 */

echo papan_catur(8);
/* 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # #
# # # # # # # #
 # # # # # # #
*/

echo papan_catur(5);
/*
# # # # #
 # # # #
# # # # #
 # # # # 
# # # # #
*/