<?php if(!class_exists('Rain\Tpl')){exit;}?><!doctype html>
<html lang="en">
    <head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Abrace IPVG</title>
		<link rel="icon" type="imagem/png" href="/res/img/abrace.png" height="16px" width="16px"/>
		<link href="/res/css/all.min.css" rel="stylesheet">
		<link href="/res/css/bootstrap.min.css" rel="stylesheet">
		<link href="/res/css/login.css" rel="stylesheet">
	</head>

    <body class="text-center">
    	<?php if( $error != '' ){ ?>
    	<div class="alert alert-danger alert-dismissible fade show" role="alert">
  			<p><?php echo htmlspecialchars( $error, ENT_COMPAT, 'UTF-8', FALSE ); ?></p>
  			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    		<span aria-hidden="true">&times;</span>
  			</button>
		</div>
		<?php } ?>
    	<form method="post" action="/login" class="form-signin">
  			<img class="mb-4" src="/res/img/abrace.png" alt="" width="180" height="180">
  			<h1 class="h3 mb-4 font-weight-normal">Login Abrace IPVG</h1>
  			<label for="inputLogin" class="sr-only"></label>
  			<input type="text" id="inputLogin" class="form-control mb-3" placeholder="Login" name="login" required autofocus>
  			<label for="inputPassword" class="sr-only">Senha</label>
  			<input type="password" id="inputPassword" class="form-control mb-3" placeholder="Senha" name="senha" required>
  			
  			<button class="btn btn-lg btn-outline-danger btn-block" type="submit">Entrar</button>
		</form>
	</body>
</html>