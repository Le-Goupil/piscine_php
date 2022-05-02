<?php

class MyTinyCalculator {
    private $a;
    private $b;
    private $result;
    public function __construct($a,$b){
        $this->a = $a;
        $this->b = $b;
    }

    public function getA(){
        return $this->a = $a;
    }

    public function getB(){
        return $this->$b;
    }

    public function getResult(){
        return $this->result = $result;
    }

    public function setA($a){
        $this->$a;
    }

    public function setB($b){
        $this->$b;
    }

    public function setResult($result){
        $this->result = $result;
    }

    // Opération : 

    public function add(){
        $this->result = $this->a + $this->b;
    }

    public function subtract(){
        $this->result = $this->a - $this->b;
    }

    public function multiply(){
        $this->result = $this->a * $this->b;
    }

    public function divide(){
        $this->result = $this->a / $this->b;
    }

    public function showResult(){
        return $this->result;
    }
}