<?php

function pasangan_terbesar($angka)
{
    // kode di sini
    $max = 0;
    $angka = (string)$angka;
    for ($i = 0; $i < strlen($angka); $i++) {
        if ((int)substr($angka, $i, 2) > $max) {
            $max = substr($angka, $i, 2);
        }
    }
    return $max;
}

// TEST CASES
echo pasangan_terbesar(641573) . "<br>"; // 73
echo pasangan_terbesar(12783456) . "<br>"; // 83
echo pasangan_terbesar(910233) . "<br>"; // 91
echo pasangan_terbesar(71856421) . "<br>"; // 85
echo pasangan_terbesar(79918293); // 99
