<?php

class Animal{
    private $especie;
    
    public function __construct ($especie){
        $this->especie = $especie;
    }

    public function getEspecie(){
        return $this->especie;
    }
    public function setEspecie($especie){
        $this->especie = $especie;
    }

    public function fazerSom(){
        echo "Barulho generico!<br>";
    }
}

class Cachorro extends Animal{
    public function __construct ($especie){
        parent::__construct($especie);
    }

    public function fazerSom(){
        echo "Auau!<br>";
    }
}

class Gato extends Animal{
    public function __construct ($especie){
        parent::__construct($especie);
    }

    public function fazerSom(){
        echo "Miauu!<br>";
    }
}

$Leao = new Animal('Leão');
$Leao->fazerSom();

$MeuCachorro = new Cachorro('lulu da pomerania');
$MeuCachorro->fazerSom();

$MeuGato = new Gato('Vira-Lata');
$MeuGato->fazerSom();
?>