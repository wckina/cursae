<?php 
require_once("../../inc/header.php");
require_once("emails.class.php");
$emails = new Emails();
$action = "add";

require_once("../produtos/produtos.class.php");
$produtos = new Produtos();
$getProdutos = $produtos->getList();

//Edit data
if($_GET['id']){
  $edit = true;
  $get = $emails->get($_GET['id']);
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
                    <h4 class="page-title">Gerenciar templates de e-mail</h4>
                </div>

                <div class="col-sm-3 col-sx-12 text-right">
                     <a href="app/emails/" class="btn btn-danger waves-effect waves-light">
                     <i class="fa fa-backward m-l-5"></i>  
                     <span>Voltar</span></a>
                </div>                    
            </div>

            <br/>

            <div class="row">
 
               <form action="app/emails/action.php?action=<?php echo $action; ?>" method="post" data-parsley-validate novalidate enctype="multipart/form-data">

                <div class="col-md-12">

                    <div class="card-box">
  
                                <div class="row">

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="nome">Nome do template*</label>
                                            <input type="text" name="nome" required class="form-control" id="nome" value="<?php if($edit) echo $get->nome; ?>">
                                        </div> 
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="assunto">Assunto*</label>
                                            <input type="text" name="assunto" required class="form-control" id="assunto" value="<?php if($edit) echo $get->assunto; ?>">
                                        </div> 
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="id_produto">Vincular com qual produto?*</label>
                                            <select name="id_produto" class="form-control">
                                                <?php foreach ($getProdutos as $showProdutos) {?>
                                                <option <?php if($edit AND $showProdutos->id == $get->id_produto) echo "selected"; ?> value="<?php echo $showProdutos->id ?>"><?php echo $showProdutos->nome." - R$ ".$showProdutos->itemAmount; if(!$showProdutos->status) echo " (Desabilitado)"; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div> 
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="conteudo">Conteúdo</label>
                                            <textarea name="conteudo" class="form-control ckeditor" id="ckeditor"><?php if($edit) echo $get->conteudo; ?></textarea>
                                        </div> 
                                    </div>
                                
                                    <div class="col-md-12">
                                        <div class="form-group text-right m-b-0">   
                                            <?php if($edit){?> 
                                            <input type="hidden" name="id" value="<?php if($edit) echo $_GET['id'];?>">
                                            <?php } ?>
                                            <button class="btn btn-success waves-effect waves-light" type="submit">Salvar</button>
                                        </div>
                                    </div>

                                </div>
                       

                        </div><!--cardbox-->

                    </div><!--col--> 


            </form>
            </div><!--end row-->

        </div> <!-- container -->

    </div> <!-- content -->

<?php 
require_once("../../inc/scripts.php");
require_once("../../inc/footer.php");
?>