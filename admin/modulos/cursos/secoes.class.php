<?php
require_once realpath(dirname(__FILE__)) . "/../../classes/action.class.php";

class Secoes extends Action{
	public function __construct(){
		parent::__construct('secoes');
	}

	public function getList(){
		return $this->query("SELECT * FROM $this->tabela ORDER BY ordem ASC");
	}

	public function getListIdCurso($id_curso){
		return $this->query("SELECT * FROM $this->tabela WHERE id_curso = '$id_curso' ORDER BY ordem ASC")->FetchAll();
	}

	public function getMaxOrdem(){
		return $this->query("SELECT MAX(ordem) as max_ordem FROM $this->tabela")->Fetch();
	}

}