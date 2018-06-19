<?php
	//Classe de conexão com o banco de dados
	class Db extends PDO{

		private $type		= 'mysql';
		private $port		= 3306;

		protected $conn;
		
		private $host;
		private $user;
		private $password;
		private $dbname;

		function query($sql){
			$r = parent::query($sql);
			$r->setFetchMode(PDO::FETCH_OBJ);
			return $r;
		}

		public function __construct(){
				require realpath(dirname(__FILE__)) . "/config.php";
				
				$this->host = $host;
				$this->user = $user;
				$this->password = $password;
				$this->dbname = $dbname;
		        try{
		           	$this->conn = parent::__construct($this->type.":host=".$this->host.";port=".$this->port.";dbname=".$this->dbname, $this->user, $this->password);
		        } catch(PDOException $e){
		            die("A conexão falhou, tente novamente.");
		        }
		}

		public function getLastInsertId()
		{
			$stmt = parent::query("SELECT LAST_INSERT_ID()");
			$lastId = $stmt->fetch(PDO::FETCH_NUM);
			return $lastId[0];
		}
		    
		public function getConn(){
		        return $this->conn;
		}
		    
		/**
		* Fecha a conexao com o DB
		**/
		public function __destruct(){
		        $this->conn = null;
		}
		
		
	}


?>