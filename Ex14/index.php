<?php

spl_autoload_register(function($class){
    $formattedClass = str_replace("\\", "/", $class);
    $path = "{$formattedClass}.php";

    require_once $path;
});

use App\{Utility,CurrentWeek};

$timezome = new DateTimeZone("America/Sao_Paulo");
$date = new DateTime("2021-01-01",$timezome);
$date->setTimezone(new DateTimeZone("America/New_York"))
    ->setDate(2023, 6, 15)
    ->setTime(10, 30)
;

$week = new CurrentWeek();

function foo(iterable $iterable)
{
    foreach ($iterable as $key => $value){
        var_dump($key, $value);

        echo "</br>";
    }
}


foo($week);

