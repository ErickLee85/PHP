<?php

//$var1 = (6 < 7);
//$var2 = (8 == 8);

$var1 = true;
$var2 = false;
$var3 = false;

var_dump($var1);
var_dump($var2);

var_dump($var1 && $var2); //can also use && instead of and
var_dump($var1 || $var2); // can also use  || instead of or
var_dump(!$var1); //not logical operator will cause a condition to be the opposite
var_dump(!$var2);

?>