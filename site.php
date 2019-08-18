<?php

use \Slim\Slim;
use \Abrace\Page;
use \Abrace\Model\Paciente;
use \Abrace\Mailer;

$app = new Slim();

$app->get('/cadastro', function() {

	$page = new Page;
    
	$page->setTpl("cadastro", [
		"error"=>Paciente::getError(),
		"success"=>Paciente::getSuccess()
	]);

});

$app->post('/cadastro', function(){

	if (!isset($_POST['nome']) || $_POST['nome'] == ''){

		Paciente::setError("O nome é obrigatório!");
		header("Location: /cadastro");
		exit;
	}

	if (!isset($_POST['opcoes']) || $_POST['opcoes'] == ''){

		Paciente::setError("Escolha pelo menos uma especialidade!");
		header("Location: /cadastro");
		exit;
	}

/*
	if (!isset($_POST['email']) || $_POST['email'] == ''){

		$mail = new Mailer();

		$mail->send();
	}
*/
	$data = implode(" ,", $_POST['opcoes']);

	$data = $data . " ,";

	$_POST['opcoes'] = $data;

	$paciente = new Paciente();

	$paciente->setData($_POST);

	$paciente->save();

	Paciente::setSuccess("Cadastro realizado!");

	header("Location: /cadastro");
	exit;
});

$app->get('/pesquisa/:idpaciente/delete', function($idpaciente){

	$paciente = new Paciente();

	$paciente->get((int)$idpaciente);

	$paciente->delete();

	header("Location: /pesquisa");
	exit;
});

$app->get('/pesquisa/:idpaciente', function($idpaciente){

	$paciente = new Paciente();

	$paciente->get((int)$idpaciente);

	$check = $paciente->getCheckbox((int)$idpaciente);

	$page = new Page();

	$page->setTpl('editar', [
		'paciente'=>$paciente->getValues(),
		'check'=>$check,
		'error'=>Paciente::getError()
	]);
});

$app->post('/pesquisa/:idpaciente', function($idpaciente){

	if (!isset($_POST['nome']) || $_POST['nome'] == ''){

		Paciente::setError("O nome é obrigatório!");
		header("Location: /cadastro");
		exit;
	}

	if (!isset($_POST['opcoes']) || $_POST['opcoes'] == ''){

		Paciente::setError("Escolha pelo menos uma especialidade!");
		header("Location: /cadastro");
		exit;
	}

	$data = implode(" ,", $_POST['opcoes']);

	$data = $data . " ,";

	$_POST['opcoes'] = $data;

	$_POST['idpaciente'] = $idpaciente;

	$paciente = new Paciente();

	$paciente->get((int)$idpaciente);

	$paciente->setData($_POST);

	$paciente->update();

	Paciente::setSuccess("Dados alterados!");

	header("Location: /pesquisa");
	exit;
});

$app->get('/detalhes/:idpaciente', function($idpaciente){

	$page = new Page();

	$paciente = new Paciente();

	$paciente->get((int)$idpaciente);

	$consultas = $paciente->getConsultas((int)$idpaciente);

	$page->setTpl('detalhes', [
		'consultas'=>$consultas,
		'paciente'=>$paciente->getValues()
	]);
});

$app->get('/pesquisa', function(){

	$search = (isset($_GET['search'])) ? $_GET['search'] : "";
	$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;

	if ($search != ''){

		$pagination = Paciente::getPageSearch($search, $page);

	} else {

		$pagination = Paciente::getPage($page);
	}

	$pages = [];

	for ($x = 0; $x < $pagination['pages']; $x++ )
	{

		array_push($pages, [
			'href'=>'/pesquisa?'.http_build_query([
				'page'=>$x+1,
				'search'=>$search
			]),
			'text'=>$x+1
		]);
	}
    
	$page = new Page();

	$page->setTpl("pesquisa", array(
		"pacientes"=>$pagination['data'],
		'search'=>$search,
		'pages'=>$pages,
		'success'=>Paciente::getSuccess()
	));

});

?>