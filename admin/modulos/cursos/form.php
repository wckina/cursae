<?php 
require_once("../../inc/header.php");
require_once("cursos.class.php");
$cursos = new Cursos();
require_once("../categorias/categorias.class.php");
$categorias = new Categorias();
$action = "add";

//Edit data
if($_GET['id']){
  $edit = true;
  $get = $cursos->get($_GET['id']);
  $action = "update";
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
                    <h4 class="page-title">Gerenciar cursos</h4>
                </div>

                <div class="col-sm-3 col-sx-12 text-right">
                     <a href="app/cursos/" class="btn btn-danger waves-effect waves-light">
                     <i class="fa fa-backward m-l-5"></i>  
                     <span>Voltar</span></a>
                </div>                    
            </div>

            <br/>

            <div class="row">
                <form action="app/cursos/action.php?action=<?php echo $action; ?>" method="post" data-parsley-validate novalidate enctype="multipart/form-data">
                <div class="col-lg-9">
                            <div class="card-box">
                            
                                <div class="form-group">
                                    <label for="nome">Nome*</label>
                                    <input type="text" name="nome" required placeholder="Informe o nome do curso" class="form-control" id="nome" value="<?php if($edit) echo $get->nome; ?>">
                                </div>         

                                <div class="form-group">
                                    <label for="slug">URL amigável*</label>
                                    <input type="text" name="slug" required class="form-control" id="slug" value="<?php if($edit) echo $get->slug; ?>">
                                </div> 

                                <div class="form-group">
                                    <label for="video_destaque">Vídeo destaque (Vimeo)*</label>
                                    <input type="text" name="video_destaque" required class="form-control" id="video_destaque" value="<?php if($edit) echo $get->video_destaque; ?>">
                                </div>                                 
   
                                <div class="form-group">
                                    <label for="id_categoria">Selecione a categoria do curso*</label>
                                    <select name="id_categoria" class="form-control" required>
                                        <option value="">Selecione</option>
                                        <?php 
                                        $getCatPai = $categorias->getListPai();
                                        foreach ($getCatPai as $showCatPai) {?>
                                        ?>
                                        <optgroup label="<?php echo $showCatPai->nome; ?>">
                                            <?php                                         
                                            $getCatFilhas = $categorias->getListFilhas($showCatPai->id);
                                            foreach ($getCatFilhas as $showCatFilhas) {?>
                                            <option <?php if($edit AND $showCatFilhas->id == $get->id_categoria) echo "selected"; ?> value="<?php echo $showCatFilhas->id; ?>"><?php echo $showCatFilhas->nome; ?></option>
                                            <?php } ?>
                                        </optgroup>     
                                        <?php } ?>                                   
                                        
                                     
                                    </select>
                                </div> 

                                                   
                                <div class="form-group">
                                    <label for="pre_requisito">Seu curso tem algum pré-requisito?</label>
                                    <textarea name="pre_requisito" class="form-control ckeditor" id="ckeditor"><?php if($edit) echo $get->pre_requisito; ?></textarea>                                    
                                </div>    

                                <div class="form-group">
                                    <label for="publico_alvo">Qual é o público Alvo?</label>
                                    <textarea name="publico_alvo" class="form-control ckeditor" id="ckeditor"><?php if($edit) echo $get->publico_alvo; ?></textarea>                                    
                                </div>

                                <div class="form-group">
                                    <label for="aprendizado">O que eles aprenderão? Ao final de seu curso, os alunos poderão?</label>
                                    <textarea name="aprendizado" class="form-control ckeditor" id="ckeditor"><?php if($edit) echo $get->aprendizado; ?></textarea>                                    
                                </div>
   
                         
                            
                                <div class="form-group text-right m-b-0">
                                    <input type="hidden" name="id" value="<?php if($edit) echo $_GET['id'];?>">
                                    <button class="btn btn-success waves-effect waves-light" type="submit">Salvar</button>
                                </div>
                            </div>
                        </div>


                    <div class="col-md-3">

                    <div class="col-md-12">
                        <div class="card-box">
                            <div><h4>Miniaura do curso</h4></div>
                            <div class="form-group">
                                <?php  
                                if($edit AND $get->thumbs){?>
                                    <img src="/admin/uploads/<?php echo $get->thumbs; ?>" class="img-responsive" style="width: 100%;">
                                <?php }else{ ?>
                                    <img src="http://placehold.it/600x390" class="img-responsive" style="width: 100%;">
                                <?php } ?>
                                <input type='file' name='thumbs' class='filestyle img-input' data-size='sm' <?php if(!$edit) echo "required";?> class="form-control">
                            </div> 
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="card-box">
                            <div><h4>Capa do curso</h4></div>
                            <div class="form-group">
                                <?php  
                                if($edit AND $get->capa){?>
                                    <img src="/admin/uploads/<?php echo $get->capa; ?>" class="img-responsive" style="width: 100%;">
                                <?php }else{ ?>
                                    <img src="http://placehold.it/1950x350" class="img-responsive" style="width: 100%;">
                                <?php } ?>
                                <input type='file' name='capa' class='filestyle img-input' data-size='sm' <?php if(!$edit) echo "required";?> class="form-control">
                            </div> 
                        </div>
                    </div>

                    <div class="card-box">
  
                        <div class="row">

                         <div class="col-md-12">
                            <div class="form-group">
                                <label for="valor">Valor individual (0 Para grátis)</label>
                                <input type="text" name="valor" data-prefix="R$ " data-thousands="." data-decimal="," placeholder="R$ 0.00" class="form-control money" id="valor" value="R$ <?php if($edit) echo number_format($get->valor, 2, ",", "."); ?>">
                            </div> 
                         </div>  
                
                        </div><!--row-->


                       

                        </div><!--cardbox-->

                    </div><!--col-->
            </form>
            </div>
            <!-- end row-->

        </div> <!-- container -->

    </div> <!-- content -->
<?php 
require_once("../../inc/scripts.php");?>

<script type="text/javascript">
    $(".filestyle").filestyle({buttonText: "Procurar"});

    //Mostra o Preview da thumbs
    function readURL(input) {

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $(input).siblings('img').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $( document ).delegate( ".img-input", "change", function() {
        readURL(this);
    });

</script>

<?php 
require_once("../../inc/footer.php");
?>