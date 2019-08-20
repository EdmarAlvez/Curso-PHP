<?php
//is_array
//in_array


/*$array = array('Edmar', 'Alves','Silva');
$retorno = in_array('Edmar',$array);

if($retorno){
	echo "True";
}else{
	echo 'False';
}*/


//array_keys

/*$produtos = array(10=>'Edmar' ,11=> 'Alves' );
$chaves_arrays = array_keys($produtos);

var_export($chaves_arrays); */

//sort
//asort
//count
//$frutas = array(0=>'Banana', 1=>'Amora', 2=>'Carambola');
//sort($frutas);
//asort($frutas);
//var_export($frutas);

//$itens_array = count($frutas);
//echo $itens_array;



//array_merge

/*$array1 = array('mac', 'linux');
$array2 = array('windows');
$array3 = array('ola');
$novo_array = array_merge($array1,$array2,$array3);
var_export($novo_array);*/

//explode
$string = '20/10/2020';
$retorno = explode('/', $string);
//var_export($retorno);

//implode
$nova_string = implode('-', $retorno);
echo $nova_string;
?>