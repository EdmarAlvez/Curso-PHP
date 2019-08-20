<?php

//strtolower todas minusculas
//srttoupper todas maiusculas
//ucfirst Primera letra Maiuscula
//strlen Ver o tamanho da string


//$texto = "curso completo de php";

//echo strtolower($texto);
//echo strtoupper($texto);
//echo ucfirst($texto);
//echo strlen($texto);
//str_replace
//substr

/*$cpf = isset($_POST['cpf']) ? ($_POST['cpf']) :'';
$total_string_cpf = strlen($cpf); 

if($total_string_cpf !=11 && $cpf != ''){
	echo "CPF invalido<br>";
}if($total_string_cpf == 11 && $cpf != ''){
	echo "Cadastrado<br>";
}*/

/*$texto = "12.40.54654.44";
echo str_replace('.', ',', $texto);
echo "<br><br>";*/

$texto = "Edmar Alves da Silva filho";
$noticia = substr($texto, 0,10);
echo $noticia." ....";


?>

<form method="post" action="">
	<label>CPF
	<input type="texto" name="cpf">
	</label>
	<input type="submit" value="cadastrar"name="">
</form> 