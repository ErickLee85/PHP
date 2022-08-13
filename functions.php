<?php

function bookAuthor()
 {
    echo "William Shakespear\n";
 }

 //bookAuthor();

 function Add($param1, $param2)
 {
    return $param1 + $param2;
    echo "\n";
 }

// $myAnswer = Add(5,5);
 //echo $myAnswer;

function defaultParams ($param1 = 5, $param2 = 10) //default params, required params need to be at the beginning/default at the end 
{
    echo $param1 - $param2;
    echo "\n";
}

defaultParams();

defaultParams(20,20);

function conditional($param1, $param2)
{
    if ($param1 > $param2) {
        echo "$param1 is > than $param2";
        echo "\n";
    }
    else {
        print("$param2 is > than $param1"); //you can use echo or print with or without ()
        echo "\n";
    }
}

//conditional(5, 10);

$variableFunctionName = "conditional"; //variable function
$variableFunctionName(5,10);



$myVariable = 10;

function getNum() {
    global $myVariable; //set to global variable, can be accessed outside of function. Only needed inside function.
    $myVariable = 20;
}
getNum(); //must call function first to set global variable
echo $myVariable;
?>