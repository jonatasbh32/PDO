<?php

class Usuarios{
private $db;
private $id;
private $nome;
private $senha;

public function __construct(\PDO $db){
	$this->db = $db;
}

public function find($id){
	$query = "Select * from usuarios where id=:id";
	$stmt = $this->db->prepare($query);
	$stmt->bindValue("id", $id);
	$stmt->execute();

	return $stmt->fetch(\PDO::FETCH_ASSOC);
}

public function listar(){
	$query = "Select * form usuarios";
	$stmt = $this->db->query($query);
	return $stmt->fetchALL(\PDO::FETCH_ASSOC);
}

public function insert(){
	$query = "insert into usuarios(nome,senha) Values(:nome, :senha)";
		$stmt = $this->db->prepare($query);
		$stmt->bindValue(':nome', $this->getNome());
		$stmt->bindValue(':senha', $this->getSenha());
		$stmt->execute();


		if($stmt->execute()){
			return true;
		}

}

public function alterar(){

	$query = "Update usuarios set nome=:nome, senha=:senha where id=:id";

		$stmt = $this->db->prepare($query);
		$stmt->bindValue(':id', $this->getId());
		$stmt->bindValue(':nome', $this->getNome());
		$stmt->bindValue(':senha', $this->getSenha());
		$stmt->execute();


		if($stmt->execute()){
			return true;
		}

}

public function deletar($id){
	$query = "delete from usuarios where id=:id";
		$stmt = $this->db->prepare($query);
		$stmt->bindValue(':id', $id);
}

public function setId($id){
	$this->id = $id;
	return $this;
}

public function getId(){
	return $this->id;
}

public function setNome($nome){
	$this->nome = $nome;
	return $this;
}

public function getNome(){
	return $this->nome;
}

public function setSenha($senha){
	$this->senha = $senha;
	return $this;
}

public function getSenha(){
	return $this->senha;
}

}

?>