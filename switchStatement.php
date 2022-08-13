<?php

$authors = ["Charles Dickens", "Jane Austin", "William ShakeSpear", "Mark Twain", "Louisa May Alcott"];

$count = count($authors);

switch($count) {
    case 0:
        echo "There are no authors.".PHP_EOL;
        break;
    case 1:
        echo "There is one author".PHP_EOL;
        break;

    default:
        echo "There is a total of $count authors.".PHP_EOL;
        break;
}

switch(5 <=> 7) {
    case -1:
        echo "Less than";
        break;
    case 0:
        echo "Equal to";
        break;
    case 1:
        echo "Greater than";
        break;
}

?>