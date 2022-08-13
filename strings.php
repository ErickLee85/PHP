<?php

$currency = 'Penny';

$sampleString = "A $currency saved is a $currency earned"; //variables can only be inserted inside double quote string

$misc = "St Patrick's Day";

//echo $misc;

//echo $sampleString;

$var = 2;

//echo "{$var}nd Place";

//echo $var."nd Place"; //concatenation uses a period.


//print "This above all: to thine own self be true\n"; 

//echo "Et", " tu", ",", "Brute", "!";

$quote = "There is no great genius without a mixture of madness.";
//$quote = strtoupper($quote); //make uppercase
//$quote = strtolower($quote); //make lowercase
//$quote = strlen($quote); //string length
// echo strpos($quote, "There"); string position or character

//$replace = str_replace("genius","mad-man",$quote); replace string (1st param is target, 2nd param is new string, 3rd param is variable)

//echo substr($quote, 5); "is no great genius without a mixture of madness." negative number goes to end of string

$varArray = str_split($quote, 6); //convert string into an array of characters - second parameter is optional, splits string into 6 characters, default is single character

print_r($varArray); //print_r is human readable print






?>
