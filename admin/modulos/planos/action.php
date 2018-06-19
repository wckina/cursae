<?php 
session_start();
require_once("../../inc/restrict.php");
require_once("planos.class.php");
require_once("../configuracoes/configuracoes.class.php");
$planos = new Planos();
$configuracoes = new Configuracoes();

function success(){
	$_SESSION['acao'] = "sucesso";
	header("location:/admin/app/planos?acao=sucesso");
	exit();
}

function error(){
	$_SESSION['acao'] = "error"; 
	header("location:/admin/app/planos?acao=error");
	exit();
}

//Remove a formatação do money mask	
$formatter = new \NumberFormatter('pt_BR', \NumberFormatter::DECIMAL);
$_POST['valor'] = $formatter->parse(str_replace('R$ ', '', $_POST['valor']));


//INSERT
if($_GET['action'] == "add"){


$config = $configuracoes->get(1);
if($config->modo){
  //Modo Produção
  $token = $config->pagseguro_token_producao;
  $email = $config->pagseguro_email;
  $sandbox = false;
}else{
  //Modo Sandbox
  $token = $config->pagseguro_token_sandbox;
  $email = $config->pagseguro_email_sandbox;
  $sandbox = true;
}

require_once("../../classes/PagSeguroAssinaturas.php");
$pagseguro = new PagSeguroAssinaturas($email, $token, $sandbox);

//Cria um nome para o plano
$pagseguro->setReferencia($_POST['nome']);

//Cria uma descrição para o plano
$pagseguro->setDescricao($_POST['descricao']);

//Valor a ser cobrado a cada renovação
$pagseguro->setValor($_POST['valor']);

//De quanto em quanto tempo será realizado uma nova cobrança (MENSAL, BIMESTRAL, TRIMESTRAL, SEMESTRAL, ANUAL)

$pagseguro->setPeriodicidade($_POST['periodo']);

//=== Campos Opcionais ===//
//Após quanto tempo a assinatura irá expirar após a contratação = valor inteiro + (DAYS||MONTHS||YEARS). Exemplo, após 5 anos
//$pagseguro->setExpiracao(5, 'YEARS');

//URL para redicionar a pessoa do portal PagSeguro para uma página de cancelamento no portal
//$pagseguro->setURLCancelamento($_POST['url_cancelamento']);

//Local para o comprador será redicionado após a compra com o código (code) identificador da assinatura
//$pagseguro->setRedirectURL($_POST['url_assinatura']);		

//Máximo de pessoas que podem usar esse plano. Exemplo 10.000 pessoas podem usar esse plano
//$pagseguro->setMaximoUsuariosNoPlano(0);


//=== Cria o plano ===//
try {
    $codigoPlano = $pagseguro->criarPlano();
    $_POST['cod_plano'] = $codigoPlano;
	if($planos->add()){
		success();
	}else{
		error();
	}	

} catch (Exception $e) {
    echo "Erro: " . $e->getMessage();
}


}

//DELETE
if($_GET['action'] == "delete"){

	if($planos->delete($_GET['id'])){
		success();
	}
	else{
		error();
	}
}

//UPDATE
if($_GET['action'] == "update"){

	if($planos->update($_POST['id']))
		success();
	else
		error();
}