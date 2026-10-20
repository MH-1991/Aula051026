<?php

class Carro{
    //Atributos do carro
    private $marca;
    private $modelo;
    private $cor;
    private $ano;
    private $VelAtual = 0;
    //Contrutor da classe
    public function __construct($marca, $modelo, $cor, $ano, ){
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->cor = $cor;
        $this->ano = $ano;
    }

    //metodos do Carro
    public function acelerar($velocidade){
        $this->VelAtual += $velocidade;
        echo "Vruuum! Velocidade: ".$this->VelAtual." km/h<br>";
    }
    //Getters e Setters
    public function getMarca(){
        return $this->marca;
    }
    public function setMarca($marca){
        $this->marca = $marca
    }
    public function getModelo(){
        return $this->modelo;
    }
    public function setModelo($modelo){
        $this->modelo = $modelo;
    }
    public function getCor(){
        return $this->cor;
    }
    public function setCor($cor){
        $this->cor = $cor;
    }
    public function getAno(){
        return $this->ano;
    }
    public function setAno($ano){
        $this->ano = $ano;
    }
    public function getVelAtual(){
        return $this->ano;
    }
    public function setVelAtual($ano){
        $this->ano = $ano;
}

$CarroJoao = new Carro("Volkswagen", "Polo", "Branca", 2021);
$CarroJoaquim = new Carro("Ferrari", "Diablo", "Vermelho", 2015);

echo "Marca: ".$CarroJoao->getMarca()."<br>;
echo "Modelo: ".$CarroJoao->getModelo()."<br>;
echo "Cor: ".$CarroJoao->getCor()."<br>;
echo "Ano: ".$CarroJoao->getAno()."<br>;
$CarroJoao->acelerar(50);
$CarroJoao->acelerar(30);
echo "Velocidade: ".$CarroJoao->getVelAtual()."<br>;