<?php

class Character implements iMove{
    protected $name;
    protected $endurance;
    protected $agility;
    protected $strength;
    protected $mana;
    protected const CLASSE = "Character";

    public function __construct($name){
        $this->name = $name;
    }

//GET

    public function getName(){
        return $this->name;
    }

    public function getEndurance(){
        return $this->endurance = 50;
    }

    public function getAgility(){
        return $this->agility = 2;
    }

    public function getStrength(){
        return $this->strength = 2;
    }

    public function getMana(){
        return $this->mana = 2;
    }

    public function getClasse(){
        return self::CLASSE;
    }

// SET

    public function setName($name){
        $this->name = $name;
    }


    public function setEndurance($endurance){
        $this->endurance = $endurance;
    }


    public function setAgility($agility){
        $this->agility = $agility;
    }


    public function setStrength($strength){
        $this->strength = $strength;
    }


    public function setMana($mana){
        $this->mana = $mana;
    }
}

class Paladin extends Character {
    protected const CLASSE = "Paladin";

    public function __construct($name){
        parent::__construct($name);
        echo "$this->name: I'll engrave my name in the history !\n";
    }

    public function getName(){
        return $this->name;
    }

    public function getEndurance(){
        return $this->endurance = 100;
    }

    public function getAgility(){
        return $this->agility = 8;
    }

    public function getStrength(){
        return $this->strength = 10;
    }

    public function getMana(){
        return $this->mana = 3;
    }

    public function getClasse(){
        return self::CLASSE;
    }

    public function attack(){
        echo "$this->name: I'll crush you with my hammer !\n";
    }

    public function __destruct(){
        echo "$this->name: Aarrg I can't believe I'm dead...\n";
    }
}

class Mage extends Character {
    protected const CLASSE = "Mage";

    public function __construct($name){
        parent::__construct($name);
        echo "$this->name: May the gods be with me.\n";
    }

    public function getName(){
        return $this->name;
    }

    public function getEndurance(){
        return $this->endurance = 70;
    }

    public function getAgility(){
        return $this->agility = 10;
    }

    public function getStrength(){
        return $this->strength = 3;
    }

    public function getMana(){
        return $this->mana = 10;
    }

    public function getClasse(){
        return self::CLASSE;
    }
    
    public function attack(){
        echo "$this->name: Feel the power of my magic !\n";
    }

    public function __destruct(){
        echo "$this->name: By the four gods, I passed away...\n";
    }
}

interface iMove {
    function moveRight(){
        echo "$this->name: moves right.";
    }

    function moveLeft(){
        echo "$this->name: moves left.";
    }

    function moveUp(){
        echo "$this->name: moves up.";
    }

    function moveDown(){
        echo "$this->name: moves down.";
    }
}

// $paladin = new Paladin("Jean-Luc");
// $paladin->moveRight();
// $paladin->moveLeft();
// $paladin->moveDown();
// $paladin->moveUp();