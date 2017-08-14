<?php
  require_once 'includes/barra_navegacao.php';
  $id = isset($_GET['id']) ? $_GET['id'] : null;

  if($id != null){
    $conn = new mysqli('localhost', 'root', '170s6612', 'locadora');
    if($conn->connect_error){
      echo "Erro ao conectar ao banco de dados";
    }
    $sql = "DELETE FROM filmes WHERE id = $id";

    if($conn->query($sql)){
      echo "<div class='alert alert-success'>Excluido com Sucesso</div>";
    }else{
      echo "<div class='alert alert-danger'>Não foi possilvel excluir</div>";

    }
  }



  require_once 'includes/bootstrapjs.php';
 ?>
