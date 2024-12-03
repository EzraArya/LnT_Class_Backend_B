<?php 
    // Polymorphism -> Memiliki berbagai form

    // Overridding
    class Dog {
        function bark() {
            echo "BARK";
        }
    }

    class Bulldog extends Dog {
        function bark() {
            echo "BARK BARK BARK";
        }
    }
    
    // $bulldog = new Bulldog;
    // $bulldog->bark();

    echo "<br>";

    // $bulldog2 = new Dog;
    // $bulldog2->bark();

    // Overloading -> Memungkinkan suatu method yang memiliki nama yang sama untuk melakukan suatu instruksi yang berbeda

    interface Meow {
        function meow();
    }

    class Anggora implements Meow {
        function meow() {
            echo "meow";
        }
    }

    class Persian implements Meow {
        function meow() {
            echo "MEOW";
        }
    }

    $anggora = new Anggora;
    $anggora->meow();

    echo "<br>";

    $persia = new Persian;
    $persia->meow();
?>