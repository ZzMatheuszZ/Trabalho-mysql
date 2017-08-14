<?php
require_once 'includes/barra_navegacao.php';
	$titulo_original = isset($_POST['titulo_original']) ? $_POST['titulo_original'] : null;
	$titulo_portugues = isset($_POST['titulo_portugues']) ? $_POST['titulo_portugues'] : null;
	$genero = isset($_POST['genero']) ? $_POST['genero'] : null;
	$ano = isset($_POST['ano']) ? $_POST['ano'] : null;
	$duracao = isset($_POST['duracao']) ? $_POST['duracao'] : null;
	$diretor = isset($_POST['diretor']) ? $_POST['diretor'] : null;
	$sinopse = isset($_POST['sinopse']) ? $_POST['sinopse'] : null;


	if($titulo_original !=null && $titulo_portugues !=null && $genero !=null && $diretor !=null && $sinopse !=null){

	$conn = new mysqli('localhost', 'root','170s6612', 'locadora');
	mysqli_set_charset($conn,'utf8');
	if($conn->connect_error){
		echo "Erro ao conectar com o banco";
	}
	$stmt = $conn->prepare("INSERT INTO filmes(titulo_original, titulo_portugues, genero, ano, duracao, diretor, sinopse) values(?,?,?,?,?,?,?)");
	$stmt->bind_param('sssiiss', $titulo_original,$titulo_portugues,$genero,$ano,$duracao,$diretor,$sinopse);

	if($stmt->execute()){
		echo '<div class="alert alert-success">Filme Cadastrado</div>';
	}else{
		echo '<div class="alert alert-danger">Erro ao cadastrar</div>';
	}
	$conn->close();
}else{
	header("location: form_cadastrar.php");
}
require_once 'includes/bootstrapjs.php';
