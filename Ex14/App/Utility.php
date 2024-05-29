<?php

namespace App;

class Utility
{
    public static function printArr(array $array)
    {
        if(count($array) === 0) {
            throw new EmptyArrayException();
        }

        echo '<pre>';
        print_r($array);
        echo '</pre>';

    }

    public static function printObject(object $object)
    {
        echo '<pre>';
        print_r($object);
        echo '</pre>';
    }
}