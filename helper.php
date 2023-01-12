<?php

function random_num_arr($arrname, $arrlen, $maxnum, $ripetizione)
{
    for ($x = 0; $x < $maxnum; $x++) {
        $random_num = rand(0, $arrlen);
        if (!in_array($random_num, $arrname)) {
            $arrname[] = $random_num;
        }
        ;
    }
    ;
    var_dump($arrname);
    return $arrname;
}
;

function pass_charact_selector($passarr, $numarr, $password)
{
    $newpass = [];
    foreach ($numarr as $num) {
        $newpass[] = $passarr[$num];
    }
    ;
    var_dump($newpass);
    return $password = implode($newpass);
}
;

function pass_generator($password_index_codes, $characters_max_number, $numero_caratteri, $ripetizione, $password_characters, $password)
{
    $password_index_codes = random_num_arr($password_index_codes, $characters_max_number, $numero_caratteri, $ripetizione);
    return $password = pass_charact_selector($password_characters, $password_index_codes, $password);
}