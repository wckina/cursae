<?php 
require_once("../../inc/header.php");
require_once("cursos.class.php");
$cursos = new Cursos();

require_once("secoes.class.php"); 
$secoes = new Secoes();
$getSecoes = $secoes->getListIdCurso($_GET['id']);

require_once("aulas.class.php"); 
$aulas = new Aulas();

$action = "add_secao";
$datatables = false;
$datepicker = false;
$chart = false;
$nestable = true;
$modal = true;
$get = $cursos->get($_GET['id']);
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
                    <h4 class="page-title">Adicionar seção para o curso <strong><?php echo $get->nome; ?></strong></h4>
                </div>


                <div class="col-sm-3 col-sx-12 text-right">
                     <a href="app/cursos" class="btn btn-danger waves-effect waves-light">
                     <i class="fa fa-backward m-l-5"></i>  
                     <span>Voltar para cursos</span></a>

                     <button class="btn-add-secao btn btn-success waves-effect waves-light" data-toggle="modal" data-target="#con-close-modal">
                     <i class="fa fa-folder-open m-l-5"></i>  
                     <span>Adicionar Seção</span>
                     </button>

                </div>   
            </div><!--row-->

            <br/>

            <div class="row"> 
                <div class="col-lg-12"> 
                    <div class="panel-group" id="accordion-<?php echo $showSecoes->id; ?>"> 
                        <?php 
                        //Verifica se já existe seções
                        if(!$getSecoes){?>

                        <div class="card-box">
                            <div class="row">
                                 <div class="col-md-12">
                                    <h3>Nenhuma seção cadastrada para esse curso</h3>
                                 </div>                        
                            </div><!--row-->
                        </div><!--cardbox-->

                        <?php } ?>

                        <?php foreach ($getSecoes as $showSecoes) {
                            $duration = $aulas->getDuracao($showSecoes->id);
                        ?>
                        <div class="panel panel-default"> 
                            <div class="panel-heading"> 
                                <div class="row">
                                    <div class="col-md-7">
                                    <h4 class="panel-title"> 
                                        <a data-toggle="collapse" data-parent="#accordion-<?php echo $showSecoes->id; ?>" href="#collapse<?php echo $showSecoes->id; ?>" aria-expanded="false" class="collapsed">
                                            <h4><b><?php echo $showSecoes->nome; ?> - <i class="ion-android-clock"></i> <?php echo gmdate("H:i:s", $duration->duracao_total); ?></h4>
                                        </a> 
                                    </h4>                                     
                                    </div>
                                    <div class="col-md-1 pull-right">
                                        <input type="number" name="ordem" value="<?php echo $showSecoes->ordem; ?>" class="form-control update-ordem" id="<?php echo $showSecoes->id; ?>">
                                    </div>
                                    <div class="col-md-4 pull-right text-right">
                                        <div>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-purple dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false">Ação <span class="caret"></span></button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li><a href="app/cursos/aulas/<?php echo $get->id; ?>/<?php echo $showSecoes->id; ?>"><i class="glyphicon glyphicon-facetime-video"></i> Adicionar aula</a></li>
                                                        <li><a id="<?php echo $showSecoes->id; ?>" href="#" class="btn-alterar-secao"  data-toggle="modal" data-target="#con-close-modal"><i class="glyphicon glyphicon-pencil"></i> Alterar</a></li>
                                                        <li><a class="confirm" href="app/cursos/action.php?action=delete_secao&id=<?php echo $showSecoes->id; ?>&id_curso=<?php echo $_GET['id']; ?>"><i class="glyphicon glyphicon-trash"></i> Excluir</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="#">
                                                            <div class="fileupload">
                                                                <span><i class="ion-upload m-r-5"></i>Anexar material (.zip)</span>
                                                                <input type="file" class="upload">
                                                            </div>     
                                                            </a>                                                       
                                                        </li>
                                                    </ul>
                                                </div>

                                        </div>
                                    </div>                                
                                </div><!--row-->
                            </div> 
                            <div id="collapseOne<?php echo $showSecoes->id; ?>" class="panel-collapse collapse in"> 
                                <div class="panel-body">
                                <?php 
                                $getAulas = $aulas->getListIdSecao($showSecoes->id);
                                if(!$getAulas){
                                    echo "<h5>Nenhuma aula para essa seção.</h5>";
                                }
                                ?>
                                    <div class="custom-dd-empty dd nestable_list">
                                        <ol class="dd-list ol-secoes" id="<?php echo $showSecoes->id; ?>">    
                                            <?php foreach ($getAulas as $showAulas) { ?>
                                            <li class="dd-item dd3-item" data-id="<?php echo $showAulas->id; ?>">

                                                <div class="dd-handle dd3-handle"></div>
                                                <div class="dd3-content">
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                           <h4 class="m-t-0 header-title"><?php echo $showAulas->nome; ?></h4>
                                                        </div>
                                                        <div class="col-md-4 text-right pull-right">
                                                            <a class="btn btn-danger waves-effect waves-light btn-sm" href="app/cursos/aulas/delete/<?php echo $showAulas->id; ?>/<?php echo $_GET['id']; ?>"><i class="glyphicon glyphicon-trash confirm"></i></a>   
                                                            <a class="btn btn-success waves-effect waves-light btn-sm" href="app/cursos/aulas/edit/<?php echo $showSecoes->id;?>/<?php echo $_GET['id']; ?>/<?php echo $showAulas->id; ?>"><i class="glyphicon glyphicon-pencil"></i></a>
                                                            <a class="btn btn-primary waves-effect waves-light btn-sm" href="app/cursos/aulas/edit/<?php echo $showSecoes->id;?>/<?php echo $_GET['id']; ?>/<?php echo $showAulas->id; ?>?attach=1"><i class="ion-upload"></i></a>                                                            
                                                            <span class="btn btn-purple btn-custom waves-effect waves-light btn-sm"><i class="ion-android-clock"></i> <?php echo gmdate("H:i:s", $showAulas->duration); ?></span>

                                                        </div>
                                                    </div>                
                                                </div>
                                            </li>
                                            <?php } ?>
                                        </ol>
                                    </div>
                                   
                                </div> 
                            </div> 
                        </div>
                        <br/>
                        <?php } ?>
                    </div> 
                </div> 
            </div> <!-- end row -->


        </div> <!-- container -->

    </div> <!-- content -->


       <div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog"> 
                <form method="post" id="form-secao" action="#" data-parsley-validate novalidate enctype="multipart/form-data">            
                    <div class="modal-content"> 
                        <div class="modal-header"> 
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
                            <h4 class="modal-title">Adicionar Seção</h4> 
                        </div> 
                        <div class="modal-body"> 
                            <div class="row"> 
                                    <div class="col-md-12"> 
                                        <div class="form-group"> 
                                            <label for="section-name" class="control-label">Nome*</label> 
                                            <input type="text" class="form-control" id="section-name" name="nome" placeholder="Digite o título da seção" required> 
                                        </div> 
                                    </div> 
                                    <div class="col-md-12"> 
                                        <div class="form-group"> 
                                            <label for="section-description" class="control-label">Descrição</label> 
                                            <textarea id="section-description" name="descricao" placeholder="O que os alunos poderão fazer ao final desta seção?*" class="form-control"></textarea>
                                            <input type="hidden" name="id_curso" value="<?php echo $_GET['id']; ?>">
                                        </div> 
                                    </div> 
                               
                            </div> 
                        </div> 
                        <div class="modal-footer"> 
                            <button type="submit" class="btn btn-success waves-effect waves-light btn-save-section">Salvar</button>
                        </div> 
                    </div> 
                </form>
            </div>
        </div><!-- /.modal -->    


    


<?php 
require_once("../../inc/scripts.php");?>
<script type="text/javascript">
!function($) {
    "use strict";

    var Nestable = function() {};

    Nestable.prototype.updateOutput = function (e) {
        var list = e.length ? e : $(e.target),
            output = list.data('output');

            if (window.JSON) {
               var log = JSON.stringify(list.nestable('serialize'));
               console.log(log);
               console.log('aqui')
               //Salva na tabela seções a ordem das aulas
               var section_id = $(".ol-secoes").attr("id");
               $.get('modulos/cursos/action.php?action=update_json_secao&id='+section_id+'&json_secoes='+log,{}, function(e){
               })              
            } else {
               console.log('JSON browser support required for this demo.');
            }
    },
    //init
    Nestable.prototype.init = function() {
    this.updateOutput        
        // activate Nestable for list
        $('.nestable_list').nestable({
            group: 1,
            maxDepth: 1,
        }).on('change', this.updateOutput);

        // output initial serialised data
        //this.updateOutput($('.nestable_list').data('output', $('.nestable_list_output')));

        
    },
    //init
    $.Nestable = new Nestable, $.Nestable.Constructor = Nestable
}(window.jQuery),

//initializing 
function($) {
    "use strict";
    $.Nestable.init();
}(window.jQuery);


$(function(){
    
    $(".btn-alterar-secao").on('click',function(){
        var id = $(this).attr("id");
       $.get('modulos/cursos/action.php?action=get_secao&id='+id,{}, function(data){
            var data = JSON.parse(data);
            console.log(data)
            $("#section-name").val(data.nome);
            $("#section-description").val(data.descricao);
            $("#form-secao").attr("action",'app/cursos/action.php?action=update_secao&id='+id);
       })         
    })    

    $(".btn-add-secao").on('click',function(){
            $("#form-secao").attr("action",'app/cursos/action.php?action=add_secao');
            $("#section-name").val("");
            $("#section-description").val("");            
    })

               
    $(".update-ordem").on("change",function(){
        var ordem = $(this).val();
        var id = $(this).attr("id");
        $.post("app/cursos/action.php?action=update_secao_ordem", {"ordem":ordem,"id":id}, function(e){
            if(e == 1){
                 $.Notification.notify('success','right top','Sucesso!', 'A ordem foi alterada com sucesso!')
             }else{
                 $.Notification.notify('error','right top','Erro!', 'Whoops! Ocorreu ao alterer a ordem, tente novamente')
             }
        })
    })    

})


</script>

<?php 
require_once("../../inc/footer.php");
?>