<?php

$colors = ["red", "blue", "green"];
var_dump($colors);

//associative arrays
$user = [
    "name" => "Chris",
    "age" => 30,
];
var_dump($user);
echo $user["name"];
var_dump($colors[2]);

$colors[] = "yellow";
var_dump(count($colors));
