<?php 
session_start();
require_once("../../inc/header.php");
require_once("cursos.class.php");
$datatables = false;
$cursos = new Cursos();
$get = $cursos->getList();
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
                        <h4 class="page-title">Gerenciar cursos</h4>
                    </div>

                    <div class="col-sm-3 col-sx-12 text-right">
                         <a href="app/cursos/add" class="btn btn-purple waves-effect waves-light">
                         <i class="fa fa-plus m-l-5"></i> 
                         <span>Adicionar</span></a>
                    </div>                    

                </div>

                <div class="row">

                   <?php foreach ($get as $show) {?>
                    <div class="col-sm-12 col-lg-4 col-md-6 desktops">
                        <div class="product-list-box thumb">
                            <a href="app/cursos/edit/<?php echo $show->id; ?>" class="image-popup">
                                <img src="/admin/uploads/<?php echo $show->thumbs;?>" style="width: 100%;">
                            </a>

                            <div class="product-action">
                                <a href="app/cursos/edit/<?php echo $show->id; ?>" class="btn btn-success btn-sm"><i class="md md-mode-edit"></i></a>
                                <a href="app/cursos/delete/<?php echo $show->id; ?>" class="btn btn-danger btn-sm confirm"><i class="md md-close"></i></a>
                            </div>

                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="detail">
                                        <h4 class="m-t-0"><a href="" class="text-dark"><?php echo $show->nome;?></a> </h4>
                                        <span class="label label-success">R$ <?php echo number_format($show->valor, 2, ",", ".");?></span>
                                        <span class="label label-success">Duração: 
                                        <?php 
                                        $duration = $cursos->getDuracao($show->id);
                                        echo gmdate("H:i:s", $duration->duracao_total); ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-sm-4 pull-right text-right">
                                    <br/>
                                    <div class="form-group">
                                        <label for="ativo">Status do Curso</label>
                                        <input <?php if($show->privacidade == "PUBLICADO") echo "checked"; ?> id="<?php echo $show->id; ?>" class="privacidade" type="checkbox" data-plugin="switchery" data-color="#81c868"  data-secondary-color="#f05050" name="privacidade" />
                                    </div>                                
                                </div>
                            </div><!--row-->

                            <div>
                                <br/>
                                <a href="app/cursos/secoes/<?php echo $show->id; ?>" class="btn btn-block btn-primary btn-custom waves-effect waves-light"><i class="fa fa-file-video-o m-r-5"></i><span>Currículo</span></a>                                
                                <a href="app/cursos/instrutores/<?php echo $show->id; ?>" class="btn btn-block btn-primary btn-custom waves-effect waves-light"><i class="fa fa-user-plus m-r-5"></i><span>Instrutores</span></a>                                
                                <a href="" class="btn btn-block btn-primary btn-custom waves-effect waves-light"><i class="fa fa-users m-r-5"></i><span>Alunos (0)</span></a>                               
                            </div>

                        </div>
                        
                    </div>
                    <?php } ?>

                </div>
                <!-- end row -->

                </div> <!-- container -->

            </div> <!-- content -->

<?php 
require_once("../../inc/scripts.php");?>

<script type="text/javascript">
    $(".privacidade").on("change",function(){
        var id = $(this).attr("id");

        $.get("app/cursos/action.php?action=update_privacidade&id="+id, {}, function(e){
            if(e == 1){
                 $.Notification.notify('success','right top','Sucesso!', 'Status alterado com sucesso');
             }else if(e == 0){
                 $.Notification.notify('error','right top','Erro!', 'Ocorreu um erro temporário, entre em contato com o administrador');
             }else if(e == 2){
                 $.Notification.notify('error','right top','Erro!', 'Você precisa vincular no mínimo 1 instrutor para o curso antes de publicar');
             }
        })

    })
</script>

<?php
require_once("../../inc/footer.php");
?>