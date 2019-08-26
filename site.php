<?php

use \Slim\Slim;
use \Abrace\Page;
use \Abrace\Model\Paciente;
use \Abrace\Mailer;
use \Abrace\Model\Colaboradores;

$app = new Slim();

$app->get('/login', function(){

	$page = new Page([
		'header'=>false,
		'footer'=>false
	]);

	$page->setTpl('login', [
		'error'=>''
	]);
});

$app->post('/login', function(){

	$results = Colaboradores::login($_POST['login'], $_POST['senha']);

	if ($results->getespecialidade() == null){

		header("Location: /cadastro");
		exit;

	} else {

		$especialidade = $results->getespecialidade();

		header("Location: /paciente/$especialidade");
		exit;
	}
	
});

$app->get('/logout', function(){

	Colaboradores::logout();

	header("Location: /login");
	exit;
});

$app->get('/cadastro', function() {

	Colaboradores::verifyLogin();

	$page = new Page;
    
	$page->setTpl("cadastro", [
		"error"=>Paciente::getError(),
		"success"=>Paciente::getSuccess()
	]);

});

$app->post('/cadastro', function(){

	Colaboradores::verifyLogin();

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

	Colaboradores::verifyLogin();

	$paciente = new Paciente();

	$paciente->get((int)$idpaciente);

	$paciente->delete();

	header("Location: /pesquisa");
	exit;
});

$app->get('/pesquisa/:idpaciente', function($idpaciente){

	Colaboradores::verifyLogin();

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

	Colaboradores::verifyLogin();

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

	Colaboradores::verifyLogin();

	$page = new Page();

	$paciente = new Paciente();

	$paciente->get((int)$idpaciente);

	$consultas = $paciente->getConsultas((int)$idpaciente);

	$page->setTpl('detalhes', [
		'consultas'=>$consultas,
		'paciente'=>$paciente->getValues()
	]);
});

$app->get('/relatorio', function(){

	Colaboradores::verifyLogin();

	$relatorio = Paciente::getRelatorio();

	$page = new Page();

	$page->setTpl('relatorio', [
		"relatorio"=>$relatorio
	]);
});

$app->get('/pesquisa', function(){

	Colaboradores::verifyLogin();

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