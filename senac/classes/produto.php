<?php

class Produto {
    public $valor = 10;
    public $nome = 'Pão';

    public function __construct($n, $v){
        $this -> nome = $n;
        $this -> valor = $v;
    }

    public function pegarValor(){
        return $this -> valor;
    }

    public function colocarEmpromocao(){
        $this -> valor = $this -> valor * 0.9;
    }
}

$pao = new Produto('Pão', 10);
$leite = new Produto('Leite', 15);



?>