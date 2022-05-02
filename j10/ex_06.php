<?php

class Pony {
    private $name;
    private $gender;
    private $color;

    public function __construct($name, $gender, $color){
        $this->name = $name;
        $this->gender = $gender;
        $this->color = $color;
    }

    public function __set($name){
        $this->name = $name;
    }

    public function setGender($gender){
        $this->gender = $gender;
    }

    public function setColor($color){
        $this->color = $color;
    }

    public function getName(){
        return $this->name;
    }
    
    public function getGender(){
        return $this->gender;
    }

    public function getColor(){
        return $this->color;
    }

    public function __toString(){
        return "Don't worry, I'm a pony !\n";
    }

    public function __call($a,$b){
        echo "I don't know what to do...\n";
    }

    public function speak(){
        echo "Hiii hiii hiiii\n";
    }

    public function __destruct(){
        echo "I'm a dead pony.\n";
    }
}