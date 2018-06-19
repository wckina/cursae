<?php
require_once realpath(dirname(__FILE__)) . "/../../classes/action.class.php";

class Cursos extends Action{
	public function __construct(){
		parent::__construct('cursos');
	}

	public function getList(){
		return $this->query("SELECT * FROM $this->tabela");
	}

	public function getListFront(){
		return $this->query("SELECT * FROM $this->tabela WHERE privacidade='PUBLICADO' ORDER BY ordem ASC");
	}

	public function getSlug($slug){
		return $this->query("SELECT * FROM $this->tabela WHERE slug='$slug' LIMIT 1")->Fetch();
	}	

	public function getMaxOrdem(){
		return $this->query("SELECT MAX(ordem) as max_ordem FROM $this->tabela")->Fetch();
	}	

	public function getDuracao($id_curso){
		return $this->query("SELECT SUM(aulas.duration) as duracao_total FROM aulas WHERE id_curso = '$id_curso'")->Fetch();
	}			

}