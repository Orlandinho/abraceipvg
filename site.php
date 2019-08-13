<?php

use \Slim\Slim;
use \Abrace\Page;
use \Abrace\Model\Paciente;
use \Abrace\Mailer;

$app = new Slim();

$app->get('/cadastro', function() {

	$page = new Page;
    
	$page->setTpl("cadastro", [
		"error"=>Paciente::getError()
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

	header("Location: /cadastro");
	exit;
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
		'pages'=>$pages
	));

});

?>