<?php if(!class_exists('Rain\Tpl')){exit;}?><body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom border-danger fixed-top">
		<div class="container">
			<a class="navbar-brand" href="/"> Imagem Abrace <!-- <img src="img/abrace.png" width="25px" alt="Abrace IPVG">Logo do Abrace --> </a>
	    	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggle" aria-controls="navbarToggle" aria-expanded="false" aria-label="Toggle navigation">
	    		<span class="navbar-toggler-icon"></span>
	  		</button>
	  		<div class="collapse navbar-collapse" id="navbarToggle">
	    		<div class="navbar-nav">
	      			<a class="nav-item nav-link" href="/cadastro">Cadastro</a>
	      			<a class="nav-item nav-link active" href="/pesquisa">Pesquisa</a>
	      			<a class="nav-item nav-link" href="/relatorio">Relatório</a>
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
		<p><h3>Atualizar Cadastro</h3></p>
		<?php if( $error != '' ){ ?>
    	<div class="alert alert-danger alert-dismissible fade show" role="alert">
  			<p><?php echo htmlspecialchars( $error, ENT_COMPAT, 'UTF-8', FALSE ); ?></p>
  			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    		<span aria-hidden="true">&times;</span>
  			</button>
		</div>
		<?php } ?>
		<div class="clearfix">
			<div class="float-right">
				<span class="text-danger">* </span><small>Campo obrigatório</small>
			</div>
		</div>
		<form method="post" action="/pesquisa/<?php echo htmlspecialchars( $paciente["idpaciente"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">

		  	<div class="form-group">
		    	<label for="inputAddress">Nome Completo</label><span class="text-danger"> *</span>
		    	<input type="text" class="form-control" value="<?php echo corrigirNome($paciente["nome"]); ?>" name="nome" id="inputAddress" autofocus="yes">
		  	</div>

		  	<div class="form-group">
		    	<label for="inputAddress2">Endereço</label>
		    	<input type="text" class="form-control" value="<?php echo corrigirNome($paciente["endereco"]); ?>" name="endereco" id="inputAddress2">
		  	</div>

		  	<div class="form-row">
		    	<div class="form-group col-md-6">
		      		<label for="inputCity">Cidade</label>
		      		<input type="text" class="form-control" value="<?php echo corrigirNome($paciente["cidade"]); ?>" name="cidade" id="inputCity">
		    	</div>

		    	<div class="form-group col-md-4">
		      		<label for="inputBairro">Bairro</label>
		      		<input type="text" class="form-control" value="<?php echo corrigirNome($paciente["bairro"]); ?>" name="bairro" id="inputBairro">
		    	</div>

		    	<div class="form-group col-md-2">
		      		<label for="inputZip">Cep</label>
		      		<input type="text" class="form-control" value="<?php echo htmlspecialchars( $paciente["cep"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" name="cep" id="inputZip" placeholder="01234-000">
		    	</div>
		  	</div>

		  	<div class="form-row">
		    	<div class="form-group col-md-6">
		      		<label for="inputEmail">Email</label>
		      		<input type="email" class="form-control" value="<?php echo htmlspecialchars( $paciente["email"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" id="inputEmail" name="email">
		    	</div>

		    	<div class="form-group col-md-3">
		      		<label for="inputTel">Telefone</label>
		      		<input type="text" class="form-control" value="<?php echo htmlspecialchars( $paciente["tel"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" id="inputTel" name="tel" placeholder="1234-5678">
		    	</div>

		    	<div class="form-group col-md-3">
		      		<label for="inputCel">Celular</label>
		      		<input type="text" class="form-control" value="<?php echo htmlspecialchars( $paciente["cel"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" id="inputCel" name="cel" placeholder="91234-5678">
		    	</div>
		  	</div>

		  	<div class="form-row ml-1 my-2">
		    	<div class="custom-control custom-checkbox">
					<input type="checkbox" class="custom-control-input" <?php if( $paciente["permissao"] == 1 ){ ?> checked <?php } ?> name="permissao" id="permissao" value="1">
					<label class="custom-control-label" for="permissao">Aceita receber informações sobre os próximos eventos realizados na Igreja Presbiteriana de Vila Gustavo</label>
				</div>

				<div class="custom-control custom-checkbox ml-4">
					<input type="checkbox" class="custom-control-input" <?php if( $paciente["membro"] == 1 ){ ?> checked <?php } ?> name="membro" id="membro" value="1">
					<label class="custom-control-label" for="membro">Membro da Igreja</label>
				</div>
			</div>

		  	<div class="my-3">
		  		<p><h3>Incluir Dados de Triagem</h3></p>
			</div>

  			<div class="form-group row">
	      		<label class="ml-3" for="idade">Idade</label>
	      		<div class="col-md-1">
	      			<input type="text" class="form-control form-control-sm" value="<?php echo htmlspecialchars( $paciente["idade"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" id="idade" name="idade">
	      		</div>

	      		<label class="ml-3" for="altura">Altura</label>
	      		<div class="col-md-1">
	      			<input type="text" class="form-control form-control-sm" value="<?php echo casaDecimal($paciente["altura"]); ?>" id="altura" name="altura">
	      		</div>

	      		<label class="ml-3" for="peso">Peso</label>
	      		<div class="col-md-1">
	      			<input type="text" class="form-control form-control-sm" value="<?php echo casaDecimal($paciente["peso"]); ?>" id="peso" name="peso">
	      		</div>

	      		<label class="ml-3" for="temperatura">Temperatura</label>
	      		<div class="col-md-1">
	      			<input type="text" class="form-control form-control-sm" value="<?php echo casaDecimal($paciente["temperatura"]); ?>" id="temperatura" name="temperatura">
	      		</div>
	      	</div>

	      	<div class="form-group row">
	      		<label class="ml-3" for="pa">P.A.</label>
	      		<div class="col-md-1">
	      			<input type="text" class="form-control form-control-sm" value="<?php echo htmlspecialchars( $paciente["pa"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" id="pa" name="pa">
	      		</div>

	      		<label class="ml-3" for="glicemia">Glicemia</label>
	      		<div class="col-md-1">
	      			<input type="text" class="form-control form-control-sm" value="<?php echo htmlspecialchars( $paciente["glicemia"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" id="glicemia" name="glicemia">
	      		</div>

	      		<label class="ml-3" for="respiracao">Respiração</label>
	      		<div class="col-md-1">
	      			<input type="text" class="form-control form-control-sm" value="<?php echo htmlspecialchars( $paciente["respiracao"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" id="respiracao" name="respiracao">
	      		</div>

	      		<label class="ml-3" for="pulso">Pulso</label>
	      		<div class="col-md-1">
	      			<input type="text" class="form-control form-control-sm" value="<?php echo htmlspecialchars( $paciente["pulso"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" id="pulso" name="pulso">
	      		</div>
	      	</div>

	      	<div class="row col-md-7">
				<textarea class="form-control" rows="2" name="obs" placeholder="Observações"><?php echo corrigirNome($paciente["obs"]); ?></textarea>
			</div>

		  	<label class="my-3"><b>Encaminhamento</b></label><span class="text-danger"> *</span>
		  	<div class="border col-sm-5">
		  		<div class="row my-2">
			    	<div class="custom-control custom-checkbox ml-4 mr-4">
						<input type="checkbox" class="custom-control-input" <?php if( $check["clinico"] == 1 ){ ?> checked <?php } ?> name="opcoes[]" id="clinico" value="1">
						<label class="custom-control-label" for="clinico">Clínico Geral</label>
					</div>

					<div class="custom-control custom-checkbox mr-4">
						<input type="checkbox" class="custom-control-input" <?php if( $check["oftalmo"] == 2 ){ ?> checked <?php } ?> name="opcoes[]" id="oftalmo" value="2">
						<label class="custom-control-label" for="oftalmo">Oftalmologista</label>
					</div>

					<div class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input" <?php if( $check["nutricionista"] == 3 ){ ?> checked <?php } ?> name="opcoes[]" id="nutricionista" value="3">
						<label class="custom-control-label" for="nutricionista">Nutricionista</label>
					</div>
				</div>

				<div class="row my-2">

					<div class="custom-control custom-checkbox ml-4 mr-4">
						<input type="checkbox" class="custom-control-input" <?php if( $check["massoterapia"] == 4 ){ ?> checked <?php } ?> name="opcoes[]" id="massoterapia" value="4">
						<label class="custom-control-label" for="massoterapia">Massoterapia</label>
					</div>

					<div class="custom-control custom-checkbox mr-4">
						<input type="checkbox" class="custom-control-input" <?php if( $check["acupuntura"] == 5 ){ ?> checked <?php } ?> name="opcoes[]" id="acupuntura" value="5">
						<label class="custom-control-label" for="acupuntura">Acupuntura</label>
					</div>

					<div class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input" <?php if( $check["ginecologia"] == 6 ){ ?> checked <?php } ?> name="opcoes[]" id="ginecologia" value="6">
						<label class="custom-control-label" for="ginecologia">Ginecologista</label>
					</div>

				</div>

				<div class="row my-2 justify-content-center">

					<div class="custom-control custom-checkbox mr-4">
						<input type="checkbox" class="custom-control-input" <?php if( $check["paglicemia"] == 7 ){ ?> checked <?php } ?> name="opcoes[]" id="paglicemia" value="7">
						<label class="custom-control-label" for="paglicemia">P.A. & Glicemia</label>
					</div>

					<div class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input" <?php if( $check["triagem"] == 8 ){ ?> checked <?php } ?> name="opcoes[]" id="triagem" value="8">
						<label class="custom-control-label" for="triagem">Triagem</label>
					</div>

				</div>
			</div>

			<div class="clearfix">
				<button type="submit" class="btn btn-outline-danger my-4 float-right">Atualizar</button>
			</div>
		</form>
	</div>
</div>