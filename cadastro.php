<?php 



if (isset($_POST['nome']) && empty($_POST['nome'])) {
	# code...
	echo "Preencha o nome completo<br>";
}
if (isset($_POST['cpf']) && empty($_POST['cpf'])) {
	# code...
	echo "Preencha o CPF<br>";
}
if (isset($_POST['cpf']) && !is_numeric($_POST['cpf'])) {
	# code...
	echo "Apenas numeros no CPF<br>";
}


 ?>

<form method="post" action="">
	<label>
		Nome completo*:
	<input type="text" name="nome">
	</label>

	<label>
		CPF*:
		<input type="text" name="cpf">
	</label>

	<input type="submit" name="cadastrar">
	
</form>