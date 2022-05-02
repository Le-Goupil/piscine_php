<?php
class MyAttribute{
    public $a;
    public function __construct($a){
        $this->a = $a;
    }
    public function display(){
        echo $this->a."\n";
    }
}