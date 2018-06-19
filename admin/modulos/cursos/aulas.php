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


require_once("materiais_aulas.class.php"); 
$materiaisAulas = new MateriaisAulas();
$getListMateriais = $materiaisAulas->getListIdAula($_GET['id']);

//Edit data
if($_GET['id']){
  $edit = true;
  $get = $aulas->get($_GET['id']);
  $action = "update_aula";
}else{
    $get = $cursos->get($_GET['id']);
}

//Deleta anexo da aula
if($_GET['delete']){
    $materiaisAulas->delete($_GET['delete']);
    $url = "/admin/app/cursos/aulas/edit/".$_REQUEST['id_secao']."/".$_REQUEST['id_curso']."/".$_REQUEST['id'];
    header("location:$url");
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
                    <h4 class="page-title">Gerenciar aulas</h4>
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
                            <label for="nome">Nome da aula*</label>
                            <input type="text" name="nome" required placeholder="Informe o nome da aula" class="form-control" id="nome" value="<?php if($edit) echo $get->nome; ?>">
                        </div>         
                                  

                        <div class="form-group">
                            <label for="video">Vídeo (Vimeo ou Youtube)*</label>
                            <input type="text" name="video" required placeholder="Informe a URL do vídeo do vimeo ou youtube" class="form-control" id="video" value="<?php if($edit) echo $get->video; ?>">
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

            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box table-responsive">
                        <table id="datatable-responsive" class="table table-hover table-bordered mails dt-responsive nowrap table-actions-bar" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>Nome:</th>
                                <th width="140">Ação</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php foreach ($getListMateriais as $showMateriais) {?>
                            <tr>
                                <td><a target="_blank" href="/admin/uploads/courses_attachments/<?php echo $showMateriais->material;?>"><?php echo $showMateriais->material;?></a></td>
                                <td>
                                <a href="app/cursos/aulas/edit/<?php echo $_REQUEST['id_secao'] ?>/<?php echo $_REQUEST['id_curso'] ?>/<?php echo $_REQUEST['id'] ?>?delete=<?php echo $showMateriais->id; ?>" class="table-action-btn confirm"><i class="md md-close"></i></a>
                                </td>
                            </tr>                        
                            <?php } ?>
                            
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>                 

            <div class="row">
                <div class="col-md-12 portlets">
                    <div class="m-b-30">
                        <form action="app/cursos/action.php?action=upload_files&id_aula=<?php echo $get->id; ?>" class="dropzone" id="myAwesomeDropzone">
                          <div class="fallback">
                            <input name="file" type="file" multiple />
                          </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- end row-->                
    

        
        </div> <!-- container -->

    </div> <!-- content -->


<?php 
require_once("../../inc/scripts.php");?>

<script type="text/javascript">

    Dropzone.options.myAwesomeDropzone = {
      paramName: "file", // The name that will be used to transfer the file
      maxFilesize: 10, // MB
      dictDefaultMessage: "Arraste e solte aqui os anexos",
      dictFallbackMessage: "Seu navegador não suporta carregamentos de arquivos drag'n'drop.",
      dictFileTooBig: "Arquivo muito grande ({{filesize}}MiB). Tamanho máximo permitido: {{maxFilesize}}MiB.",
      dictInvalidFileType: "Não é possível carregar arquivos desse tipo.",
      dictCancelUpload: "Cancelar upload",
      dictCancelUploadConfirmation: "Realmente deseja cancelar o upload?",
      dictRemoveFile: "Remover arquivo",

      init: function () {
            // Set up any event handlers
            this.on('queuecomplete', function () {
                location.reload();
            });
       }

    };

</script>

<?php 
require_once("../../inc/footer.php");
?>