<?php

function is_username_valid($username)
{
    $pattern = '/^([^0-9!@#$%^&*(),.?":{}|<>])[A-z0-9]{5,9}$/';
    if (preg_match($pattern, $username)) {
        return true;
    } else {
        return false;
    }
}

function is_password_valid($password)
{
    $pattern = '/^(?=.*@.*[A-Z].*[0-9].*[!#$%^&*(),.?":{}|<>].*)[A-z0-9!@#$%^&*(),.?":{}|<>]{8,}$/';
    if (preg_match($pattern, $password)) {
        return true;
    } else {
        return false;
    }
}

// TEST CASE
var_dump(is_username_valid('@Najibb'));
var_dump(is_username_valid('Ayu99v'));

var_dump(is_password_valid('p@ssW0rd#'));
var_dump(is_password_valid('DumbW4ysDev99!#'));
