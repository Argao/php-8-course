<?php 
//Global Variables

$x = 5;

include 'example.php';

function foo(){
    global $x;

    echo $x;
}

foo();