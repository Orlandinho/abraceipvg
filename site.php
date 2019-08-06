<?php

use \Slim\Slim;
use \Abrace\Page;

$app = new Slim();

$app->get('/', function() {

	$page = new Page;
    
	$page->setTpl("cadastro");

});

$app->post('/cadastro', function(){

	
});

?>