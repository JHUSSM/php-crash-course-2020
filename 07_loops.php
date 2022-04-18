<?php

// while

// while (true) {
// }

// Loop with $counter
$counter = 0;
while ($counter < 10){
    echo 'Less than 10'.'<br>', $counter++;
    echo '<br>';
}

// do - while
$newCounter = 0;
do {
    echo $newCounter.'<br>';
    $newCounter++;
}while ($newCounter < 0); /*A do while will 
excute the first part of the code then 
look at the condition, where as the while loop looks 
at the condition first*/

// for
for ($i = 0; $i < 10; $i++){
    echo $i.'<br>';
}/*How for loops work: the first part is a statement, 
the second part is a condition that is checked before 
every itteration, and the last section happens after
every itteration, $i++*/

// foreach
$fruits = ["Banana", "Apple", "Orange"];
foreach ($fruits as $i => $fruit){
    echo $i.' '.$fruit.'<br>';
} 

// Iterate Over associative array.
$person = [
    'name' => 'Brad',
    'surname' => 'Traversy',
    'age' => 30,
    'hobbies' => ['Tennis', 'Video Games'],
];

foreach ($person as $key => $value){
    if (is_array($value)){
    echo $key.":".implode(",",$value).'<br>';
    }else echo $key.":".$value.'<br>';
}

