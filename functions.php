<?php

use \Abrace\Model\Paciente;
use \Abrace\Model\Colaboradores;

function corrigirNome($nome)
{
	$corrigido = utf8_encode($nome);

	return $corrigido;
}

function pegarEspecialidade($numero)
{
	switch ($numero) {
		case 1:
			return "Clínico Geral";
			break;
		
		case 2:
			return "Oftalmologista";
			break;

		case 3:
			return "Psicólogo";
			break;

		case 4:
			return "Nutricionista";
			break;

		case 5:
			return "Massoterapia";
			break;

		case 6:
			return "Acupuntura";
			break;

		case 7:
			return "Ginecologista";
			break;
	}
}

function casaDecimal($unidade)
{

	$resultado = str_replace(".", ",", $unidade);

	return $resultado;
}

function getDoctorName()
{

	$colab = Colaboradores::getFromSession();

	return $colab->getnome();
}

?>