<?php
//lembrando que sempre tem que abrir o xampp e executar-lo, apertar no admin e procurar a pasta do arquivo que estao escrevendo.
//dai ele abrir praticamente no site
class Carro{
    //Atributos do carro (exemplo: quais é as categorias do carro)
    private $marca;
    private $modelo;
    private $cor;
    private $ano;
    private $VelAtual = 0;
    //Contrutor da classe (aqui praticamente é a programação do que você quer ver do carro no site)
    public function __construct($marca, $modelo, $cor, $ano, ){
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->cor = $cor;
        $this->ano = $ano;
    }
    //metodos do Carro (como ele faz kkkk)
    public function acelerar($velocidade){
        $this->VelAtual += $velocidade;
        echo "Vruuum! Velocidade: ".$this->VelAtual." km/h<br>";
    }
    //Getters e Setters
    public function getMarca(){
        return $this->marca;
    }
    public function setMarca($marca){
        $this->marca = $marca;
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
        return $this->VelAtual;
    }
    public function setVelAtual($VelAtual){
        $this->VelAtual = $VelAtual;
    }
}

class CarroEsportivo extends Carro{
    private $aerofolio;
    public function __construct($marca,$modelo,$ano,$cor,$aerofolio){
        parent::__construct($marca,$modelo,$ano,$cor);
        $this->aerofolio = $aerofolio;
    }

    public function activarTurbo(){
        $this->acelerar(100);
        echo "psss ".$this->getVelAtual()." km/h";
    }
    public function getAerofolio(){
        return $this->aerofolio;
    }
    public function setAerofolio($aerofolio){
        $this->aerofolio = $aerofolio;
    }

}

$CarroJoao = new Carro("Volkswagen", "Polo", "Branca", 2021);
$CarroJoaquim = new Carro("Ferrari", "Diablo", "Vermelho", 2015);

echo "Marca: ".$CarroJoao->getMarca()."<br>";
echo "Modelo: ".$CarroJoao->getModelo()."<br>";
echo "Ano: ".$CarroJoao->getAno()."<br>";
echo "Cor: ".$CarroJoao->getCor()."<br>";
$CarroJoao->acelerar(50);
$CarroJoao->acelerar(30);
echo "Velocidade: ".$CarroJoao->getVelAtual()."<br>";
//-----------------------------------------------------------------
$CarroDanilo = new CarroEsportivo("Fiat", "Palio", "Amarelo Patrola", 2013, true);
echo "Marca: ".$CarroDanilo->getMarca()."<br>";
echo "Modelo: ".$CarroDanilo->getModelo()."<br>";
echo "Ano: ".$CarroDanilo->getAno()."<br>";
echo "Cor: ".$CarroDanilo->getCor()."<br>";
echo "Tem Aerofolio? ".$CarroDanilo->getAerofolio()."<br>";
$CarroDanilo->acelerar(100);
$CarroDanilo->activarTurbo();
echo "<br>Velocidade: ".$CarroDanilo->getVelAtual()."<br>";
?>