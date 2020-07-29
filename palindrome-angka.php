<?php

function palindrome_angka($angka)
{
    // tulis kode di sini
    $palindrome = 0;
    if ($angka >= 0 && $angka <= 8) {
        $palindrome = $angka + 1;
    } else {
        while ((string)$angka != strrev((string)$angka)) {
            $angka++;
        }
        $palindrome = $angka;
    }
    return $palindrome;
}

// TEST CASES
echo palindrome_angka(8) . "<br>"; // 9
echo palindrome_angka(10) . "<br>"; // 11
echo palindrome_angka(117) . "<br>"; // 121
echo palindrome_angka(175) . "<br>"; // 181
echo palindrome_angka(1000); // 1001
