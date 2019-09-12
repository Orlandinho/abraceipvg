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
				<span class="text-danger ml-2">** </span><small class="text-muted">Digite o cep e clique no botão para pesquisar o endereço</small>
			</div>
		</div>
		<form method="post" action="/cadastro">

		  	<div class="form-group">
		    	<label for="inputName">Nome Completo</label><span class="text-danger"> *</span>
		    	<input type="text" class="form-control" name="nome" id="inputName" autofocus="yes">
		  	</div>

		  	<div class="form-group">
		    	<label for="inputAddress">Endereço</label>
		    	<input type="text" class="form-control" name="endereco" id="inputAddress">
		  	</div>

		  	<div class="form-row">
		    	<div class="form-group col-md-4">
		      		<label for="inputBairro">Bairro</label>
		      		<input type="text" class="form-control" name="bairro" id="inputBairro">
		    	</div>

		    	<div class="form-group col-md-4">
		      		<label for="inputCity">Cidade</label>
		      		<input type="text" class="form-control" name="cidade" id="inputCity">
		    	</div>
		    	
		    	<div class="form-group col-md-4">
		      		<label for="inputZip">Cep</label><span class="text-danger"> **</span>
		      		<div class="input-group">
		      			<input type="text" class="form-control mr-2" name="cep" id="inputZip" pattern="[0-9]{5}-[0-9]{3}" title="Padrão: 00000-000" placeholder="01234-000">
		      			<span class="input-group-btn">
		      				<button type="button" class="btn btn-outline-danger" id="buttonZip">Pesquisar</button>
		      			</span>
		      		</div>
		    	</div>

		    	
		  	</div>

		  	<div class="form-row">
		    	<div class="form-group col-md-6">
		      		<label for="inputEmail4">Email</label>
		      		<input type="email" class="form-control" id="inputEmail4" name="email">
		    	</div>
		    	<div class="form-group col-md-3">
		      		<label for="inputTel">Telefone</label>
		      		<input type="text" class="form-control" id="inputTel" name="tel" pattern="[0-9]{4}-[0-9]{4}" title="Padrão: 0000-0000" placeholder="1234-5678">
		    	</div>

		    	<div class="form-group col-md-3">
		      		<label for="inputCel">Celular</label>
		      		<input type="text" class="form-control" id="inputCel" name="cel" pattern="[0-9]{5}-[0-9]{4}" title="Padrão: 00000-0000" placeholder="91234-5678">
		    	</div>
		  	</div>

		  	<div class="form-row ml-1 my-2">
		    	<div class="custom-control custom-checkbox">
					<input type="checkbox" class="custom-control-input" name="permissao" id="permissao" value="1">
					<label class="custom-control-label" for="permissao">Aceita receber informações sobre os próximos eventos realizados na Igreja Presbiteriana de Vila Gustavo</label>
				</div>

				<div class="custom-control custom-checkbox ml-4">
					<input type="checkbox" class="custom-control-input" name="permissao" id="membro" value="1">
					<label class="custom-control-label" for="membro">Membro da Igreja</label>
				</div>
			</div>

		  	<label class="my-3"><b>Encaminhamento</b></label><span class="text-danger"> *</span>
		  	<div class="border col-sm-5">
		  		<div class="row my-2">
			    	<div class="custom-control custom-checkbox ml-4 mr-4">
						<input type="checkbox" class="custom-control-input" name="opcoes[]" id="clinico" value="1">
						<label class="custom-control-label" for="clinico">Clínico Geral</label>
					</div>

					<div class="custom-control custom-checkbox mr-4">
						<input type="checkbox" class="custom-control-input" name="opcoes[]" id="oftalmo" value="2">
						<label class="custom-control-label" for="oftalmo">Oftalmologista</label>
					</div>

					<div class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input" name="opcoes[]" id="nutricionista" value="3">
						<label class="custom-control-label" for="nutricionista">Nutricionista</label>
					</div>
				</div>

				<div class="row my-2">
					<div class="custom-control custom-checkbox ml-4 mr-4">
						<input type="checkbox" class="custom-control-input" name="opcoes[]" id="massoterapia" value="4">
						<label class="custom-control-label" for="massoterapia">Massoterapia</label>
					</div>

					<div class="custom-control custom-checkbox mr-4">
						<input type="checkbox" class="custom-control-input" name="opcoes[]" id="acupuntura" value="5">
						<label class="custom-control-label" for="acupuntura">Acupuntura</label>
					</div>

					<div class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input" name="opcoes[]" id="ginecologista" value="6">
						<label class="custom-control-label" for="ginecologista">Ginecologista</label>
					</div>
				</div>

				<div class="row my-2 justify-content-center">
					<div class="custom-control custom-checkbox mr-4">
						<input type="checkbox" class="custom-control-input" name="opcoes[]" id="paglicemia" value="7">
						<label class="custom-control-label" for="paglicemia">P.A. & Glicemia</label>
					</div>

					<div class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input" name="opcoes[]" id="triagem" value="8">
						<label class="custom-control-label" for="triagem">Triagem</label>
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