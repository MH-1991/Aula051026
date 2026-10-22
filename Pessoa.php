<?php

class Pessoa{
    private $nome;
    private $idade;

    public function __construct ($nome, $idade,){
        $this->nome = $nome;
        $this->idade = $idade;
    }

public function getNome(){
    return $this->nome;
    }
public function setNome($nome){
    $this->nome = $nome;
    }
public function getIdade(){
    return $this->idade;
    }
public function setIdade($idade){
    $this->idade = $idade;
    }
}

$PessoaDaniela = new Pessoa("Daniela Amparo", 24);
$PessoaMichael = new Pessoa("Michael Antonio", 34);

echo "Nome: ".$PessoaDaniela->getNome()."<br>";
echo "Idade: ".$PessoaDaniela->getIdade()."<br><br>";
echo "Nome: ".$PessoaMichael->getNome()."<br>";
echo "Idade; ".$PessoaMichael->getIdade()."<br>";


?>