<?php

$authors = ["Charles Dickens", "Jane Austin", "William ShakeSpear", "Mark Twain", "Louisa May Alcott"];
$count = count($authors);

$outcome = $count ?? $anotherVariable ?? "Count unavailable"; //null coalesce

echo $outcome;

?>