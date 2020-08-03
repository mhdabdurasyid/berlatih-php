<?php

function sort_character($string)
{
    $vowel = "aiueo";
    $consonant = "bcdfghjklmnpqrstvwxyz";
    $output_vowel = "";
    $output_consonant = "";

    $string = strtolower($string);
    $string = str_replace(" ", "", $string);

    for ($i = 0; $i < strlen($string); $i++) {
        for ($j = 0; $j < strlen($vowel); $j++) {
            if ($string[$i] == $vowel[$j]) {
                $output_vowel .= $string[$i];
            }
        }
        for ($k = 0; $k < strlen($consonant); $k++) {
            if ($string[$i] == $consonant[$k]) {
                $output_consonant .= $string[$i];
            }
        }
    }

    $output_vowel = str_split($output_vowel);
    sort($output_vowel);
    $output_vowel = implode("", $output_vowel);

    $output_consonant = str_split($output_consonant);
    sort($output_consonant);
    $output_consonant = implode("", $output_consonant);

    $result = array(
        "vowel" => $output_vowel,
        "consonant" => $output_consonant
    );

    return $result;
}

//TEST CASE
echo "<pre>";
print_r(sort_character("Sample Case"));
echo "</pre><pre>";
print_r(sort_character("Next Case"));
echo "</pre>";
