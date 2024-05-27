<?php 
//Variadic functions
function sum(bool $dumpArr, int|float ...$nums){
    if($dumpArr){
        var_dump($nums);
    }
    return array_sum($nums);
}

echo sum(false,5, 2,5,46,7);
?>

