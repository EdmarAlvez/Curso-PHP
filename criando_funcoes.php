<?php

//função sem retorno
function exibir_boas_vindas($nome){
	#code...

	echo " bem vindo ao curso de PHP, ".$nome;

}

//função com retorno
function calcular_soma($numero1,$numero2){
	return $numero1+$numero2;
}


//chamar função
echo calcular_soma(2,2);

?>