<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="wrapper">
	<div class="container">

		<div class="row mb-5 mx-auto">
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
			<label class="col-md-3"><b>Status da(s) Consulta(s)</b></label>
			<div class="row">
				<span class="ml-3"><p>Atendido (<i class="fa fa-check"></i>) / Não Atendido (<i class="fa fa-times"></i>)</p></span>
			</div>
		</div>
		<div class="col-md-3 ml-1 mt-3 row border border-secondary rounded-lg">
			<ol>
				<?php $counter1=-1;  if( isset($consultas) && ( is_array($consultas) || $consultas instanceof Traversable ) && sizeof($consultas) ) foreach( $consultas as $key1 => $value1 ){ $counter1++; ?>
				<li class="mt-2"><?php echo pegarEspecialidade($value1["consulta"]); ?> <span class="ml-3"><?php if( $value1["atendido"] == 1 ){ ?><i class="fa fa-check"></i><?php }else{ ?><i class="fa fa-times"></i><?php } ?></span></li>
				<?php } ?>
			</ol>
		</div>
	</div>
</div>
