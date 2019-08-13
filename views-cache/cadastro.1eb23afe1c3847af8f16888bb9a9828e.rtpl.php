<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="cadastro wrapper">
	<div class="container">
		<p><h3>Cadastro</h3></p>
		<?php if( $error != '' ){ ?>
    	<p class="alert alert-danger">
			<?php echo htmlspecialchars( $error, ENT_COMPAT, 'UTF-8', FALSE ); ?>
		</p>
		<?php } ?>
		<div class="clearfix">
			<div class="float-right">
				<span class="text-danger">* </span><small>Campo obrigatório</small>
				<span class="text-danger ml-2">** </span><small>É necessário pelo menos um contato</small>
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
		      		<label for="inputZip">Cep</label>
		      		<input type="text" class="form-control" name="cep" id="inputZip" placeholder="01234-000">
		    	</div>
		  	</div>

		  	<div class="form-row">
		    	<div class="form-group col-md-6">
		      		<label for="inputEmail4">Email</label>
		      		<input type="email" class="form-control" id="inputEmail4" name="email">
		    	</div>
		    	<div class="form-group col-md-3">
		      		<label for="inputTel">Telefone</label><span class="text-danger"> **</span>
		      		<input type="text" class="form-control" id="inputTel" name="tel" placeholder="1234-5678">
		    	</div>

		    	<div class="form-group col-md-3">
		      		<label for="inputCel">Celular</label><span class="text-danger"> **</span>
		      		<input type="text" class="form-control" id="inputCel" name="cel" placeholder="91234-5678">
		    	</div>
		  	</div>

		  	<label>Especialidades</label>
		  	<div class="border col-md-4 col-xs-12">
		  		<div class="row my-2">
			    	<div class="custom-control custom-checkbox ml-4 mr-3">
						<input type="checkbox" class="custom-control-input" name="opcoes[]" id="clinico" value="1">
						<label class="custom-control-label" for="clinico">Clínico Geral</label>
					</div>

					<div class="custom-control custom-checkbox mr-3">
						<input type="checkbox" class="custom-control-input" name="opcoes[]" id="dentista" value="2">
						<label class="custom-control-label" for="dentista">Dentista</label>
					</div>

					<div class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input" name="opcoes[]" id="psicologo" value="3">
						<label class="custom-control-label" for="psicologo">Psicólogo</label>
					</div>
				</div>
			</div>

			<div class="clearfix">
				<button type="submit" class="btn btn-outline-danger mt-3 float-right">Cadastrar</button>
				<button type="reset" class="btn btn-outline-danger mt-3 mr-2 float-right">Limpar</button>
			</div>
		</form>
	</div>
</div>