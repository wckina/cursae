<?php
require_once realpath(dirname(__FILE__)) . "/../../classes/action.class.php";

class AulasEstudantes extends Action{
	public function __construct(){
		parent::__construct('aulas_estudantes');
	}

	public function getList(){
		return $this->query("SELECT * FROM $this->tabela");
	}

	public function getListIdAulaEstudante($id_aula,$id_estudante){
		return $this->query("SELECT * FROM $this->tabela WHERE id_aula = '$id_aula' AND id_estudante='$id_estudante'")->FetchAll();
	}

	public function verifyMatricula($id_aula,$id_estudante){
		return $this->query("SELECT * FROM $this->tabela WHERE id_aula = '$id_aula' AND id_estudante='$id_estudante'")->rowCount();
	}

	public function getCursosEstudante($id_estudante){
		return $this->query("SELECT * FROM $this->tabela WHERE id_estudante='$id_estudante' GROUP BY id_curso")->FetchAll();
	}

	public function getTotalAulasAssistidas($id_estudante,$id_curso){
		return $this->query("SELECT * FROM $this->tabela WHERE id_estudante='$id_estudante' AND id_curso='$id_curso'")->rowCount();
	}

	public function addData($id_aula,$id_estudante,$id_curso){
		return $this->query("INSERT INTO $this->tabela (id_aula, id_estudante, id_curso) VALUES ($id_aula,$id_estudante,$id_curso)");
	}

}