<?php

function hitung($string)
{
    /* 
    1. Jika string mengandung karakter *, maka x adalah potong karakter 0 sampai posisi karakter * dikurang 1 
        dan y adalah potong karakter dari posisi * ditambah 1 sampai posisi terakhir string. 
        Hitung hasil dengan cara x * y
    2. Jika string mengandung karakter +, maka x adalah potong karakter 0 sampai posisi karakter + dikurang 1 
        dan y adalah potong karakter dari posisi + ditambah 1 sampai posisi terakhir string. 
        Hitung hasil dengan cara x + y
    3. Jika string mengandung karakter :, maka x adalah potong karakter 0 sampai posisi karakter : dikurang 1 
        dan y adalah potong karakter dari posisi : ditambah 1 sampai posisi terakhir string. 
        Hitung hasil dengan cara x : y
    4. Jika string mengandung karakter %, maka x adalah potong karakter 0 sampai posisi karakter % dikurang 1 
        dan y adalah potong karakter dari posisi % ditambah 1 sampai posisi terakhir string. 
        Hitung hasil dengan cara x % y
    5. Jika string mengandung karakter -, maka x adalah potong karakter 0 sampai posisi karakter - dikurang 1 
        dan y adalah potong karakter dari posisi - ditambah 1 sampai posisi terakhir string. 
        Hitung hasil dengan cara x - y   
    */
    $hasil = 0;

    if (strpos($string, "*")) {
        $x = substr($string, 0, strpos($string, "*"));
        $y = substr($string, strpos($string, "*") + 1);
        $hasil = $x * $y;
    } else if (strpos($string, "+")) {
        $x = substr($string, 0, strpos($string, "+"));
        $y = substr($string, strpos($string, "+") + 1);
        $hasil = $x + $y;
    } else if (strpos($string, ":")) {
        $x = substr($string, 0, strpos($string, ":"));
        $y = substr($string, strpos($string, ":") + 1);
        $hasil = $x / $y;
    } else if (strpos($string, "%")) {
        $x = substr($string, 0, strpos($string, "%"));
        $y = substr($string, strpos($string, "%") + 1);
        $hasil = $x % $y;
    } else if (strpos($string, "-")) {
        $x = substr($string, 0, strpos($string, "-"));
        $y = substr($string, strpos($string, "-") + 1);
        $hasil = $x - $y;
    } else {
        $hasil = null;
    }

    return $hasil;
}

//TEST CASE
echo hitung("102*2") . "<br>";
echo hitung("2+3") . "<br>";
echo hitung("100:25") . "<br>";
echo hitung("10%2") . "<br>";
echo hitung("99-2");
