<?php
require_once 'includes/barra_navegacao.php';

	$id = isset($_GET['id']) ? $_GET['id'] : null;

	if($id != null){

		$conn = new mysqli('localhost', 'root', '170s6612', 'locadora');

		mysqli_set_charset($conn,'utf8');

		if($conn->connect_error){
			echo "Erro na conexão com o banco";
		}
		$sql = "SELECT * FROM filmes WHERE id = $id";

		$lista = $conn->query($sql);

		$row = $lista->fetch_assoc();
		echo "<div class='container text-cente'>";
		echo "<div class='page-header'>";
		echo "<h2>Titulo Original</h2>";
		echo "</div>";
		echo "<h3>".$row['titulo_original']."</h3>";
		echo "<div class='page-header'>";
		echo "<h2>Titulo em Portugues</h2>";
		echo "</div>";
		echo "<h3>".$row['titulo_portugues']."</h3>";
		echo "<div class='page-header'>";
		echo "<h2>Genero</h2>";
		echo "</div>";
		echo "<h3>".$row['genero']."</h3>";
		echo "<div class='page-header'>";
		echo "<h2>Ano</h2>";
		echo "</div>";
		echo "<h3>".$row['ano']."</h3>";
		echo "<div class='page-header'>";
		echo "<h2>Duração</h2>";
		echo "</div>";
		echo "<h3>".$row['duracao']."</h3>";
		echo "<div class='page-header'>";
		echo "<h2>Diretor</h2>";
		echo "</div>";
		echo "<h3>".$row['diretor']."</h3>";
		echo "<div class='page-header'>";
		echo "<h2>Sinopse</h2>";
		echo "</div>";
		echo "<h3>".$row['sinopse']."</h3>";
		echo "<a href='editar.php?id=".$id."'><button class='btn btn-default btnn'>Editar</button>";
		echo "<a href='excluir.php?id=".$id."'><button class='btn btn-default btnn'>Excuir</button>";
		echo "</div>";
		$conn->close();

	}else{
		header('Location: lista.php');
	}

require_once 'includes/bootstrapjs.php';
?>
