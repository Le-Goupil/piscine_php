<?php

interface GoodManners {
    public function say_please();
    public function say_thanks();
    public function say_sorry($name);
    const END_WORDS = ", dirais-je.";
}

trait Singer {
    function sing_a_song(){
            echo "Trololololololol\n";
            echo str_replace('o', 'a', 'Trololololololol' . "\n");
            echo str_replace('a', 'i', 'Tralalalalalalal' . "\n");
    }
}


abstract class Warrior {
    public function attack(){
        echo "I'll kill you, poor noob !\n";
    }

    use Singer;
    
    abstract public function represent();
    abstract public function shout();
}

class Booba extends Warrior implements GoodManners{
    public function represent(){
        echo "92\n";
    }

    public function shout(){
        echo "Bah bien Morray !";
    }

    public function say_please(){
        echo "S'il-te-plait".self::END_WORDS . "\n";
    }

    public function say_thanks(){
        echo "Merci".self::END_WORDS . "\n";
    }

    public function say_sorry($name){
        echo "Mille excuses, $name".self::END_WORDS . "\n";
    }

}

class LaFouine extends Warrior {
    public function represent(){
        echo "78\n";
    }

    public function shout(){
        echo "Je suis proprietaire !";
    }
}