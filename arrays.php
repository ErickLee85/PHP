<?php   

//$authors = array("Charles Dickens", "Jane Austin", "William Shakespear", "Mark Twain"); create array

$books = ["Little Women", "Jane Eyre", "Richard III", "Oliver Twist"]; //create array
//echo $books[0] access specific key

sort($books); //sort in alphabetical order


$allTypes = [10,1.3,"Howdy", false]; 

$authors = array( //associative array
    "quarky" => "Charles Dickens",
    "brilliant" => "Jane Austin",
    "poetic" => "William Shakespear",
);

//foreach($authors as $element) { ----- retrieve each element in array
   // echo $element."\n";
// }

//foreach($authors as $key => $element) { retrieve each key and element in array
  // echo $element. " - $key\n";
//}

//echo count($authors); //counts elements in array, starts with 1

// asort($authors); sorts array without replacing keys, not practical for indexed arrays but go
// ksort($authors) ; sorts array by key, great for associative arrays

array_push($authors, "Michael Crichton"); //add element to array
$authors[] = "L. M. Montgomery"; //add element to array, add custom index if associate array inside square brackets eg..["crazy"] = key

array_pop($authors); //removed last element in array

unset($authors["quarky"]); //remove specific index of array or entire array (no index)unset($myArray) - can take multiple arguments


//print_r($authors["quarky"]); access associative key

//echo array_key_exists("quarky",$authors); check if array key exist. 1 = true, nothing = false

//echo in_array("Oliver Twist",$books);  check if value is inside array. 1 = true... nothing = false

//Multi-Dimensional Array below

$myAuthors = array(
    "Male" => array(
        "Charles Dickens" => array("A Christmas Carol", "Oliver Twist"),
        "William Shakespear" => array("Romeo & Juliet", "Richard III"),
        "Mark Twain" => array ("The adventures of Tom Sawyer", "The Prince and the Pauper")
    ),
    "Female" => array(
        "L. M. Montgomery" => array ("Anne of Green Gables", "Anne of Avonlea"),
        "Louisa May Alcott" => array ("Little Women")
    )
    );

print_r($myAuthors["Male"]["Charles Dickens"][0]);


?>