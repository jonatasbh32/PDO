<?php
session_start();

require_once 'db.php';
require_once 'Alunos.php';


$usuario = new Usuarios($conexao);
foreach($usuario->listar as $c){
	echo $c['nome']."<br/>";

}

?>

<a href="logout.php">Logout</a>



