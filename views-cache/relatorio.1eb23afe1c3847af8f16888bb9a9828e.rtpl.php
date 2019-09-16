<?php if(!class_exists('Rain\Tpl')){exit;}?><body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom border-danger fixed-top">
		<div class="container">
			<a class="navbar-brand" href="/cadastro">
    			<img src="/res/img/abrace.png" width="40" height="40" class="d-inline-block align-top" alt="Abrace Logo">
  			</a>
	    	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggle" aria-controls="navbarToggle" aria-expanded="false" aria-label="Toggle navigation">
	    		<span class="navbar-toggler-icon"></span>
	  		</button>
	  		<div class="collapse navbar-collapse" id="navbarToggle">
	    		<div class="navbar-nav">
	      			<a class="nav-item nav-link" href="/cadastro">Cadastro</a>
	      			<a class="nav-item nav-link" href="/pesquisa">Pesquisa</a>
	      			<a class="nav-item nav-link active" href="/relatorio">Relatório</a>
	    		</div>
	    		<div class="ml-4">
	    			<a href="/logout" class="btn btn-sm btn-outline-danger">Sair</a>
	    		</div>
	  		</div>
  		</div>
	</nav>
	<div class="espaco"></div>
<div class="wrapper">
	<div class="container">

		<div class="row mb-5">
			<h1 class="text-center">Dados Totais</h1>
		</div>

		<div class="row mb-3">
			<h4>Total Pacientes</h4>
		</div>

		<div class="border-bottom border-danger">
			<div class="row">
				<label class="col-md-3"><b>Total de Pacientes:</b></label>
				<p class="col-md-2"><?php echo htmlspecialchars( $relatorio["total_pacientes"], ENT_COMPAT, 'UTF-8', FALSE ); ?></p>

				<label class="col-md-3"><b>Total de Consultas:</b></label>
				<p class="col-md-2"><?php echo htmlspecialchars( $relatorio["total_consultas"], ENT_COMPAT, 'UTF-8', FALSE ); ?></p>
			</div>

			<div class="row">
				<label class="col-md-3"><b>Membros da Igreja:</b></label>
				<p class="col-md-2"><?php echo htmlspecialchars( $relatorio["total_membros"], ENT_COMPAT, 'UTF-8', FALSE ); ?></p>

				<label class="col-md-3"><b>Não Membros:</b></label>
				<p class="col-md-2"><?php echo htmlspecialchars( $relatorio["total_nao_membros"], ENT_COMPAT, 'UTF-8', FALSE ); ?></p>
			</div>
		</div>

		<div class="row mt-5 mb-3">
			<h4>Total Consultas</h4>
		</div>
		<div class="row">
			<label class="col-md-3"><b>Consultas com o Clínico:</b></label>
			<p class="col-md-2"><?php echo htmlspecialchars( $relatorio["total_clinico"], ENT_COMPAT, 'UTF-8', FALSE ); ?></p>

			<label class="col-md-3"><b>Consultas com o Oftalmo:</b></label>
			<p class="col-md-2"><?php echo htmlspecialchars( $relatorio["total_oftalmo"], ENT_COMPAT, 'UTF-8', FALSE ); ?></p>
		</div>

		<div class="row">
			<label class="col-md-3"><b>Consultas com a Ginecologista:</b></label>
			<p class="col-md-2"><?php echo htmlspecialchars( $relatorio["total_ginecologista"], ENT_COMPAT, 'UTF-8', FALSE ); ?></p>

			<label class="col-md-3"><b>Consultas com o Nutricionista:</b></label>
			<p class="col-md-2"><?php echo htmlspecialchars( $relatorio["total_nutricionista"], ENT_COMPAT, 'UTF-8', FALSE ); ?></p>
		</div>

		<div class="row">
			<label class="col-md-3"><b>Consultas com o Massoterapista:</b></label>
			<p class="col-md-2"><?php echo htmlspecialchars( $relatorio["total_massoterapia"], ENT_COMPAT, 'UTF-8', FALSE ); ?></p>

			<label class="col-md-3"><b>Consultas com o Acupuntor:</b></label>
			<p class="col-md-2"><?php echo htmlspecialchars( $relatorio["total_acupuntura"], ENT_COMPAT, 'UTF-8', FALSE ); ?></p>
		</div>

		<div class="row">
			<label class="col-md-3"><b>Pressão e Glicemia:</b></label>
			<p class="col-md-2"><?php echo htmlspecialchars( $relatorio["total_paglicemia"], ENT_COMPAT, 'UTF-8', FALSE ); ?></p>

			<label class="col-md-3"><b>Triagem:</b></label>
			<p class="col-md-2"><?php echo htmlspecialchars( $relatorio["total_triagem"], ENT_COMPAT, 'UTF-8', FALSE ); ?></p>
		</div>
	</div>
</div>