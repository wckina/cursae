<?php
require_once realpath(dirname(__FILE__)) . "/../../classes/action.class.php";

class Aulas extends Action{
	public function __construct(){
		parent::__construct('aulas');
	}

	public function getList(){
		return $this->query("SELECT * FROM $this->tabela");
	}

	public function getListIdSecao($id_secao){
		return $this->query("SELECT * FROM $this->tabela WHERE id_secao = '$id_secao' ORDER BY ordem ASC")->FetchAll();
	}

	public function getDuracao($id_secao){
		return $this->query("SELECT SUM(aulas.duration) as duracao_total FROM $this->tabela WHERE id_secao = '$id_secao'")->Fetch();
	}		

	public function getNumeroAulas($id_curso){
		return $this->query("SELECT * FROM $this->tabela WHERE id_curso = '$id_curso'")->rowCount();
	}		

	public function getMaxOrdem(){
		return $this->query("SELECT MAX(ordem) as max_ordem FROM $this->tabela")->Fetch();
	}
		
}