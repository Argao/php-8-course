<?php

$users = ['Jhon', 'Jack', 'Jane',null];

// if(isset($users[3])){
//     echo "User found";
// }

// if(array_key_exists(3, $users)){
//     echo "User found";
// }
// $users = array_filter(
//     $users,
//     fn($user) => $user !== 'Jane'
// );
// $users = array_map(
//     fn($user) => strtoupper($user),
//     $users
// );

$users = array_merge(
    $users,
    ['Sam', 'Jesica']
);


sort($users);




$users = array_values($users);

echo '<pre>';
print_r($users);
echo '</pre>';
