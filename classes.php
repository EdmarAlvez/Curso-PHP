<?php

class Produto{

	//Atributos
	var $nome;
	var $preco;

	//métodos
	function setNome($nome_definido){
		$this->nome = $nome_definido;
	}

	function getNome(){
		return $this->nome;
	}
	function setpreco($preco_definido){
		$this->preco = $preco_definido;
	}
	function getPreco(){
		return $this->preco;
	}
}

$Produto = new Produto();
$preco = new Produto();


//$pessoa = new Pessoa();

$Produto->setNome('Maça<br>');
echo $Produto -> getNome();
$preco->setpreco('1,30');
echo $preco-> getPreco();

?>
