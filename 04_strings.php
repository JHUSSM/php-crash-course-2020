<?php

// Create simple string
$name = 'Jamal';
// $string = 'Hello '.$name;
// $string2 = "Sup ".$name;
$string = 'Hello my name is ' .$name.'. I am 21 years old';
$string2 = "Hello my name is $name. I am 21 years old"; //with double quotation 
echo $string.'<br>';
echo $string2.'<br>';
// String concatenation
echo 'hello '.' world and '.'PHP'; 
echo '<br>';
// String functions
$string = "    Hello World      ";

echo "1 - " . strlen($string) . '<br>';
echo "2 - " . trim($string) . '<br>';
echo "3 - " . ltrim($string) . '<br>';
echo "4 - " . rtrim($string) . '<br>';
echo "5 - " . str_word_count($string) . '<br>';
echo "6 - " . strrev($string) . '<br>';
echo "7 - " . strtoupper($string) . '<br>';
echo "8 - " . strtolower($string) . '<br>';
echo "9 - " . ucfirst('hello') . '<br>';
echo "10 - " . lcfirst('HELLO') . '<br>';
echo "11 - " . ucwords('hello world') . '<br>';
echo "12 - " . strpos($string, 'world') . '<br>';
echo "13 - " . stripos($string, 'world') . '<br>';
echo "14 - " . substr($string, 7, 5) . '<br>';
echo "15 - " . str_replace('world', 'PHP', $string) . '<br>';
echo "16 - " . str_ireplace('world', 'PHP', $string) . '<br>';
// Multiline text and line breaks
$longText = "
    Hello, my name is Jamal
    I am 21,
    I love myself
";

echo $longText.'<br>';
echo nl2br($longText).'<br>';
// Multiline text and reserve html tags
$longText = "
    Hello, my name is <b>Jamal</b>
    I am <b>21</b>,
    I love myself
";

echo '1 - ' . $longText.'<br>';
echo '2 - ' . nl2br($longText).'<br>';
echo '3 - ' . htmlentities($longText).'<br>';
echo '4 - ' . nl2br(htmlentities($longText)).'<br>';
echo html_entity_decode('&lt;b&gt;21&lt;/b&gt;').'<br>';
// https://www.php.net/manual/en/ref.strings.php