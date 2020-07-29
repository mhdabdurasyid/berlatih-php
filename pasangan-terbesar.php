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
    echo "$angka -> $max<br>";
}

// TEST CASES
echo pasangan_terbesar(641573); // 73
echo pasangan_terbesar(12783456); // 83
echo pasangan_terbesar(910233); // 91
echo pasangan_terbesar(71856421); // 85
echo pasangan_terbesar(79918293); // 99
