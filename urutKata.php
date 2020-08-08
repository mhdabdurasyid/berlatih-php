<?php

function urutKata($string)
{
    if ($string == "") {
        return "";
    } else {
        $data = explode(" ", $string);
        $result = array();
        for ($i = 0; $i < count($data); $i++) {
            for ($j = 1; $j <= count($data); $j++) {
                if (strpos($data[$i], "$j")) {
                    $result[$j - 1] = $data[$i];
                }
            }
        }
        ksort($result);
        return implode(" ", $result);
    }
}

//TEST CASE
echo urutKata("ib2u in1i b3udi") . "<br>";
echo urutKata("ta3hun menjela2ng se1lamat b4aru");
echo urutKata("");
