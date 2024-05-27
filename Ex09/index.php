<?php 
//Pass by reference / pointers
$cup = 'empty';

function fill(&$cup){
    $cup = 'full';
}


fill($cup);

echo $cup;