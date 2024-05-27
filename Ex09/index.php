<?php 
//Callable type

$multiplier = 2;


// $multiply = function ($num) use ($multiplier){


//     return $num * $multiplier;
// };



function anotherMultiplier($num){
    return $num * 2;
}


function sum (int|float $a, int|float $b, callable $callback){
    return $callback($a + $b);
}

echo sum(5, 2, fn ($num) => $num * $multiplier);
echo sum(5, 2, 'anotherMultiplier');