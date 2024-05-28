<?php

// $directory = scandir(__DIR__);

// print_r($directory);



if(file_exists('example.txt')){
    echo filesize('example.txt');

    file_put_contents('example.txt','Hello World');
    clearstatcache();

    echo file_get_contents('example.txt');

}