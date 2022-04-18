<?php

$age = 20;
$salary = 300000;

// Sample if
if ($age === 20) {
    echo '1';
}
// Without circle braces
if ($age === 20)
echo "1";
// Sample if-else
if ($age > 20) {
    echo '1';
} else {
    echo '2';
}
echo '<br>';
// Difference between == and ===
if ($age == 20) {  
    echo '1'.'<br>';
} 

if ($age == '20') {
    echo '2'.'<br>';
} /*this statement is still true although it is a string 
because we're comparing values when we use double == however 
if we use triple === then the statement would be false 
because you would then be comparing data types.*/

// if AND
if ($age == 20 && $salary === 300000) {  //you can use || for OR.
    echo "do something".'<br>';
}
// if OR

// Ternary if
echo $age < 22 ? "young" : "old";

// Short ternary
$mySalary = $salary ?: 400000;
echo '<br>';
var_dump($mySalary);
echo '</br>';
/*Whats happening here is that we care creating 
a new variable and we make that equal to an existing
 variable and if it has a value (not 0) it will take 
 on that value, otherwise it takes the value given 
 on the end*/



// Null coalescing operator

$myName = $name ?? 'Johnny';
// $myName = isset($name) ? $name : 'John';
echo '<pre>';
var_dump($myName);
echo '</pre>';




// switch

$userRole = 'admin'; //editor, user, admin
switch ($userRole) {
    case 'admin':
        echo 'admin';
        break;
    case 'editor':
        echo 'editor';
        break;
    case 'user':
        echo 'user';
        break;
    default:
    echo 'Invalid role';
    }

