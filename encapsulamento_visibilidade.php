<?php 

class Veiculo{

	/*

	public
	private
	protected

	*/

	private $placa;
	private $cor;
	protected $tipo= 'SPORT';

	public function setPlaca($parametro_placa){

		//validação da placa

	$this->placa = $parametro_placa;

	}

	public function getPlaca(){

		return $this->placa;
	}

}

/**
 * 
 */
class Carro extends Veiculo{
	
	public function exibirTipo(){
		# code...
		echo $this->tipo;
	}
}

$veiculo = new Veiculo();
$veiculo->setplaca('EDM123<br>');
echo $veiculo->getplaca();


$carro = new Carro();
$carro->exibirTipo();

/*$veiculo = new Veiculo();
$veiculo->cor = 'Preto<br>';
echo $veiculo->cor;

$veiculo = new Veiculo();
$veiculo->tipo = 'SPORT<br>';
echo $veiculo->tipo;*/



 ?>