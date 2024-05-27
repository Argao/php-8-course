<?php 
//Anonymous Functions, callbacks

$multiplier = 2;


// $multiply = function ($num) use ($multiplier){


//     return $num * $multiplier;
// };

$multiply = fn ($num) => $num * $multiplier;



function sum ($a, $b, $callback){
    return $callback($a + $b);
}

echo sum(5, 2, $multiply);
