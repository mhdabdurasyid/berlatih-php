<?php

function cetak_gambar($num)
{
    $pattern = "";

    if ($num % 2 == 1) {
        for ($i = 0; $i < $num; $i++) {
            for ($j = 0; $j < $num; $j++) {
                if (($i % 2 == 0 && $j % 2 == 1) || ($i % 2 == 1 && $j % 2 == 0)) {
                    $pattern .= '*';
                } else {
                    $pattern .= '=';
                }
            }
            $pattern .= '<br>';
        }
    } else {
        $pattern = 'Parameter harus bilangan ganjil';
    }

    return $pattern;
}

//TEST CASE
echo "<pre>";
echo cetak_gambar(5);
echo "</pre>";

echo "<pre>";
echo cetak_gambar(8);
echo "</pre>";
