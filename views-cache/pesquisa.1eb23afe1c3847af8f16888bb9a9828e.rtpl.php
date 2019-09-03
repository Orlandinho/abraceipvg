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
	    		<form class="ml-4" action="/pesquisa">
					<div class="input-group input-group-sm d-flex align-items-center" style="width: 250px;">
	            	<input type="text" name="search" class="form-control" placeholder="Pesquisa" value="">
	            		<div class="input-group-btn">
	                		<button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
	            		</div>
	        		</div>
        		</form>
                <div class="ml-4">
                    <a href="/logout" class="btn btn-sm btn-outline-danger">Sair</a>
                </div>
	  		</div>
  		</div>
	</nav>
	<div class="espaco"></div>
<div class="row wrapper">
	<div class="container">

        <h3 class="mt-1 mb-5 text-center">Lista de Pacientes Cadastrados</h3>

        <?php if( $success != '' ){ ?>
    	<div class="alert alert-success alert-dismissible fade show" role="alert">
  			<p><?php echo htmlspecialchars( $success, ENT_COMPAT, 'UTF-8', FALSE ); ?></p>
  			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    		<span aria-hidden="true">&times;</span>
  			</button>
		</div>
		<?php } ?>

        <div class="col-md-10 mx-auto border border-danger rounded-lg">
        	<table class="table table-sm table-borderless">
        		<thead>
        			<th class="text-center">Nome</th>
        			<th class="text-center" style="width: 100px">Detalhes</th>
        			<th class="text-center" style="width: 85px">Editar</th>
        			<th class="text-center" style="width: 85px">Excluir</th>
        		</thead>
        		<tbody>
        			<?php $counter1=-1;  if( isset($pacientes) && ( is_array($pacientes) || $pacientes instanceof Traversable ) && sizeof($pacientes) ) foreach( $pacientes as $key1 => $value1 ){ $counter1++; ?>
        			<tr>
        				<td><?php echo corrigirNome($value1["nome"]); ?></td>

        				<td>
        					<a href="/detalhes/<?php echo htmlspecialchars( $value1["idpaciente"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="btn btn-sm btn-light text-center"><i class="fa fa-user"></i>  Detalhes</a>
        				</td>

        				<td>
        					<a href="/pesquisa/<?php echo htmlspecialchars( $value1["idpaciente"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="btn btn-sm btn-secondary text-center"><i class="fa fa-edit"></i> Editar</a>
        				</td>

        				<td>
        					<a href="/pesquisa/<?php echo htmlspecialchars( $value1["idpaciente"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/delete" onclick="return confirm('Deseja realmente excluir este registro?')" class="btn btn-sm btn-danger text-center"><i class="fa fa-trash"></i> Excluir</a>
        				</td>
        			</tr>
        			<?php } ?>
        		</tbody>
        	</table>

        	<nav class="mx-auto">
              <ul class="pagination pagination-sm justify-content-center">
                <?php $counter1=-1;  if( isset($pages) && ( is_array($pages) || $pages instanceof Traversable ) && sizeof($pages) ) foreach( $pages as $key1 => $value1 ){ $counter1++; ?>
                <li class="page-item"><a class="page-link" href="<?php echo htmlspecialchars( $value1["href"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo htmlspecialchars( $value1["text"], ENT_COMPAT, 'UTF-8', FALSE ); ?></a></li>
                <?php } ?>
              </ul>
            </nav>

        </div>
    </div>
</div>