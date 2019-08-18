<?php

use \Abrace\Model\Paciente;

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
			return "Dentista";
			break;

		case 3:
			return "Psicólogo";
			break;
	}
}

?>