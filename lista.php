<?php
	require_once 'includes/barra_navegacao.php';
?>
<div class='container'>
		 <table class='table table-striped'>
		 <thead>
			 <tr>
				 <th>Titulo original</th>
				 <th>Titulo em Portugues</th>
				 <th>Genero</th>
				 <th>Ano</th>
				 <th>Tempo de Duração</th>
				 <th>Diretor</th>
			 </tr>
		 </thead>
		 <tbory>
<?php

	$conn = new mysqli('localhost','root','170s6612','locadora');
	mysqli_set_charset($conn,'utf8');

	if($conn->connect_error){
		echo 'Erro ao conectar com o banco';
	}
	$sql = 'SELECT * FROM filmes ORDER BY titulo_original';

	$lista = $conn->query($sql);

	while ($row = $lista->fetch_assoc()) {
		echo "<tr>";
		echo "<td>$row[titulo_original] </td>";
		echo "<td>$row[titulo_portugues] </td>";
		echo "<td>$row[genero] </td>";
		echo "<td>$row[ano] </td>";
		echo "<td>$row[duracao] </td>";
		echo "<td>$row[diretor] </td>";
		echo "<td><a href='detalhes.php?id=".$row['id']."'><button class='btn btn-default btnn'>Detalhes</button></td>";
		echo "</tr>";
	}
	$conn->close();
	?>
		</tbory>
		</table>
		</div>
<?require_once 'includes/bootstrapjs.php';?>
