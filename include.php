<?php
//include or require is acceptable but use include_once when dealing with classes or functions to prevent duplication and use require to stop program from running if file is not found.
include_once 'classes&objects.php';



$newAuthor = new Author("Albert", "Einstein", 1850);
echo $newAuthor->getCompleteName();
?>