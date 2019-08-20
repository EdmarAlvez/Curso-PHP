<?php

function valida_login($login, $senha){

	//validar direto em um banco de dados
	$login_bd = 'Edmar.Alves';
	$senha_bd = '123';

	if ( $login == $login_bd && $senha == $senha_bd ) {
		# code...

		return true;

	}
	return false;

}




?>