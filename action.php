<?php 
ini_set("display_errors", 0);
session_start();

	
//Verificando por AJAX se um e-mail ainda não está cadastrado
if($_POST['action'] == "VerifyEmail"){

	//Verifica se o e-mail já não existe
	require_once("admin/modulos/estudantes/estudantes.class.php");
	$estudantes = new Estudantes();

	$verificaEmail = $estudantes->getByEmail($_POST['email']);
	if($verificaEmail->email){
		die("1");
	}else{
		die("0");
	}

}

//Registra uma conta
if(base64_decode($_POST['action']) == "register_account"){

			//Verifica se o e-mail já não existe
			require_once("admin/modulos/estudantes/estudantes.class.php");
			$estudantes = new Estudantes();

			$verificaEmail = $estudantes->getByEmail($_POST['email']);
			if($verificaEmail->email){
				$_SESSION['acao'] = "email-in-use";
				header("location:/signup");
				die();		
			}	

			//Criptografando a senha
			$_POST['password'] = md5($_POST['senha']."SALT#_%$");

			//Se a ordem ser NULL, verifica a ordem do último registro do banco e incrementa +1
			if(!$_POST['ordem']){
			$maxOrdem = $estudantes->getMaxOrdem();
				$_POST['ordem'] = $maxOrdem->max_ordem +1;;
			}

			//$estudantes->debug(true);
			if($estudantes->add()){
				$lastid = $estudantes->getLastInsertId();

				//Grava os dados do cliente em sessão
				$_SESSION['estudante_id'] = $lastid;
				$_SESSION['estudante_nome'] = $_POST['nome'];
				$_SESSION['estudante_email'] = $_POST['email'];
				$_SESSION['acao'] = "register_success";

				//Verifica se a origem foi através de uma página de curso
				//Caso verdadeiro, redireciona para o curso.
				//Caso falso, redireciona para página do painel
				if($_SESSION['play_course']){
					header("location:".$_SESSION['play_course']);
					die();
				}else{
					header("location:/painel");
					die();
				}
				
			}
			else{
				$_SESSION['acao'] = "register_error";
				header("location:/signup");
				die();
			}	

}


//Faz login
if(base64_decode($_POST['action']) == "login_account"){

	//Requisição da classe de estudantes
	require_once("admin/modulos/estudantes/estudantes.class.php");
	$estudantes = new Estudantes();

	$_POST['senha'] = md5($_POST['senha']."SALT#_%$");

	//Previne caracteres especiais	
	$email = addslashes($_POST['email']);
	$senha = addslashes($_POST['senha']);

	//Verifica os dados
	$auth = $estudantes->getDados($email,$senha);

	//Login aceito
	if($auth){
		$_SESSION['estudante_id'] = $auth->id;
		$_SESSION['estudante_nome'] = $auth->nome;
		$_SESSION['estudante_email'] = $auth->email;
		$_SESSION['acao'] = "login_success";


		//Verifica se a origem foi através de uma página de curso
		//Caso verdadeiro, redireciona para o curso.
		//Caso falso, redireciona para página do painel
		if($_SESSION['play_course']){
			header("location:".$_SESSION['play_course']);
			die();
		}else{
			header("location:/painel");
			die();
		}

		die();		
	}else{
		$_SESSION['acao'] = "error";
		header("location:/login");
		die();		
	}
}

//Avalia um curso
if(base64_decode($_POST['action']) == "rate_course"){
	if($_SESSION['id_course']){

		require_once("admin/modulos/avaliacoes/avaliacoes.class.php");
		$avaliacoes = new Avaliacoes();

		$_POST['id_estudante'] = $_SESSION['estudante_id'];
		$_POST['id_curso'] = $_SESSION['id_course'];
		$_POST['comentario'] = str_replace("'", "", strip_tags($_POST['comentario']));
		
		var_dump($_SESSION);

		if($avaliacoes->add()){
			header("location:".$_SESSION['play_course']."#rate");
			$_SESSION['acao'] = "rate_success";
			die();
		}else{
			header("location:".$_SESSION['play_course']."#rate");
			$_SESSION['acao'] = "rate_error";
			die();
		}

	}else{
		header("location:/login");
		die();
	}
}



