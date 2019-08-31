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

		<div class="wrapper border-top border-danger mb-4">
			<div class="container">

				<?php if( $success != '' ){ ?>
    			<div class="alert alert-success alert-dismissible fade show" role="alert">
  					<p><?php echo htmlspecialchars( $success, ENT_COMPAT, 'UTF-8', FALSE ); ?></p>
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    				<span aria-hidden="true">&times;</span>
  					</button>
				</div>
				<?php } ?>

				<?php if( $error != '' ){ ?>
    			<div class="alert alert-success alert-dismissible fade show" role="alert">
  					<p><?php echo htmlspecialchars( $error, ENT_COMPAT, 'UTF-8', FALSE ); ?></p>
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    				<span aria-hidden="true">&times;</span>
  					</button>
				</div>
				<?php } ?>

				<div class="my-4 col-md-6 mx-auto">
					<p class="text-center" style="text-">Boa tarde Dr(a) <?php echo getDoctorName(); ?>, os seus pacientes serão listados abaixo conforme forem sendo cadastrados pela equipe da IPVG. Agradecemos a sua colaboração!</p>
				</div>
				<div class="col-md-6 mx-auto border border-danger rounded-lg">
		        	<table class="table mt-3 table-sm table-borderless">
		        		<thead>
		        			<th class="text-center" style="width: 200px">Nome</th>
		        			<th style="width: 100px">Detalhes</th>
		        			<th style="width: 100px">Concluir</th>
		        		</thead>
		        		<tbody>
		        			<?php $counter1=-1;  if( isset($pacientes) && ( is_array($pacientes) || $pacientes instanceof Traversable ) && sizeof($pacientes) ) foreach( $pacientes as $key1 => $value1 ){ $counter1++; ?>
		        			<tr>
		        				<td class="d-flex justify-content-center"><?php echo corrigirNome($value1["nome"]); ?></td>

		        				<td>
		        					<a href="/detalhes-medico/<?php echo htmlspecialchars( $value1["idpaciente"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="btn btn-sm btn-light justify-content-center"><i class="fa fa-user"></i>  Detalhes</a>
		        				</td>

		        				<td>
		        					<a href="/medico/<?php echo htmlspecialchars( $value1["consulta"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/paciente/<?php echo htmlspecialchars( $value1["idpaciente"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" onclick="return confirm('A consulta será finalizada, deseja prosseguir?')" class="btn btn-sm btn-secondary justify-content-center"><i class="fa fa-edit"></i> Concluir</a>
		        				</td>

		        			</tr>
		        			<?php } ?>
		        		</tbody>
		        	</table>
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