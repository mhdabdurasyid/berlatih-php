<?php

function cetak_gambar($num)
{
    $pattern = "";
    if ($num % 2 == 0) {
        for ($i = 1; $i <= $num; $i++) {
            if ($i == 1 || $i == $num) {
                for ($j = 1; $j <= $num; $j++) {
                    $pattern .= "+ ";
                }
            } else {
                for ($j = 1; $j <= $num; $j++) {
                    if ($j % 3 == 0) {
                        $pattern .= "+ ";
                    } else {
                        $pattern .= "= ";
                    }
                }
            }
            $pattern .= "<br>";
        }
    } else {
        $pattern = "Parameter harus bilangan genap";
    }

    return $pattern;
}

//TEST CASE
echo "<pre>";
echo cetak_gambar(8);
echo "</pre>";

echo "<pre>";
echo cetak_gambar(6);
echo "</pre>";

echo "<pre>";
echo cetak_gambar(9);
echo "</pre>";
