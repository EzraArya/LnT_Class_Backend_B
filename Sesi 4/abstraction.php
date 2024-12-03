<?php 
    // Abstraction -> Blueprint / kerangka dasar dari suatu Class

    // Interface -> Blueprint untuk function yang harus digunakan suatu class

    interface Keliling {
        function getKeliling();
    }

    abstract class Shape {
        public $length;

        abstract function getArea();
    }

    class Rectangle extends Shape implements Keliling {
        function getArea() {
            return $this->length * $this->length;
        }

        function getKeliling() {
            return $this->length * 4;
        }
    }

    class Triangle extends Shape {
        public $height;
        function getArea() {
            return $this->length * $this->height / 2;
        }
    }

    $square = new Rectangle();
    $square->length = 10;
    // echo $square->getArea();
    echo $square->getKeliling();

    $triangle = new Triangle();
    $triangle->length = 10;
    $triangle->height = 5;
    // echo $triangle->getArea();
?>