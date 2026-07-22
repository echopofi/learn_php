<?php
$todos = [
    "Learn PHP basics",
    "Set up nginx",
    "Build a todo app"
];

// echo "My Todos:\n";
// foreach ($todos as $index => $todo) {
//     echo ($index + 1) . ". " . $todo . "\n";
// }
echo "Hello, World!\n";

$text = 'Not found';
$status = "404 $text" ;
$combine = $text ." ". $status;

echo $status;
var_dump($status);

echo $combine;

$status = (float) "60";
var_dump($status);
echo $status;

$var = "400" * 4;
var_dump($var);
