<?php
	require_once 'includes/barra_navegacao.php';
?>
	<div class="container">
	<h1>Cadastro de filme</h1>
		<form method="post" action="cadastrar.php">
			<div class="form-group">
				<label class="control-label">Titulo original</label>
				<input type="text"  class="form-control" name="titulo_original" placeholder="">
			</div>
			<div class="form-group">
				<label class="control-label">Titulo em Portugues</label>
				<input type="text"  class="form-control" name="titulo_portugues" placeholder="">
			</div>
			<div class="form-group">
				<label class="control-label">Genero</label>
				<input type="text"  class="form-control" name="genero" placeholder="">
			</div>
			<div class="form-group">
				<label class="control-label">Ano</label>
				<input type="text"  class="form-control" name="ano" placeholder="">
			</div>
			<div class="form-group">
				<label class="control-label">Tempo dde Duração</label>
				<input type="text"  class="form-control" name="duracao" placeholder="">
			</div>
			<div class="form-group">
				<label class="control-label">Diretor</label>
				<input type="text"  class="form-control" name="diretor" placeholder="">
			</div>
			<div class="form-group">
				<label class="control-label">Sinopse</label>
				<textarea name="sinopse" cols="10" rows="10" class="form-control" ></textarea>
			</div>
			<input type="submit" class="btn btn-default btnn" name="" value="Cadastrar">
		</form>
	</div>
<?php require_once 'includes/bootstrapjs.php';?>
