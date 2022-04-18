<?php

// Declaring numbers

$a = 5;
$b = 4;
$c = 1.2;
// Arithmetic operations

echo ($a + $b) * $c.'<br>';
echo $a - $b,'<br>';
echo $a % $b.'<br>';
echo $b / $c.'<br>';
echo $a * $b.'<br>';

// Assignment with math operators
// $a += $b;
// echo $a.'<br>';

// $b += 1.2;
// echo $b.'<br>';
// Increment operator
echo $a++.'<br>';
echo ++$a.'<br>';
echo ++$a.'<br>';
echo ++$a.'<br>';
echo ++$a.'<br>';

// Decrement operator
echo --$a.'<br>';
// Number checking functions
is_float(1.25); //true
is_double(1.35); //true
is_int(5); //true
is_numeric("3.45"); //true
is_numeric("3g.45"); //false
// Conversion

$strNumber = "12.34";
$number = (float)$strNumber;
var_dump($number);
echo '<br>';
// Number functions
echo "abs(-15) is ". abs(15) . '<br>';
echo "pow(2, 2) " . pow(2, 2) . '<br>';
echo "sqrt(16) " . sqrt(16) . '<br>';
echo "max(2, 3, 7) " . max(2, 3, 7) . '<br>';
echo "min(5, 28, 3) " . min(5, 28, 3) . '<br>';
echo "round(2.4) " . round(2.4) . '<br>';
echo "round(2.7) " . round(2.7) . '<br>';
echo "floor(2.6) " . floor(2.6) . '<br>';
echo "ceil(2.1) " . ceil(2.1) . '<br>';
// Formatting numbers
$number = 987654321.1234567;
echo number_format($number, 2, ".", ",");
// https://www.php.net/manual/en/ref.math.php