<?php
$letters = [
    "a",
    "b",
    "c",
    "d",
    "e",
    "f",
    "g",
    "h",
    "i",
    "j",
    "k",
    "l",
    "m",
    "n",
    "o",
    "p",
    "q",
    "r",
    "s",
    "t",
    "u",
    "v",
    "w",
    "x",
    "y",
    "z"
];
$numbers = [
    0,
    1,
    2,
    3,
    4,
    5,
    6,
    7,
    8,
    9
];
$symbols = [
    "!",
    "?",
    "-",
    "@",
    "#",
    "%",
    "$",
    "&"
];
$capital_letters = [];


foreach ($letters as $letter) {
    $capital_letters[] = strtoupper($letter);
}
;

$all_letters = array_merge($letters, $capital_letters);

$all_characters = [$all_letters, $numbers, $symbols];