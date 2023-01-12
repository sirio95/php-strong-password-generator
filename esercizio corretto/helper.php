<?php

function pass_generate($pwd_len, $letters_on, $numbers_on, $symbols_on, $repeat_on)
{
    $letters_min = "abcdefghijklmnopqrstuvwxyz";
    $letters_maiusc = strtoupper($letters_min);
    $numbers = "0123456789";
    $symbols = "@#()?^_-!%&$/*<>";

    $pass_char = '';

    if ($letters_on) {
        $pass_char .= $letters_min . $letters_maiusc;
    }
    if ($numbers_on) {
        $pass_char .= $numbers;
    }
    if ($symbols_on) {
        $pass_char .= $symbols;
    }

    $pass = "";
    while (strlen($pass) <= $pwd_len) {

        $new_char = substr($pass_char, rand(0, strlen($pass_char)), 1);

        if ($repeat_on || !str_contains($pass, $new_char)) {
            $pass .= $new_char;
        }
    }
    return $pass;

}