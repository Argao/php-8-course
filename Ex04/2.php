<?php
include 'nav.php';

function getPermission(){
    sleep(2);
    return 2;
}

switch(getPermission()){
    case 1:
        echo "<h1>Hello admin</h1>";
        break;
    case 2:
        echo "<h1>Hello mod</h1>";
        break;
    default:
        echo "<h1>Hello guest</h1>";
}

function getUsers(){
    sleep(2);//Simula um atraso na resposta do servidor (2 segundos
    return ['John','Doe','Jane', 'Doe'];
}

$userCount = count(getUsers());

for($i = 0; $i < $userCount; $i++){

    echo $i;
}
?>