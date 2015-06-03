<?php

class Alunos{
private $db;
private $id;
private $nome;
private $nota;

public function __construct(\PDO $db){
	$this->db = $db;
}

public function find($id){
	$query = "Select * from alunos where id=:id";
	$stmt = $this->db->prepare($query);
	$stmt->bindValue("id", $id);
	$stmt->execute();

	return $stmt->fetch(\PDO::FETCH_ASSOC);
}

public function listar(){
	$query = "Select * form alunos";
	$stmt = $this->db->query($query);
	return $stmt->fetchALL(\PDO::FETCH_ASSOC);
}

public function insert(){
	$query = "insert into alunos(nome,nota) Values(:nome, :nota)";
		$stmt = $this->db->prepare($query);
		$stmt->bindValue(':nome', $this->getNome());
		$stmt->bindValue(':nota', $this->getNota());
		$stmt->execute();


		if($stmt->execute()){
			return true;
		}

}

public function alterar(){

	$query = "Update alunos set nome=:nome, nota=:nota where id=:id";

		$stmt = $this->db->prepare($query);
		$stmt->bindValue(':id', $this->getId());
		$stmt->bindValue(':nome', $this->getNome());
		$stmt->bindValue(':nota', $this->getNota());
		$stmt->execute();


		if($stmt->execute()){
			return true;
		}

}

public function deletar($id){
	$query = "delete from alunos where id=:id";
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

public function setNota($nota){
	$this->nota = $nota;
	return $this;
}

public function getNota(){
	return $this->nota;
}

}

?>