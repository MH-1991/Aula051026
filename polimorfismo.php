<?php

class Animal{
    private especie:
    
    public function __construct ($especie){
        $this->especie = $especie;
    }

    public function getEspecie(){
        return $this->especie = $especie;
    }
    public function setEspecie($especie){
        $this->especie = $especie;
    }

    public function fazerSom(){
        echo "barulho generico!<br>";
    }
}
?>