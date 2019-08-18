<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="row wrapper">
	<div class="container">
		<form action="/pesquisa">
			<div class="input-group input-group-sm" style="width: 300px;">
	            <input type="text" name="search" class="form-control" placeholder="Pesquisa" value="">
	            <div class="input-group-btn">
	                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
	            </div>
	        </div>
        </form>

        <h4 class="my-4 text-center">Lista de Pessoas Cadastradas</h4>

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