<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="cadastro">	
	<div class="container">
		<form method="post" action="/cadastro">

		  	<div class="form-group">
		    	<label for="inputAddress">Nome Completo</label>
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
		      		<label for="inputTel">Telefone</label>
		      		<input type="text" class="form-control" id="inputTel" name="tel" placeholder="1234-5678">
		    	</div>
		    	<div class="form-group col-md-3">
		      		<label for="inputCel">Celular</label>
		      		<input type="text" class="form-control" id="inputCel" name="cel" placeholder="91234-5678">
		    	</div>
		  	</div>

		  	<label>Especialidades</label>
		  	<div class="border col-md-4">
		  		<div class="row mt-2">
			    	<div class="custom-control custom-checkbox ml-4 mr-3">
						<input type="checkbox" class="custom-control-input" name="opcoes" value="1" id="clinico">
						<label class="custom-control-label" for="clinico">Clínico Geral</label>
					</div>

					<div class="custom-control custom-checkbox mr-3">
						<input type="checkbox" class="custom-control-input" id="dentista">
						<label class="custom-control-label" for="dentista">Dentista</label>
					</div>

					<div class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input" id="psicologo">
						<label class="custom-control-label" for="psicologo">Psicólogo</label>
					</div>
				</div>

				<div class="row mt-2">
			    	<div class="custom-control custom-checkbox ml-4 mr-3">
						<input type="checkbox" class="custom-control-input" name="opcoes" value="1" id="clinico">
						<label class="custom-control-label" for="clinico">Clínico Geral</label>
					</div>

					<div class="custom-control custom-checkbox mr-3">
						<input type="checkbox" class="custom-control-input" id="dentista">
						<label class="custom-control-label" for="dentista">Dentista</label>
					</div>

					<div class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input" id="psicologo">
						<label class="custom-control-label" for="psicologo">Psicólogo</label>
					</div>
				</div>

				<div class="row mt-2 mb-2">
			    	<div class="custom-control custom-checkbox ml-4 mr-3">
						<input type="checkbox" class="custom-control-input" name="opcoes" value="1" id="clinico">
						<label class="custom-control-label" for="clinico">Clínico Geral</label>
					</div>

					<div class="custom-control custom-checkbox mr-3">
						<input type="checkbox" class="custom-control-input" id="dentista">
						<label class="custom-control-label" for="dentista">Dentista</label>
					</div>

					<div class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input" id="psicologo">
						<label class="custom-control-label" for="psicologo">Psicólogo</label>
					</div>
				</div>
			</div>

		  <button type="submit" class="btn btn-outline-danger float-right">Cadastrar</button>

		</form>
	</div>
</div>