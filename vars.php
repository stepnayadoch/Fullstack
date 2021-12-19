<?php

$name = 'Gelena';
$age = 29;
// коммент вот так делать не нужно! повторяющиеся переменные 
$Age = 33;

//** многострочный комментарий */

echo $name;
echo "<br>";
echo $age;
echo "<br>";
echo $Age;


$name2 = 'Ivan';

echo "<br>";
echo $name2;
echo "<br>";

$lastName = "Permyakova";
$last_name = 'Petrov';

echo $lastName;
echo "<br>";
echo $last_name;

$fullName = $name . ' ' . $lastName;
echo "<br>";
echo $fullName;

$word = 'lower_case';
$word = strtoupper($word);
echo "<br>";
echo $word;

$upperCase = 'UPPER_CASE';
$upperCase = strtolower($upperCase);
echo "<br>";
echo $upperCase;

echo "<br>";
$password = '  qwerty ';
echo '!' . $password . '!';
echo "<br>";
echo trim($password) . '!';

$number = 5 * 5;
echo "<br>";
echo $number * 2;

/**
 * 2 гамбургера по 4.95
 * 1 коктейль за 1.95
 * 1 кока-кола за 0.85
 * чаевые 16%
 * ндс 7.5%
 */


