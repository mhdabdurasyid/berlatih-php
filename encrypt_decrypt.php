<?php

function encrypt($password)
{
    if (preg_match('/(^[a-z]+$)/i', $password)) {
        $result = array();
        for ($i = 0; $i < strlen($password); $i++) {
            $char = $password[$i];
            for ($j = 1; $j <= 11; $j++) {
                ++$char;
                if (strlen($char) > 1) {
                    $char = $char[0];
                }
            }
            array_push($result, $char);
        }

        return implode('', $result);
    } else {
        return 'Password harus berupa string A-z';
    }
}

function decrypt($encrypted_password)
{
    $result = array();
    for ($i = 0; $i < strlen($encrypted_password); $i++) {
        $char = $encrypted_password[$i];
        for ($j = 1; $j <= 15; $j++) {
            ++$char;
            if (strlen($char) > 1) {
                $char = $char[0];
            }
        }
        array_push($result, $char);
    }

    return implode('', $result);
}

//TEST CASE
echo encrypt('Luc+in5ta');
echo decrypt('Wfntyel');
