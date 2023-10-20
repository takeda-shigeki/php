<?php

require_once('config/status_codes.php');

$random_numbers = array_rand($status_codes, 4);
var_dump($random_numbers);
echo "<br/>";

foreach ($random_numbers as $index) {
$options[] = $status_codes[$index];
}
$question = $options[mt_rand(0, 3)];

var_dump($options);
echo "<br/>";
var_dump($question);
echo "<br/>";

foreach ($options as $option)

var_dump($option);
echo "<br/>";
var_dump($option["code"]);


?>