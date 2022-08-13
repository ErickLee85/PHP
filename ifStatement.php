<?php

$authors = ["Charles Dickens", "Jane Austin", "William ShakeSpear", "Mark Twain", "Louisa May Alcott"];


$count = count($authors);
$counter = 0;

if($count == 1 ) {
    echo "There is one author";
}
elseif($count  > 1) {
    echo "There is a total of $count authors";
}

else {
    echo "There are no authors.";
}



?>