<?php 
    // Class -> Sebuah blueprint dari sebuah objek
    // Properties -> Data dalam suatu class
    // Methods -> Sebuah instruksi yang bisa dijalankan di suatu class

    class Book {
        // Properties
        public $name;
        protected $author;
        private $price;

        // Methods
        // function getPrice() {
        //     return $this->price;
        // }

        // Constructor -> Method atau function yang dirun ketika pertama kali object tersebut dibuat

        public function __construct($name, $author) {
            $this->name = $name;
            $this->author = $author;
            $this->price = 100;
        }

        // Access Modifier -> untuk mengkontrol dari mana data class bisa diakses
        // public -> Bisa diakses dari mana saja
        // protected -> Bisa diakses dari dirinya sendiri, class yang berada di package yang sama, child class
        // private -> Hanya bisa diakses dari dirinya sendiri

        // GETTER -> Function untuk mendapatkan data

        function getPrice() {
            return $this->price;
        }

        // SETTER -> Function untuk menetapkan value suatu data

        function setPrice($price) {
            $this->price = $price;
        }
    }

    // Objeck -> Implementasi dari class

    $book1 = new Book("Legacy", "Ezra");
    // $book1->name = "Legacy";
    // $book1->author = "Ezra";
    // $book1->price = 100;

    // echo $book1->price;
    echo $book1->getPrice();

    $book1->setPrice(200);
    echo $book1->getPrice();

    // $book1->price = 200;
    // echo $book1->getPrice();
?>