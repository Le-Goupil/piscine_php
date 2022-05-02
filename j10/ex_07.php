<?php

class Body {
    private $head;
    protected $arm;
    public $hand;
    protected $leg;
    public $foot;

    public function __construct(){
        $this->head = 1;
        $this->arm = 2;
        $this->hand = 2;
        $this->leg = 2;
        $this->foot = 2;
    }

    public function print_inside_attributes(){
        $gné = get_object_vars($this);
        foreach ($gné as $key => $value) {
            echo "$key : $value\n";
        }
    }
}

function print_object_attributes($class){
    $object = get_object_vars($class);
    foreach ($object as $key => $value) {
        echo "$key => $value\n";
    }
}

