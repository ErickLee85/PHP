<?php

class Person {
    const AVG_LIFE_SPAN = 79; //accessible only through person class

    private $firstName;
    private $lastName;
    private $yearBorn;

    function __construct($first = "", $last = "", $year = "") {
        echo "Person Constructor".PHP_EOL;
        $this->firstName = $first;
        $this->lastName = $last;
        $this->yearBorn = $year;
    }

    public function getFirstName() {
       return $this->firstName.PHP_EOL;
    }

    public function setFirstName($tempName) {
        $this->firstName = $tempName;
    }

    protected function getFullName() {
        echo "Person->getFullName()".PHP_EOL;
        return $this->firstName." ".$this->lastName.PHP_EOL;
    }
    
}

class Author extends Person {
    public static $centuryPopular = "19th";
    private $penName = "Mark Twain";

    public function getPenName() {
        return $this->penName.PHP_EOL;
    }

    public function getCompleteName() {
        return $this->getFullName().PHP_EOL;
    }

    public static function getCenturyAuthorWasPopular() {
        return self::$centuryPopular; //use self instead of this when accessing static properties/ use parent:: when accessing static property from inherited class
    }
}

//Private and protected are modifiers to class properties and methods

//echo Author::$centuryPopular; access static property
//echo Author::getCenturyAuthorWasPopular(); access static method


//$myObject->setFirstName("Willie");

// echo $myObject->firstName;
//echo $myObject->getFirstName();

// echo Person::AVG_LIFE_SPAN; //access class constant


?>