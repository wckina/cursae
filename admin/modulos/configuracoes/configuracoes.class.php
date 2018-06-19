<?php
require_once realpath(dirname(__FILE__)) . "/../../classes/action.class.php";

class Configuracoes extends Action{
	public function __construct(){
		parent::__construct('configuracoes');
	}
}