<?php
  require_once 'includes/barra_navegacao.php';

  $id = isset($_GET['id']) ? $_GET['id']: null;

  if($id != null){

  $conn = new mysqli("localhost", "root", "170s6612", "locadora");
  mysqli_set_charset($conn,'utf8');
  if($conn->connect_error){
    echo "Erro ao se conectar com o banco";
  }
  $sql = "SELECT * FROM filmes WHERE id = $id";

  $lista = $conn->query($sql);

  $row = $lista->fetch_assoc();


}else{
  header("location:lista.php");
}
  $conn->close();
?>
<div class="container">
<h1>Cadastro de filme</h1>
  <form method="post" action="update.php">
    <div class="form-group">
      <input type="hidden" value="<?=$row['id']?>" name="id">

      <label class="control-label">Titulo original</label>
      <input type="text"  class="form-control" name="titulo_original" value="<?=$row['diretor']?>">
    </div>
    <div class="form-group">
      <label class="control-label">Titulo em Portugues</label>
      <input type="text"  class="form-control" name="titulo_portugues" value="<?=$row['titulo_portugues']?>">
    </div>
    <div class="form-group">
      <label class="control-label">Genero</label>
      <input type="text"  class="form-control" name="genero" value="<?=$row['genero']?>">
    </div>
    <div class="form-group">
      <label class="control-label">Ano</label>
      <input type="text"  class="form-control" name="ano" value="<?=$row['ano']?>">
    </div>
    <div class="form-group">
      <label class="control-label">Tempo dde Duração</label>
      <input type="text"  class="form-control" name="duracao" value="<?=$row['duracao']?>">
    </div>
    <div class="form-group">
      <label class="control-label">Diretor</label>
      <input type="text"  class="form-control" name="diretor" value="<?=$row['diretor']?>">
    </div>
    <div class="form-group">
      <label class="control-label">Sinopse</label>
      <textarea name="sinopse" cols="10" rows="10" class="form-control"><?=$row['sinopse']?></textarea>
    </div>
    <input type="submit" class="btn btn-default btnn" name="" value="Finalizar">
  </form>
</div>






<?php

 require_once 'includes/bootstrapjs.php';
 ?>
