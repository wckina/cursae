<?php 
session_start();
require_once("../../inc/restrict.php");
require_once("cursos.class.php");
$cursos = new Cursos();

require_once("secoes.class.php");
$secoes = new Secoes();

require_once("aulas.class.php"); 
$aulas = new Aulas();

require_once("cursos_instrutores.class.php"); 
$cursosInstrutores = new CursosInstrutores();

require_once("materiais_aulas.class.php"); 
$materiaisAulas = new MateriaisAulas();

//$cursos->debug(true);

function success($data){
	$_SESSION['acao'] = "sucesso";
	redirect($data);
}

function error($data){
	$_SESSION['acao'] = "error"; 
	redirect($data);
}

function redirect($data){
	switch ($data) {
		case 'section':
			header("location:/admin/app/cursos/secoes/".$_REQUEST['id_curso']);
			break;

		case 'aula':
			header("location:/admin/app/cursos/secoes/".$_REQUEST['id_curso']);
			break;	

		case 'instrutor_curso':
			header("location:/admin/app/cursos/instrutores/".$_REQUEST['id_curso']);
			break;				
		

		default:
			header("location:/admin/app/cursos");
			break;
	}
	exit();	
}

function createSlug($string) {

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

//Remove a formatação do money mask	
$formatter = new \NumberFormatter('pt_BR', \NumberFormatter::DECIMAL);
$_POST['valor'] = $formatter->parse(str_replace('R$ ', '', $_POST['valor']));


if($_FILES['thumbs']['name']){
	$ext = strrchr($_FILES['thumbs']['name'], ".");
	$name = uniqid().$ext;
	if(move_uploaded_file ( $_FILES['thumbs']['tmp_name'] , "../../uploads/".$name)){
		$_POST['thumbs'] = $name;
	}
}

if($_FILES['capa']['name']){
	$ext = strrchr($_FILES['capa']['name'], ".");
	$name = uniqid().$ext;
	if(move_uploaded_file ( $_FILES['capa']['tmp_name'] , "../../uploads/".$name)){
		$_POST['capa'] = $name;
	}
}



//INSERT
if($_GET['action'] == "add"){
	if($cursos->add())
		success();
	else
		error();
}

//DELETE
if($_GET['action'] == "delete"){
	if($cursos->delete($_GET['id'])){
		success();
	}
	else{
		error();
	}
}

//UPDATE
if($_GET['action'] == "update"){
	if($cursos->update($_POST['id']))
		success();
	else
		error();
}

//UPDATE FILES AULA
if($_GET['action'] == "upload_files"){

	$ext = strrchr($_FILES['file']['name'], ".");
	$name = createSlug($_FILES['file']['name']);
	$name = uniqid()."-".$name;
	if(move_uploaded_file ( $_FILES['file']['tmp_name'] , "../../uploads/courses_attachments/".$name)){
		$_POST['material'] = $name;
		$_POST['id_aula'] = $_REQUEST['id_aula'];
	}
	$materiaisAulas->add();
}


//UPDATE Privacidade
if($_GET['action'] == "update_privacidade"){
	
	//Verifica o status atual do curso
	$getCurso = $cursos->get($_GET['id']);
	if($getCurso->privacidade == "RASCUNHO"){
		$_POST['privacidade'] = "PUBLICADO";
		//Verifica se existe um instrutor para esse curso
		$verificaInstrutores = $cursosInstrutores->getListIdCurso($_GET['id']);
		//Se não existir instrutores para o curso, não deixar publicar
		if(!$verificaInstrutores){
			die("2");
		}
	}else{
		$_POST['privacidade'] = "RASCUNHO";
	}



	if($cursos->update($_GET['id']))
		die("1");
	else
		die("0");
}


//===========SEÇÕES=================//

//GET
if($_GET['action'] == "get_secao"){
	$getSecao = $secoes->get($_GET['id']);
	echo json_encode($getSecao);
}

//INSERT
if($_GET['action'] == "add_secao"){
	//Se a ordem ser NULL, verifica a ordem do último registro do banco e incrementa +1
	if(!$_POST['ordem']){
		$maxOrdem = $secoes->getMaxOrdem();
		$_POST['ordem'] = $maxOrdem->max_ordem +1;;
	}

	$_POST['id_curso'] = $_REQUEST['id_curso'];
	if($secoes->add())
		success("section");
	else
		error("section");
}

//UPDATE
if($_GET['action'] == "update_secao"){
	if($secoes->update($_GET['id']))
		success("section");	
	else
		error("section");
}
//UPDATE JSON AULAS
if($_GET['action'] == "update_json_secao"){
	
	$json = json_decode($_REQUEST['json_secoes']);
	$ordem = 1;
	unset($_POST['valor']);
	foreach ($json as $key) {
		$_POST['id'] = $key->id;
		$_POST['ordem'] = $ordem;
		$aulas = new Aulas();
		if($aulas->update($_POST['id'])){
			echo "1";
		}
		$ordem++;
	}


}
//UPDATE ORDEM
if($_GET['action'] == "update_secao_ordem"){
	if($secoes->update($_REQUEST['id']))
		die("1");
	else
		die("0");
}
//DELETE
if($_GET['action'] == "delete_secao"){
	if($secoes->delete($_GET['id']))
		success("section");	
	else
		error("section");
}


//===========AULAS=================//
//INSERT
if($_GET['action'] == "add_aula"){


	$oembed_endpoint = 'http://vimeo.com/api/oembed';
	// Grab the video url from the url, or use default
	$video_url = ($_GET['url']) ? $_GET['url'] : $_POST['video'];
	// Create the URLs
	$json_url = $oembed_endpoint . '.json?url=' . rawurlencode($video_url) . '&width=640';
	$xml_url = $oembed_endpoint . '.xml?url=' . rawurlencode($video_url) . '&width=640';
	// Curl helper function
	function curl_get($url) {
	    $curl = curl_init($url);
	    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	    curl_setopt($curl, CURLOPT_TIMEOUT, 30);
	    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
	    $return = curl_exec($curl);
	    curl_close($curl);
	    return $return;
	}
	// Load in the oEmbed XML
	$oembed = simplexml_load_string(curl_get($xml_url));

	$_POST['duration'] = $oembed->duration;

	if(!$_POST['ordem']){
		$maxOrdem = $aulas->getMaxOrdem();
		$_POST['ordem'] = $maxOrdem->max_ordem +1;;
	}

	if($aulas->add())
		success("aula");
	else
		error("aula");
}

//UPDATE AULA
if($_GET['action'] == "update_aula"){

	$oembed_endpoint = 'http://vimeo.com/api/oembed';
	// Grab the video url from the url, or use default
	$video_url = ($_GET['url']) ? $_GET['url'] : $_POST['video'];
	// Create the URLs
	$json_url = $oembed_endpoint . '.json?url=' . rawurlencode($video_url) . '&width=640';
	$xml_url = $oembed_endpoint . '.xml?url=' . rawurlencode($video_url) . '&width=640';
	// Curl helper function
	function curl_get($url) {
	    $curl = curl_init($url);
	    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	    curl_setopt($curl, CURLOPT_TIMEOUT, 30);
	    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
	    $return = curl_exec($curl);
	    curl_close($curl);
	    return $return;
	}
	// Load in the oEmbed XML
	$oembed = simplexml_load_string(curl_get($xml_url));

	$_POST['duration'] = $oembed->duration;

	if($aulas->update($_POST['id']))
		success("aula");
	else
		error("aula");
}


//===========INSTRUTORES=================//
//INSERT 
if($_GET['action'] == "add_instrutor"){
	if($cursosInstrutores->add())
		success("instrutor_curso");
	else
		error("instrutor_curso");	
}

if($_GET['action'] == "delete_instrutor"){
	if($cursosInstrutores->delete($_GET['id']))
		success("instrutor_curso");
	else
		error("instrutor_curso");	
}