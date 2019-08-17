<?php

use \Abrace\Model\Paciente;

function corrigirNome($nome)
{
	$corrigido = utf8_decode($nome);

	return $corrigido;
}

?>