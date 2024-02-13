<?php

$users = ['Jhon', 'Friren', 'Bob'];
$users = array_filter($users, fn($user) => $user !== 'Bob');
$uppercaseUsers = array_map(fn($user) => strtoupper($user), $users);

$users = array_merge($users, ['Jessica', 'Bruno'], $uppercaseUsers);
sort($users);

$last = end($users);

echo '<pre>';
print_r($users);
print_r($last);
echo '</pre>';
