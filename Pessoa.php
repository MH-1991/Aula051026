<?php

class Pessoa{
    private $nome;
    private $idade;
//chamar a função nome e idade
public function __construct ($nome, $idade,){
    $this->nome =$nome;
    $this->idade =$idade;
}
//tentar ver se funciona o chamado
public function getNome(){
    return $this->nome;
}
public function setNome(){
    $this->nome = $nome;
}
public function getIdade(){
    return $this->idade;
}
public function setIdade(){
    $this->idade = $idade;
}

}

$PessoaDaniela = new Pessoa("Daniela Amparo," 24);
$PessoaMichael = new Pessoa("Michael Antonio,"34);

echo "Nome: ".$PessoaDaniela->getNome()."<br>";
echo "Idade: ".$PessoaDaniela->getIdade()."<br><br>";
echo "Nome: ".$PessoaMichael->getNome()."<br>";
echo "Idade; ".$PessoaMichael->getIdade()."<br>";


?>