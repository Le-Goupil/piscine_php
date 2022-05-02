<?php

interface iCars{
    public function getPrice();
    public function getWeight();
    public function mineIsBigger($obj);
}

class BMW implements iCars {
    private $_price;
    private $_weight;

    public function __construct($_price, $_weigth = 4242){
        $this->_price = $_price;
        $this->_weight = $_weight;
    }

    public function getPrice(){
        return $this->_price;
    }

    public function getWeight(){
        return $this->_weight;
    }

    public static function lessExpensive(){
        return 15000;
    }

    public function mineIsBigger($obj){
        if ($obj == "Toyota"){
            echo "Mine is bigger";
        } else if ($obj == "Smart"){
            echo "Mine is way bigger !";
        } else if ($obj == "Velib"){
            echo "LOL";
        } else {
            echo "Show me !";
        }
    }
}

class Suzuki implements iCars {
    private $_price;
    private $_weight;

    public function __construct($_price, $_weigth = 4242){
        $this->_price = $_price;
        $this->_weight = $_weight;
    }

    public function getPrice(){
        return $this->_price;
    }

    public function getWeight(){
        return $this->_weight;
    }

    public static function lessExpensive(){
        return 5000;
    }

    public function mineIsBigger($obj){
        if ($obj == "Toyota"){
            echo "Mine is bigger";
        } else if ($obj == "Smart"){
            echo "Mine is way bigger !";
        } else if ($obj == "Velib"){
            echo "LOL";
        } else {
            echo "Show me !";
        }
    }
}