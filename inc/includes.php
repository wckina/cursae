<?php 
error_reporting(0);
session_start();
//session_destroy();
require_once("admin/modulos/cursos/cursos.class.php");
require_once("admin/modulos/instrutores/instrutores.class.php");
require_once("admin/modulos/cursos/cursos_instrutores.class.php");
require_once("admin/modulos/cursos/aulas_estudantes.class.php");
require_once("admin/modulos/categorias/categorias.class.php");
require_once("admin/modulos/cursos/secoes.class.php");
require_once("admin/modulos/cursos/aulas.class.php");
require_once("admin/modulos/cursos/materiais_aulas.class.php");
require_once("admin/modulos/estudantes/estudantes.class.php");
$cursos = new Cursos();
$instrutores = new Instrutores();
$cursos_instrutores = new CursosInstrutores();
$aulas_estudantes = new AulasEstudantes();
$categorias = new Categorias();
$secoes = new Secoes();
$aulas = new Aulas();
$estudantes = new Estudantes();
$materiaisAulas = new MateriaisAulas();

//Salva a url do curso atual
if($course){
	$_SESSION['play_course'] = $_SERVER['REQUEST_URI'];
}