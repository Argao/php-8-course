<?php

declare(strict_types=1);

function isLeap(int $year): bool
{
    if($year % 4 == 0 || ($year % 100 != 0 && $year % 400 == 0)){
        return true;
    }
    return false;
}

var_dump(isLeap(1996));