<?php
// $nums = [5, 6, 7, 5, 66];

// list($a, $b) = $nums;

// [$a,$b] = $nums;


$nums = ['example' => 5, 6, 7, 5, 66];

['example' => $a, 0=> $b] = $nums;
echo $a;