<?php

function ubah_huruf($string)
{
    //kode di sini
    $newString = "";
    for ($i = 0; $i < strlen($string); $i++) {
        $character = $string[$i];
        $newString .= ++$character;
    }
    return $newString;
}

// TEST CASES
echo ubah_huruf('wow') . "<br>"; // xpx
echo ubah_huruf('developer') . "<br>"; // efwfmpqfs
echo ubah_huruf('laravel') . "<br>"; // mbsbwfm
echo ubah_huruf('keren') . "<br>"; // lfsfo
echo ubah_huruf('semangat'); // tfnbohbu
