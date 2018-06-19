<?php 
ini_set("display_errors",0);
$action = "add_aula";
$datatables = false;
$datepicker = false;
$chart = false;
$nestable = false;
$modal = false;
require_once("../../inc/header.php");
require_once("cursos.class.php");
$cursos = new Cursos();

require_once("secoes.class.php"); 
$secoes = new Secoes();
$getSecao = $secoes->get($_GET['id_secao']);

require_once("aulas.class.php"); 
$aulas = new Aulas();

//Edit data
if($_GET['id']){
  $edit = true;
  $get = $aulas->get($_GET['id']);
  $action = "update_aula";
}else{
    $get = $cursos->get($_GET['id']);
}
?>

<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">
            
            <div class="row">
                <div class="col-sm-9 col-sx-12">
                    <h4 class="page-title">Gerenciar materiais</h4>
                </div>
 

                <div class="col-sm-3 col-sx-12 text-right">
                     <a href="app/cursos/secoes/<?php echo $_GET['id_curso']; ?>" class="btn btn-danger waves-effect waves-light">
                     <i class="fa fa-backward m-l-5"></i>  
                     <span>Voltar para seções</span></a>
                </div>   
            </div>

            <br/>

            <div class="row">
                <form action="app/cursos/action.php?action=<?php echo $action; ?>" method="post" data-parsley-validate novalidate enctype="multipart/form-data">
                <div class="col-lg-12">
                    <div class="card-box">
                    
                        <div class="form-group">
                            <label for="nome">Nome do material*</label>
                            <input type="text" name="nome" required placeholder="Informe o nome do material" class="form-control" id="nome" value="<?php if($edit) echo $get->nome; ?>">
                        </div>         
                                  

                        <div class="form-group">
                            <label for="conteudo">Conteúdo em texto (Exibido antes do vídeo)</label>
                            <textarea name="conteudo" class="form-control ckeditor" id="ckeditor"><?php if($edit) echo $get->conteudo; ?></textarea>
                        </div>                                  

                        <div class="form-group text-right m-b-0">
                            <input type="hidden" name="id_secao" value="<?php echo $_GET['id_secao']; ?>">
                            <input type="hidden" name="id_curso" value="<?php echo $_GET['id_curso']; ?>">
                            <input type="hidden" name="id" value="<?php if($edit) echo $_GET['id'];?>">
                            <button class="btn btn-success waves-effect waves-light" type="submit">Salvar</button>
                        </div>

                    </div>
                </div>
                </form>
            </div>
            <!-- end row-->

        
        </div> <!-- container -->

    </div> <!-- content -->


<?php 
require_once("../../inc/scripts.php");
require_once("../../inc/footer.php");
?>