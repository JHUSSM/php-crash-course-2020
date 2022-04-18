<?php

// Print current date
echo date('d-m-Y').'<br>'.date('H:i:s').'<br>';
// Print yesterday
echo 'Date: ';
echo date("d-m-Y").'<br>';
echo 'Time: ';
echo date("H:i:s", time() - 60 * 60).'<br>';;
// Different format: https://www.php.net/manual/en/function.date.php
echo date('F m Y, H:i:s').'<br>';// Print current timestamp

// Parse date: https://www.php.net/manual/en/function.date-parse.php
$parsedDate = date_parse('2022-04-10 19:13:00');
echo '<pre>';
var_dump($parsedDate);
echo '</pre>';
// Parse date from format: https://www.php.net/manual/en/function.date-parse-from-format.php

$dateString = 'March 4 2020 12:45:35';
$parsedDate = date_parse_from_format('F j Y H:i:s', $dateString);
echo '<pre>';
var_dump($parsedDate);
echo '</pre>';