<?php 
require_once("../../inc/header.php");
require_once("instrutores.class.php");
$instrutores = new Instrutores();
$action = "add";

//Edit data
if($_GET['id']){
  $edit = true;
  $get = $instrutores->get($_GET['id']);
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
                    <h4 class="page-title">Gerenciar Instrutores</h4>
                </div>

                <div class="col-sm-3 col-sx-12 text-right">
                     <a href="app/instrutores/" class="btn btn-danger waves-effect waves-light">
                     <i class="fa fa-backward m-l-5"></i>  
                     <span>Voltar</span></a>
                </div>                    
            </div>

            <br/>

            <div class="row">
                <div class="col-lg-9">
                    <div class="card-box">
                              <form action="app/instrutores/action.php?action=<?php echo $action; ?>" method="post" data-parsley-validate novalidate enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="nome">Nome*</label>
                                    <input type="text" name="nome" required placeholder="Informe o nome do instrutor" class="form-control" id="nome" value="<?php if($edit) echo $get->nome; ?>">
                                </div>

                                <div class="form-group">
                                    <label for="sobrenome">Sobrenome*</label>
                                    <input type="text" name="sobrenome" required placeholder="Informe o sobrenome do instrutor" class="form-control" id="sobrenome" value="<?php if($edit) echo $get->sobrenome; ?>">
                                </div>       

                                <div class="form-group">
                                    <label for="email">Endereço de e-mail*</label>
                                    <input type="email" name="email" required placeholder="Informe o e-mail" class="form-control" id="email" value="<?php if($edit) echo $get->email; ?>">
                                </div>                                

                                <div class="form-group">
                                    <label for="profissao">Profissão ou Título*</label>
                                    <input type="text" name="profissao" required class="form-control" id="profissao" value="<?php if($edit) echo $get->profissao; ?>">
                                </div>

                                <div class="form-group">
                                    <label for="profissao">Biografia*</label>
                                    <textarea class="form-control" id="biografia" name="biografia"><?php if($edit) echo $get->biografia; ?></textarea>
                                </div>                                
                                
                                <div class="form-group">
                                    <label for="senha">Senha*</label>
                                    <input name="senha" id="senha" type="password" placeholder="Senha" <?php if(!$edit) echo "required";?> class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="senha">Repita a Senha*</label>
                                    <input name="r_senha" id="senha" type="password" placeholder="Repita a Senha" <?php if(!$edit) echo "required";?> class="form-control">
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
                            <div><h4>Selecione uma foto</h4></div>
                            <div class="form-group">
                                <?php  
                                if($edit AND $get->foto){?>
                                    <img src="/admin/uploads/<?php echo $get->foto; ?>" class="img-responsive" style="width: 100%;">
                                <?php }else{ ?>
                                    <img src="http://placehold.it/400x400" class="img-responsive">
                                <?php } ?>
                                <input type='file' required name='foto' class='filestyle img-input' data-size='sm' <?php if(!$edit) echo "required";?> class="form-control">
                            </div> 
                        </div>
                    </div>

                    <div class="card-box">
  
                        <div class="row">

                             <div class="col-md-12">
                                <div class="form-group">
                                    <label for="website">Website</label>
                                    <input type="text" name="website" class="form-control" value="<?php if($edit) echo $get->website; ?>">
                                </div> 
                             </div> 

                             <div class="col-md-12">
                                <div class="form-group">
                                    <label for="googleplus">Google Plus</label>
                                    <input type="text" name="googleplus" class="form-control" value="<?php if($edit) echo $get->googleplus; ?>">
                                </div> 
                             </div> 

                             <div class="col-md-12">
                                <div class="form-group">
                                    <label for="twitter">Twitter</label>
                                    <input type="text" name="twitter" class="form-control" value="<?php if($edit) echo $get->twitter; ?>">
                                </div> 
                             </div> 
                             
                             <div class="col-md-12">
                                <div class="form-group">
                                    <label for="facebook">Facebook</label>
                                    <input type="text" name="facebook" class="form-control" value="<?php if($edit) echo $get->facebook; ?>">
                                </div> 
                             </div>        
                                                   
                             <div class="col-md-12">
                                <div class="form-group">
                                    <label for="linkedin">Linkedin</label>
                                    <input type="text" name="linkedin" class="form-control" value="<?php if($edit) echo $get->linkedin; ?>">
                                </div> 
                             </div>     

                             <div class="col-md-12">
                                <div class="form-group">
                                    <label for="youtube">Youtube</label>
                                    <input type="text" name="youtube" class="form-control" value="<?php if($edit) echo $get->youtube; ?>">
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

    //Mostra o Preview da Foto
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