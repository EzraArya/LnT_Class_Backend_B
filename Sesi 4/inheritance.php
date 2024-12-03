<?php 
    // Parent class -> Animal
    class Animal {
        public $legs;

        function getNumberOfLegs() {
            echo $this->legs;
        }
    }

    class Mamalia extends Animal{
        function greetings() {
            echo "Mamalia";
        }
    }

    class Amphibi extends Animal {

    }

    $dog = new Mamalia();

    $dog->legs = 4;
    $dog->getNumberOfLegs();
    $dog->greetings();

    $frog = new Amphibi();
    $frog->legs = 2;
    $frog->getNumberOfLegs();
?>