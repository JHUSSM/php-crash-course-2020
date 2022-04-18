<?php

// Function which prints "Hello I am Zura"
function hello(){
    echo "Hello I am Jamal".'<br>';
}
hello();
hello();
hello();

// Function with argument
function greeting($name){
    echo "Hello I am $name".'<br>';
}
greeting('Jamal Muse');
greeting('John');
// Create sum of two functions
function sum($a, $b){
    return $a + $b.'<br>';
}
echo sum(10, 13);
// Create function to sum all numbers using ...$nums
function newSum(...$nums){
    $newSum = 0;
    foreach ($nums as $numb){
        $newSum += $numb;
    }
    return $newSum.'<br>';;
}
echo newSum(13, 2, 1, 6, 24, 12);

// Arrow functions
function adding(...$nums){
    return array_reduce($nums, fn($carry, $n) => $carry + $n).'<br>';
}
echo adding(12, 12, 10, 3, 4);


