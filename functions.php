<?php

use \Abrace\Model\Paciente;

function corrigirNome($cidade)
{
	$corrigido = utf8_encode($cidade);

	return $corrigido;
}

?>