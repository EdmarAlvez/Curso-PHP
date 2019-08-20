<?php

//date = d(dia) m(mês) Y(ano) H(horas) i(minutos)
$data = date("d/m/Y H:i");

//strtotime = 2015-02-02

$data_inicial = '2015-04-02';
$data_final = '2015-04-05';

$time_inicial = strtotime($data_inicial);
$time_final   = strtotime($data_final);

$diferente_time = $time_final - $time_inicial;


$diaSegundos = 24*60*60;
$diferenca_dias = $diferente_time / $diaSegundos;
echo $diferenca_dias;

?>