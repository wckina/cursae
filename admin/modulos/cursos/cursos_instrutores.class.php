<?php
require_once realpath(dirname(__FILE__)) . "/../../classes/action.class.php";

class CursosInstrutores extends Action{
	public function __construct(){
		parent::__construct('cursos_instrutores');
	}

	public function getList(){
		return $this->query("SELECT * FROM $this->tabela");
	}

	public function getListIdCurso($id_curso,$limit=""){
		if($limit){
			$limit = "LIMIT $limit";
		}
		return $this->query("SELECT * FROM $this->tabela WHERE id_curso = '$id_curso' $limit")->FetchAll();
	}

	public function getCountInstrores($id_curso){
		return $this->query("SELECT * FROM $this->tabela WHERE id_curso = '$id_curso'")->rowCount();
	}

	public function getMaxOrdem(){
		return $this->query("SELECT MAX(ordem) as max_ordem FROM $this->tabela")->Fetch();
	}

}