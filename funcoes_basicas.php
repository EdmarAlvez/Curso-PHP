<?php

//iste()

/*$valor = 'edmar';


if(isset($valor)){
	echo "Variavel iniciada";
}
*/

//empty
//true ->'', 0 , '0', false, null, array()
//false ->

$valor = '213';

/*if (empty($valor)) {

	# code...
	echo "Variavel Vazia";
}else{
	echo "VARIAVEL ...";
}*/


//is_numeric()

if(is_numeric($valor)){
	echo "VALOR NUMERO";
}else{
	echo "texto";
}

?>