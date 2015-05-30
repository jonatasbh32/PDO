<?php

try{
	$conexao = new \PDO('mysql:host=localhost;dbname=pdo', 'root', '');
	$query = "Select * from cliente";
	//$stmt = $conexao->query($query);
	//$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

	foreach ($conexao->query($query) as $cliente) {
		echo $cliente['nome']."<br/>";
	}

	#print_r($resultado);
}
catch(\PDOException $e){
	echo "Não foi possivel estabelecer a conenxão com o banco de dados: Erro código: " .$e->getCode();
}
?>
