<?php 
    // Class untuk rekening user
    class Rekening {
        private $name, $saldo;

        function getName() {
            return $this->name;
        }

        function getSaldo() {
            return $this->saldo;
        }

        function setName($name) {
            $this->name = $name;
        }

        function setSaldo($saldo) {
            $this->saldo = $saldo;
        }
    }

    $user1 = new Rekening;
    $user1->setName("Ezra");
    $user1->setSaldo(saldo: 100);

    echo $user1->getSaldo();

    $user1->setSaldo(saldo: 200);
    echo $user1->getSaldo();


?>