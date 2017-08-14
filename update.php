<?php
require_once 'includes/barra_navegacao.php';

  $id = isset($_POST['id']) ? $_POST['id'] : null;
  $titulo_original = isset($_POST['titulo_original']) ? $_POST['titulo_original'] : null;
  $titulo_portugues = isset($_POST['titulo_portugues']) ? $_POST['titulo_portugues'] : null;
  $genero = isset($_POST['genero']) ? $_POST['genero'] : null;
  $ano = isset($_POST['ano']) ? $_POST['ano'] : null;
  $duracao = isset($_POST['duracao']) ? $_POST['duracao'] : null;
  $diretor = isset($_POST['diretor']) ? $_POST['diretor'] : null;
  $sinopse = isset($_POST['sinopse']) ? $_POST['sinopse'] : null;

  if($id != null && $titulo_original !=null && $titulo_portugues !=null && $genero !=null && $ano != null && $duracao !=  null && $diretor !=null && $sinopse !=null){
    $conn = new mysqli("localhost", "root", "170s6612", "locadora");
    mysqli_set_charset($conn,'utf8');
    if($conn->connect_error){
      echo "Erro ao conectar ao banco de dados";
    }
    $stmt = $conn->prepare("UPDATE filmes SET titulo_original=?, titulo_portugues=?, genero=?, ano=?, duracao=?,  diretor =?, sinopse = ? WHERE id = ?");
    $stmt->bind_param('sssiissi', $titulo_original,$titulo_portugues,$genero,$ano,$duracao,$diretor,$sinopse,$id);

    if($stmt->execute()){
      echo "<div class='alert alert-success'>Editado com Sucesso</div>";
    }else{
      echo "<div class='alert alert-danger'>Não foi possilvel editar</div>";
    }
  }else{
    header("Location: lista.php");
  }
  $conn->close();
  require_once 'includes/bootstrapjs.php';

 ?>
