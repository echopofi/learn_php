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

echo "\n======================\n";
if(count($colors) >= 4){
	echo "Number of colors greater than 4";
};

if(isset($colors)){
	echo "\nisset check\n";
}

//unset[index] deletes the value at specified index
unset($colors[0]);
var_dump($colors);
