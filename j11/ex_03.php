<?php

namespace Imperium;

class Soldier {
    private $hp;
    private $attack;
    private $name;

    public function __construct($hp = 50, $attack = 12, $name){
        $this->hp = $hp;
        $this->attack = $attack;
        $this->name = $name;
    }

//SET_________________________________________
    public function setHp($hp){
        $this->hp = $hp;
    }
    public function setAttack($attack){
        $this->attack = $attack;
    }
    public function setName($name){
        $this->name = $name;
    }
//GET_________________________________________
    public function getHp(){
        return $this->hp;
    }
    public function getAttack(){
        return $this->attack;
    }
    public function getName(){
        return  $this->name;
    }

    public function doDamage($obj){

    }

    public function __string(){
        return "$this->name the " . __NAMESPACE__ . " Space Marine : $this->hp.";
    }
}





namespace Chaos;

class Soldier {
    private $hp;
    private $attack;
    private $name;

    public function __construct($hp = 70, $attack = 12, $name){
        $this->hp = $hp;
        $this->attack = $attack;
        $this->name = $name;
    }
//SET_________________________________________
    public function setHp($hp){
        $this->hp = $hp;
    }
    public function setAttack($attack){
        $this->attack = $attack;
    }
    public function setName($name){
        $this->name = $name;
    }
//GET_________________________________________
    public function getHp(){
        return $this->hp;
    }
    public function getAttack(){
        return $this->attack;
    }
    public function getName(){
        return  $this->name;
    }

    public function doDamage($obj){

    }

    public function __string(){
        return "$this->name the " . __NAMESPACE__ . "Space Marine : $this->hp.";
    }
}
