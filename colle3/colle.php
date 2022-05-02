<?php
class C3PO extends Robot{
    protected static $numeroDeSerie = 0;
    private $name;
    private $type = "droide de protocol";
// fonctionne
    public function __construct($name){
        $this->name = $name;
        self::$numeroDeSerie++;
        $text = "Je suis le droïde de protocole numéro ".self::$numeroDeSerie .", enchanté de vous rencontrer !\n";
        $text = str_split($text);
        foreach ($text as $key => $value) {
            echo $value;
            usleep(65000);
        }
        sleep(1);
    }
// Fonctionne
    public function dire($str){
        $text = "C3PO no ".self::$numeroDeSerie." : $str\n";
        $text = str_split($text);
        foreach ($text as $key => $value) {
            echo $value;
            usleep(65000);
        }
    }
// Fonctionne
    public function marcher(){
        $text = "Je me met en route, inutile d'insister.\n";
        $text = str_split($text);
        foreach ($text as $key => $value) {
            echo $value;
            usleep(45000);
        }
        parent::marcher(); // Renvois une érreur, j'aurai préféré le laisser commenté.
    }
// Fonctionne
    public function initierProtocol(){
        $text = "En attente d'intéraction utilisateur :\n";
        $text = str_split($text);
        foreach ($text as $key => $value) {
            echo $value;
            usleep(45000);
        }
        do {
            $i = readline()."\n";
            readline_add_history($i);
            if (preg_match('/dire/',$i)){
                preg_match('/"([\d\D]*)"/',$i, $matches);
                $textC3PO = $matches[1];
                $this->dire($textC3PO);
            } else if ($i == "marcher"."\n"){
                $this->marcher();
            }
        } while ($i != "repos"."\n");
        $final = "Fin du protocol\n";
        $final = str_split($final);
        foreach ($final as $key => $value) {
            echo $value;
            usleep(65000);
        }
    }

    public function setName($name){
        $this->name = $name;
    }

    public function setType($type){
        $this->type = $type;
    }
}

$foo = new C3PO('nomDuRobot');
$foo->initierProtocol();