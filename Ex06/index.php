<?php 

//named arguments
function sum($a, $b){
    var_dump($a, $b); 
    return $a + $b;
}

echo sum(b: 5, a: 2);
?>

