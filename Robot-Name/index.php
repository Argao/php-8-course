<?php

// Robot Name
// Manage robot factory settings. When a robot comes off the factory floor, it has no name.

// The first time you turn on a robot, a random name is generated in the format of two uppercase letters followed by three digits, such as RX837 or BC811.

// Create a function that generates names with this format. The names must be random: they should not follow a predictable sequence. 🤖

declare(strict_types=1);


function getNewName(): string
{
    $randLetters = substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 2) ;
    $randNums = substr(str_shuffle("0123456789"),0,3);
    
    return $randLetters . $randNums;
}

function getNewNameCourseSolution(): string
{
    $letters = range('A','Z');
    shuffle($letters);
    $number = mt_rand(100,999);

    return "{$letters[0]}{$letters[1]}{$number}";
    
}

echo getNewName();
echo '</br>';
echo getNewNameCourseSolution();