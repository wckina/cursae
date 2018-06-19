<?php
require_once realpath(dirname(__FILE__)) . "/../../classes/action.class.php";

class Jogos_estudantes extends Action{
	public function __construct(){
		parent::__construct('jogos_estudantes');
	}

	public function addEstudantes($id_jogo,$id_estudante){
		return $this->exec("INSERT INTO $this->tabela (id_jogo, id_estudante) VALUES ($id_jogo,$id_estudante)");
	}

	public function getByIdEstudante($id_jogo,$id_estudante){
		return $this->query("SELECT * FROM $this->tabela WHERE id_jogo ='$id_jogo' AND $id_estudante='$id_estudante'")->Fetch();
	}

	public function getJogosByEstudante($id_estudante){
		return $this->query("SELECT * FROM $this->tabela WHERE id_estudante ='$id_estudante'")->fetchAll();
	}		

	public function deleteEstudantes($id_jogo){
		return $this->exec("DELETE FROM $this->tabela WHERE id_jogo = $id_jogo");
	}

	public function getEstudantes($id_jogo) {
		return $this->query("SELECT id_estudante FROM $this->tabela WHERE id_jogo ='$id_jogo'")->FetchAll();
	}

	public function getEstudanteFetch($id_jogo) {
		return $this->query("SELECT id_estudante FROM $this->tabela WHERE id_jogo ='$id_jogo'")->Fetch();
	}

}