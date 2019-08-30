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

		<div class="row mb-4 mx-auto">
			<h2>Dados Cadastrados</h2>
		</div>

		<div class="row">
			<label class="col-md-1"><b>Nome</b></label>
			<p class="col-md-5"><?php echo corrigirNome($paciente["nome"]); ?></p>
		</div>

		<div class="row">
			<label class="col-md-1"><b>Endereço</b></label>
			<p class="col-md-5"><?php echo corrigirNome($paciente["endereco"]); ?></p>
		</div>

		<div class="row">
			<label class="col-md-1"><b>Cidade</b></label>
			<p class="col-md-3"><?php echo corrigirNome($paciente["cidade"]); ?></p>

			<label class="col-md-1"><b>Bairro</b></label>
			<p class="col-md-3"><?php echo corrigirNome($paciente["bairro"]); ?></p>

			<label class="col-md-1"><b>Cep</b></label>
			<p class="col-md-3"><?php echo htmlspecialchars( $paciente["cep"], ENT_COMPAT, 'UTF-8', FALSE ); ?></p>
		</div>

		<div class="row">
			<label class="col-md-1"><b>E-mail</b></label>
			<?php if( $paciente["email"] == null ){ ?>
			<p class="col-md-3">Não informado</p>
			<?php }else{ ?>
			<p class="col-md-3"><?php echo htmlspecialchars( $paciente["email"], ENT_COMPAT, 'UTF-8', FALSE ); ?></p>
			<?php } ?>
		</div>

		<div class="row">
			<label class="col-md-1"><b>Telefone</b></label>
			<?php if( $paciente["tel"] == null ){ ?>
			<p class="col-md-3">Não informado</p>
			<?php }else{ ?>
			<p class="col-md-3"><?php echo htmlspecialchars( $paciente["tel"], ENT_COMPAT, 'UTF-8', FALSE ); ?></p>
			<?php } ?>

			<label class="col-md-1"><b>Celular</b></label>
			<?php if( $paciente["cel"] == null ){ ?>
			<p class="col-md-3">Não informado</p>
			<?php }else{ ?>
			<p class="col-md-3"><?php echo htmlspecialchars( $paciente["cel"], ENT_COMPAT, 'UTF-8', FALSE ); ?></p>
			<?php } ?>
		</div>

		<div class="row">
			<label class="col-md-1"><b>Idade</b></label>
			<?php if( $paciente["idade"] == null ){ ?>
			<p class="col-md-2">Não informado</p>
			<?php }else{ ?>
			<p class="col-md-2"><?php echo htmlspecialchars( $paciente["idade"], ENT_COMPAT, 'UTF-8', FALSE ); ?> anos</p>
			<?php } ?>

			<label class="col-md-1"><b>Altura</b></label>
			<?php if( $paciente["altura"] == null ){ ?>
			<p class="col-md-2">Não informado</p>
			<?php }else{ ?>
			<p class="col-md-2"><?php echo casaDecimal($paciente["altura"]); ?>m</p>
			<?php } ?>

			<label class="col-md-1"><b>Peso</b></label>
			<?php if( $paciente["peso"] == null ){ ?>
			<p class="col-md-2">Não informado</p>
			<?php }else{ ?>
			<p class="col-md-2"><?php echo casaDecimal($paciente["peso"]); ?> Kg</p>
			<?php } ?>

			<label class="col-md-1"><b>Temp.</b></label>
			<?php if( $paciente["temperatura"] == null ){ ?>
			<p class="col-md-2">Não informado</p>
			<?php }else{ ?>
			<p class="col-md-2"><?php echo casaDecimal($paciente["temperatura"]); ?>°</p>
			<?php } ?>
		</div>

		<div class="row">
			<label class="col-md-1"><b>P.A.</b></label>
			<?php if( $paciente["pa"] == null ){ ?>
			<p class="col-md-2">Não informado</p>
			<?php }else{ ?>
			<p class="col-md-2"><?php echo htmlspecialchars( $paciente["pa"], ENT_COMPAT, 'UTF-8', FALSE ); ?></p>
			<?php } ?>

			<label class="col-md-1"><b>Glicemia</b></label>
			<?php if( $paciente["glicemia"] == null ){ ?>
			<p class="col-md-2">Não informado</p>
			<?php }else{ ?>
			<p class="col-md-2"><?php echo htmlspecialchars( $paciente["glicemia"], ENT_COMPAT, 'UTF-8', FALSE ); ?> mg/dl</p>
			<?php } ?>

			<label class="col-md-1"><b>Respiração</b></label>
			<?php if( $paciente["respiracao"] == null ){ ?>
			<p class="col-md-2">Não informado</p>
			<?php }else{ ?>
			<p class="col-md-2"><?php echo htmlspecialchars( $paciente["respiracao"], ENT_COMPAT, 'UTF-8', FALSE ); ?> rpm</p>
			<?php } ?>

			<label class="col-md-1"><b>Pulso</b></label>
			<?php if( $paciente["pulso"] == null ){ ?>
			<p class="col-md-2">Não informado</p>
			<?php }else{ ?>
			<p class="col-md-2"><?php echo htmlspecialchars( $paciente["pulso"], ENT_COMPAT, 'UTF-8', FALSE ); ?> bpm</p>
			<?php } ?>
		</div>

		<div class="row">
			<label class="col-md-1"><b>Obs</b></label>
			<?php if( $paciente["obs"] == null ){ ?>
			<p class="col-md-2">Não informado</p>
			<?php }else{ ?>
			<p class="col-md-11"><?php echo corrigirNome($paciente["obs"]); ?></p>
			<?php } ?>
		</div>

		<div class="row mt-3">
			<label class="col-md-6"><h3>Consulta(s) Cadastrada(s)</h3></label>
		</div>

		<div class="row">
			<span class="ml-3"><p>Atendido <i class="fa fa-check"></i> / Não Atendido <i class="fa fa-times"></i></p></span>
		</div>

		<div class="col-md-4 ml-1 mt-2 mb-5 row border border-secondary rounded-lg">
			<table class="table table-sm borderless">
				<th>Especialidade</th>
				<th>Atendido</th>
				<?php $counter1=-1;  if( isset($consultas) && ( is_array($consultas) || $consultas instanceof Traversable ) && sizeof($consultas) ) foreach( $consultas as $key1 => $value1 ){ $counter1++; ?>
				<tr>
					<td><?php echo pegarEspecialidade($value1["consulta"]); ?></td>
					<td><span class="ml-4"><?php if( $value1["atendido"] == 1 ){ ?><i class="fa fa-check"></i><?php }else{ ?><i class="fa fa-times"></i><?php } ?></span>
					</td>
				</tr>
				<?php } ?>
			</table>
		</div>
	</div>
</div>
