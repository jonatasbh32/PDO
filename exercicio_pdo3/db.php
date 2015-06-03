<?php
require_once 'Alunos.php';

try{
	$conexao = new \PDO('mysql:host=localhost;dbname=pdo', 'root', '');
		
}
catch(\PDOException $e){
	echo "Não foi possivel estabelecer a conenxão com o banco de dados: Erro código: " .$e->getCode();
}

//$usuario = new Usuarios($conexao);

//$usuario->setNome("Maurineia")
//		->setSenha("123ser4");


//$resultado = $usuario->insert();







?>