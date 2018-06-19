<?php 
session_start();
require_once("../../inc/restrict.php");
require_once("estudantes.class.php");
$estudantes = new Estudantes();
//$estudantes->debug(true);

function success(){
	$_SESSION['acao'] = "sucesso";
	header("location:/admin/app/estudantes?acao=sucesso");
	exit();
}

function error(){
	$_SESSION['acao'] = "error"; 
	header("location:/admin/app/estudantes?acao=error");
	exit();
}

//switchs validator
if($_POST['ativo']){
	$_POST['ativo'] = 1;
}else{
	$_POST['ativo'] = 0;
}    

  function slufigy($string) 
  {
      $table = array(
        'Š'=>'S', 'š'=>'s', 'Đ'=>'Dj', 'đ'=>'dj', 'Ž'=>'Z', 'ž'=>'z', 'Č'=>'C', 'č'=>'c', 'Ć'=>'C', 'ć'=>'c',
        'À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A', 'Ä'=>'A', 'Å'=>'A', 'Æ'=>'A', 'Ç'=>'C', 'È'=>'E', 'É'=>'E',
        'Ê'=>'E', 'Ë'=>'E', 'Ì'=>'I', 'Í'=>'I', 'Î'=>'I', 'Ï'=>'I', 'Ñ'=>'N', 'Ò'=>'O', 'Ó'=>'O', 'Ô'=>'O',
        'Õ'=>'O', 'Ö'=>'O', 'Ø'=>'O', 'Ù'=>'U', 'Ú'=>'U', 'Û'=>'U', 'Ü'=>'U', 'Ý'=>'Y', 'Þ'=>'B', 'ß'=>'Ss',
        'à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ä'=>'a', 'å'=>'a', 'æ'=>'a', 'ç'=>'c', 'è'=>'e', 'é'=>'e',
        'ê'=>'e', 'ë'=>'e', 'ì'=>'i', 'í'=>'i', 'î'=>'i', 'ï'=>'i', 'ð'=>'o', 'ñ'=>'n', 'ò'=>'o', 'ó'=>'o',
        'ô'=>'o', 'õ'=>'o', 'ö'=>'o', 'ø'=>'o', 'ù'=>'u', 'ú'=>'u', 'û'=>'u', 'ý'=>'y', 'ý'=>'y', 'þ'=>'b',
        'ÿ'=>'y', 'Ŕ'=>'R', 'ŕ'=>'r', '/' => '-', ' ' => '-'
      );

      // -- Remove duplicated spaces
      $stripped = preg_replace(array('/\s{2,}/', '/[\t\n]/'), ' ', $string);

      // -- Returns the slug
      return strtolower(strtr($string, $table));
  }

//INSERT
if($_GET['action'] == "add"){

	//Se a ordem ser NULL, verifica a ordem do último registro do banco e incrementa +1
	if(!$_POST['ordem']){
		$maxOrdem = $estudantes->getMaxOrdem();
		$_POST['ordem'] = $maxOrdem->max_ordem +1;;
	}


	//$estudantes->debug(true);

	if($estudantes->add()){
		success();
	}
	else{
		error();
	}
}

//DELETE
if($_GET['action'] == "delete"){

	if($estudantes->delete($_GET['id'])){
		success();
	}
	else{
		error();
	}
}

//UPDATE
if($_GET['action'] == "update"){

	if($estudantes->update($_POST['id']))
		success();
	else
		error();
}