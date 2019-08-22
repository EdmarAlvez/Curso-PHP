<?php
#classe mãe
class Felino{
	#atributo
	var $mamifero = 'sim';
	#metodos
	function correr(){
		echo "Correr como felino";

	}
}

// classe filha ou subclasse
/**
 * 
 */
class Chita extends Felino{

	//Polimorfismo
	function correr(){
		echo 'Correr com Chita 100KHM/H';
	}
}

$chita = new Chita();


echo $chita -> mamifero.'<br>';
$chita->correr();




?>