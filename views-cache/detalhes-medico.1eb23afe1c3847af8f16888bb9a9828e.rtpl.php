<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Abrace IPVG</title>
		<link rel="icon" type="imagem/png" href="/res/img/abrace.png" height="16px" width="16px"/>
		<link href="/res/css/all.min.css" rel="stylesheet">
		<link href="/res/css/bootstrap.min.css" rel="stylesheet">
		<link href="/res/css/estilo.css" rel="stylesheet">
	</head>

	<body>
		<div class="container my-2">
			<header>
				<div class="col-10 d-flex align-items-center">
					<img src="/res/img/abrace.png" height="100px" width="100px">
					<label style="font-size: 34px" class="ml-3">Abrace IPVG</label>

					<div class="ml-5">
						<a href="/logout" class="btn btn-sm btn-outline-danger">Sair</a>
					</div>
				</div>
			</header>
		</div>

		<div class="wrapper border-top border-danger">
			<div class="container">
				
				<div class="row my-4 mx-auto">
					<h2>Dados de Triagem de <?php echo corrigirNome($paciente["nome"]); ?></h2>
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
			</div>
		</div>

		<footer class="rodape">
	        <div class="container">
	            <div class="row">
	                <div class="col-md-8">
	                    <div class="mt-3">
	                        <p>Igreja Presbiteriana de Vila Gustavo: <a href="https://www.facebook.com/ipvilagustavo/?__tn__=%2CdkC-R&eid=ARDnJ4L5wHk9Vba1a3sqCQfdscNGsyanAoqDYbpnqheZTdYV_pvGK9qBV_g4loi16RkO5PFcj_3XLlSw&hc_ref=ARQgaSS4hp9OyAdJjGs-Di0z7ljzrIF2rVzfOHp9sSjJ5tj-9WzCWF80UPYX_bvLPSg" target="_blank">facebook.com/ipvilagustavo</a></p>
	                    </div>
	                </div>
	                
	                <div class="col-md-4">
	                    <div class="mt-3">
	                        <p>Desenvolvido por Antonio Orlando</p>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </footer>
		<script src="/res/js/jquery.js"></script>
		<script src="/res/js/bootstrap.min.js"></script>
		<script src="/res/js/main.js"></script>
	</body>
</html>