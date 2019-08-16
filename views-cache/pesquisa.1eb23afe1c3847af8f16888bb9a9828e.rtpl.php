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

        <div class="col-md-8 mx-auto border border-danger rounded-lg">
        	<table class="table table-sm table-borderless">
        		<thead>
        			<th class="text-center">Nome</th>
        			<th class="text-center" style="width: 100px">Editar</th>
        			<th class="text-center" style="width: 100px">Excluir</th>
        		</thead>
        		<tbody>
        			<?php $counter1=-1;  if( isset($pacientes) && ( is_array($pacientes) || $pacientes instanceof Traversable ) && sizeof($pacientes) ) foreach( $pacientes as $key1 => $value1 ){ $counter1++; ?>
        			<tr>
        				<td><?php echo htmlspecialchars( $value1["nome"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>

        				<td>
        					<a href="/pesquisa/<?php echo htmlspecialchars( $value1["idpaciente"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="btn btn-sm btn-secondary text-right"><i class="fa fa-edit"></i> Editar</a>
        				</td>

        				<td>
        					<a href="/pesquisa/<?php echo htmlspecialchars( $value1["idpaciente"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/delete" onclick="return confirm('Deseja realmente excluir este registro?')" class="btn btn-sm btn-danger text-right"><i class="fa fa-trash"></i> Excluir</a>
        				</td>
        			</tr>
        			<?php } ?>
        		</tbody>
        	</table>

        	<div class="mx-auto">
              <ul class="pagination pagination-sm">
                <?php $counter1=-1;  if( isset($pages) && ( is_array($pages) || $pages instanceof Traversable ) && sizeof($pages) ) foreach( $pages as $key1 => $value1 ){ $counter1++; ?>
                <li><a href="<?php echo htmlspecialchars( $value1["href"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo htmlspecialchars( $value1["text"], ENT_COMPAT, 'UTF-8', FALSE ); ?></a></li>
                <?php } ?>
              </ul>
            </div>

        </div>
    </div>
</div>