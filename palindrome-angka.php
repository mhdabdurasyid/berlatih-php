<?php

function palindrome_angka($angka)
{
    // tulis kode di sini
    if ($angka >= 0 && $angka <= 8) {
        $palindrome = $angka + 1;
        echo "$angka -> $palindrome<br>";
    } else {
        echo "$angka -> ";
        while ((string)$angka != strrev((string)$angka)) {
            $angka++;
        }
        echo "$angka<br>";
    }
}

// TEST CASES
echo palindrome_angka(8); // 9
echo palindrome_angka(10); // 11
echo palindrome_angka(117); // 121
echo palindrome_angka(175); // 181
echo palindrome_angka(1000); // 1001
