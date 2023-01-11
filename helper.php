<?php
function random_num_arr($arrname, $arrlen, $maxnum, $ripetizione)
{
    for ($i; $i < $maxnum; $i++) {
        if ($ripetizione) {
            $arrname[] = rand(1, $arrlen);
        } else {
            if (!in_array((rand(1, $arrlen)), $arrname)) {
                $arrname[] = rand(1, $arrlen);
            } else {
                return;
            }
        }
        ;

    }
    ;
    return $arrname;
}
;

function pass_charact_selector($passarr, $numarr, $password)
{
    foreach ($numarr as $num) {
        $newpass[] = $passarr[$num];
    }
    ;
    return $password = implode($newpass);
}
;