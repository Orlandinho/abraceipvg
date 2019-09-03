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
	      			<a class="nav-item nav-link active" href="/cadastro">Cadastro</a>
	      			<a class="nav-item nav-link" href="/pesquisa">Pesquisa</a>
	      			<a class="nav-item nav-link" href="/relatorio">Relatório</a>
	    		</div>
	    		<div class="ml-4">
	    			<a href="/logout" class="btn btn-sm btn-outline-danger">Sair</a>
	    		</div>
	  		</div>
  		</div>
	</nav>
	<div class="espaco"></div>
<div class="cadastro wrapper">
	<div class="container">
		<p><h3>Dados Pessoais</h3></p>
		<?php if( $error != '' ){ ?>
    	<div class="alert alert-danger alert-dismissible fade show" role="alert">
  			<p><?php echo htmlspecialchars( $error, ENT_COMPAT, 'UTF-8', FALSE ); ?></p>
  			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    		<span aria-hidden="true">&times;</span>
  			</button>
		</div>
		<?php } ?>

		<?php if( $success != '' ){ ?>
    	<div class="alert alert-success alert-dismissible fade show" role="alert">
  			<p><?php echo htmlspecialchars( $success, ENT_COMPAT, 'UTF-8', FALSE ); ?></p>
  			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    		<span aria-hidden="true">&times;</span>
  			</button>
		</div>
		<?php } ?>

		<div class="clearfix">
			<div class="float-right">
				<span class="text-danger">* </span><small class="text-muted">Campo obrigatório</small>
				<span class="text-danger ml-2">** </span><small class="text-muted">Digite o cep e troque o campo para pesquisar o endereço</small>
			</div>
		</div>
		<form method="post" action="/cadastro">

		  	<div class="form-group">
		    	<label for="inputAddress">Nome Completo</label><span class="text-danger"> *</span>
		    	<input type="text" class="form-control" name="nome" id="inputAddress" autofocus="yes">
		  	</div>

		  	<div class="form-group">
		    	<label for="inputAddress2">Endereço</label>
		    	<input type="text" class="form-control" name="endereco" id="inputAddress2">
		  	</div>

		  	<div class="form-row">
		    	<div class="form-group col-md-6">
		      		<label for="inputCity">Cidade</label>
		      		<input type="text" class="form-control" name="cidade" id="inputCity">
		    	</div>

		    	<div class="form-group col-md-4">
		      		<label for="inputBairro">Bairro</label>
		      		<input type="text" class="form-control" name="bairro" id="inputBairro">
		    	</div>

		    	<div class="form-group col-md-2">
		      		<label for="inputZip">Cep</label><span class="text-danger"> **</span>
		      		<input type="text" class="form-control" name="cep" id="inputZip" placeholder="01234000">
		    	</div>
		  	</div>

		  	<div class="form-row">
		    	<div class="form-group col-md-6">
		      		<label for="inputEmail4">Email</label>
		      		<input type="email" class="form-control" id="inputEmail4" name="email">
		    	</div>
		    	<div class="form-group col-md-3">
		      		<label for="inputTel">Telefone</label>
		      		<input type="text" class="form-control" id="inputTel" name="tel" placeholder="12345678">
		    	</div>

		    	<div class="form-group col-md-3">
		      		<label for="inputCel">Celular</label>
		      		<input type="text" class="form-control" id="inputCel" name="cel" placeholder="912345678">
		    	</div>
		  	</div>

		  	<div class="my-3">
		  		<h3>Dados da Triagem</h3>
		  		<small class="form-text text-muted">Apenas números. Use decimal quando necessário, exceto P.A. Ex: 120x80 (12 por 8)</small>
			</div>

  			<div class="form-group row">
	      		<label class="ml-3" for="idade">Idade</label>
	      		<div class="col-md-1">
	      			<input type="text" class="form-control form-control-sm" id="idade" name="idade">
	      		</div>

	      		<label class="ml-3" for="altura">Altura</label>
	      		<div class="col-md-1">
	      			<input type="text" class="form-control form-control-sm" id="altura" name="altura">
	      		</div>

	      		<label class="ml-3" for="peso">Peso</label>
	      		<div class="col-md-1">
	      			<input type="text" class="form-control form-control-sm" id="peso" name="peso">
	      		</div>

	      		<label class="ml-3" for="temperatura">Temperatura</label>
	      		<div class="col-md-1">
	      			<input type="text" class="form-control form-control-sm" id="temperatura" name="temperatura">
	      		</div>
	      	</div>

	      	<div class="form-group row">
	      		<label class="ml-3" for="pa">P.A.</label>
	      		<div class="col-md-1">
	      			<input type="text" class="form-control form-control-sm" id="pa" name="pa">
	      		</div>

	      		<label class="ml-3" for="glicemia">Glicemia</label>
	      		<div class="col-md-1">
	      			<input type="text" class="form-control form-control-sm" id="glicemia" name="glicemia">
	      		</div>

	      		<label class="ml-3" for="respiracao">Respiração</label>
	      		<div class="col-md-1">
	      			<input type="text" class="form-control form-control-sm" id="respiracao" name="respiracao">
	      		</div>

	      		<label class="ml-3" for="pulso">Pulso</label>
	      		<div class="col-md-1">
	      			<input type="text" class="form-control form-control-sm" id="pulso" name="pulso">
	      		</div>
	      	</div>

	      	<div class="row col-md-7">
				<textarea class="form-control" rows="2" name="obs" placeholder="Observações"></textarea>
			</div>

		  	<label class="my-3"><b>Encaminhamento</b></label><span class="text-danger"> *</span>
		  	<div class="border col-sm-5">
		  		<div class="row my-2 justify-content-center">
			    	<div class="custom-control custom-checkbox mr-3">
						<input type="checkbox" class="custom-control-input" name="opcoes[]" id="clinico" value="1">
						<label class="custom-control-label" for="clinico">Clínico Geral</label>
					</div>

					<div class="custom-control custom-checkbox mr-3">
						<input type="checkbox" class="custom-control-input" name="opcoes[]" id="oftalmo" value="2">
						<label class="custom-control-label" for="oftalmo">Oftalmologista</label>
					</div>

					<div class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input" name="opcoes[]" id="nutricionista" value="3">
						<label class="custom-control-label" for="nutricionista">Nutricionista</label>
					</div>
				</div>

				<div class="row my-2 justify-content-center">
					<div class="custom-control custom-checkbox mr-3">
						<input type="checkbox" class="custom-control-input" name="opcoes[]" id="massoterapia" value="4">
						<label class="custom-control-label" for="massoterapia">Massoterapia</label>
					</div>

					<div class="custom-control custom-checkbox mr-3">
						<input type="checkbox" class="custom-control-input" name="opcoes[]" id="acupuntura" value="5">
						<label class="custom-control-label" for="acupuntura">Acupuntura</label>
					</div>

					<div class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input" name="opcoes[]" id="ginecologista" value="6">
						<label class="custom-control-label" for="ginecologista">Ginecologista</label>
					</div>
				</div>
			</div>

			<div class="clearfix">
				<button type="submit" class="btn btn-outline-danger my-4 float-right">Cadastrar</button>
				<button type="reset" class="btn btn-outline-danger my-4 mr-2 float-right">Limpar</button>
			</div>
		</form>
	</div>
</div>