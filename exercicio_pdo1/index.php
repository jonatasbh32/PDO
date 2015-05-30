<?php

try{
	$conect = new \PDO('mysql:host=localhost;dbname=pdo', 'root', '');
	$total = "Select * from alunos";
	$query = "Select * from alunos ORDER BY nota DESC LIMIT 3";
	

	

	foreach ($conect->query($total) as $alunos){
		echo "Nome aluno: ". $alunos['nome']."<br/>";
		
	}

	foreach ($conect->query($query) as $alunos){
		echo "Nome aluno: ". $alunos['nome']." Nota ".$alunos['nota'] ."<br/>";
		
	}


}catch(\PDOException $e){
	Echo "Erro ao estabelecer conecxão com o banco de dados: Erro código" .$e->getCode();
}



?>