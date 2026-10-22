<?php
class Calculadora{
    private $adicao;
    private $subtracao;
    private $multiplicacao;
    private $divicao;
    private $numero = 0;

    public function __construct($adicao,$subtracao,$multiplicacao,$divicao){
        $this->adicao = $adicao;
        $this->subtracao = $subtracao;
        $this->multiplicacao = $multiplicacao;
        $this->divicao = $divicao;
    }
    public function somar($soma){
        $this->numero += $soma;
        echo "Soma".$this->numero."<br>";
    }
    
}
?>