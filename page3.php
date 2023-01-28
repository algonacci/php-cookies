<?php
$user = [
 "name"  => "Eric",
 "email" => "test@test.com",
 "age"   => 21,
];

$user = serialize($user);

setcookie("user", $user, time() + 6400);

$user = unserialize($_COOKIE["user"]);

echo $user["name"];
