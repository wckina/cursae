<?php 
require_once("../../inc/header.php");
require_once("usuarios.class.php");
$usuarios = new Usuarios();
$action = "add";

//Edit data
if($_GET['id']){
  $edit = true;
  $get = $usuarios->get($_GET['id']);
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
                    <h4 class="page-title">Gerenciar usuários</h4>
                </div>

                <div class="col-sm-3 col-sx-12 text-right">
                     <a href="app/usuarios/" class="btn btn-danger waves-effect waves-light">
                     <i class="fa fa-backward m-l-5"></i>  
                     <span>Voltar</span></a>
                </div>                    
            </div>

            <br/>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card-box">
                            <form action="app/usuarios/action.php?action=<?php echo $action; ?>" method="post" data-parsley-validate novalidate>
                                <div class="form-group">
                                    <label for="nome">Nome*</label>
                                    <input type="text" name="nome" required placeholder="Informe o nome do usuário" class="form-control" id="nome" value="<?php if($edit) echo $get->nome; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="email">Endereço de e-mail*</label>
                                    <input type="email" name="usuario" required placeholder="Informe o e-mail" class="form-control" id="usuario" value="<?php if($edit) echo $get->usuario; ?>">
                                </div>
                                
                                <div class="form-group">
                                    <label for="senha">Senha*</label>
                                    <input name="senha" id="senha" type="password" placeholder="Senha" <?php if(!$edit) echo "required";?> class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="senha">Repita a Senha*</label>
                                    <input name="r_senha" id="senha" type="password" placeholder="Repita a Senha" <?php if(!$edit) echo "required";?> class="form-control">
                                </div>
                              
                                <div class="form-group">
                                    <label for="notificar">Receber notificações do sistema?</label>
                                    <br/>
                                    <input <?php if($edit AND $get->notificar) echo "checked"; ?> <?php if(!$edit) echo "checked"; ?> id="notificar" type="checkbox" data-plugin="switchery" data-color="#81c868"  data-secondary-color="#333333" name="notificar" />
                                </div>
                                                          
                            
                                <div class="form-group text-right m-b-0">
                                    <input type="hidden" name="id" value="<?php if($edit) echo $_GET['id'];?>">
                                    <button class="btn btn-success waves-effect waves-light" type="submit">Salvar</button>
                                </div>
                                
                            </form>
                    </div>
                </div>
            </div>
            <!-- end row-->

        </div> <!-- container -->

    </div> <!-- content -->
<?php 
require_once("../../inc/scripts.php");
require_once("../../inc/footer.php");
?>