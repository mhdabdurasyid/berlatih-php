<?php

function tentukan_deret_aritmatika($arr)
{
    // kode di sini
    $hasil = "";
    $b = $arr[1] - $arr[0];
    $n = count($arr);
    $Un = $arr[0] + ($n - 1) * $b;
    if ($Un != $arr[$n - 1]) {
        $hasil = "FALSE";
    } else {
        $hasil = "TRUE";
    }
    return $hasil;
}

// TEST CASES
echo tentukan_deret_aritmatika([1, 2, 3, 4, 5, 6]) . "<br>"; // true
echo tentukan_deret_aritmatika([2, 4, 6, 12, 24]) . "<br>"; // false
echo tentukan_deret_aritmatika([2, 4, 6, 8]) . "<br>"; //true
echo tentukan_deret_aritmatika([2, 6, 18, 54]) . "<br>"; // false
echo tentukan_deret_aritmatika([1, 2, 3, 4, 7, 9]);// false
