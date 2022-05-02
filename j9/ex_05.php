<?php

class Character{
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