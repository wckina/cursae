<?php 
session_start();
require_once("../../inc/header.php");
require_once("configuracoes.class.php");
$configuracoes = new Configuracoes();
$action = "add";

//Edit data
if($_GET['id']){
  $edit = true;
  $get = $configuracoes->get($_GET['id']);
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
                    <h4 class="page-title">Gerenciar configuracoes</h4>
                </div>                 
            </div>

            <br/>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card-box">
  
                            <form action="app/configuracoes/action.php?action=<?php echo $action; ?>" method="post" data-parsley-validate novalidate>


                                <div class="row">

                                 <div class="col-md-6">                      
                                    <div class="form-group">
                                        <label for="pagseguro_email">E-mail do pagseguro (AMBIENTE REAL)</label>
                                        <input required type="text" name="pagseguro_email" class="form-control" id="pagseguro_email" value="<?php if($edit) echo $get->pagseguro_email; ?>">
                                    </div> 
                                 </div> 

                                 <div class="col-md-6">                      
                                    <div class="form-group">
                                        <label for="pagseguro_token_producao">Pagseguro Token (AMBIENTE REAL)</label>
                                        <input required type="text" name="pagseguro_token_producao" class="form-control" id="pagseguro_token_producao" value="<?php if($edit) echo $get->pagseguro_token_producao; ?>">
                                    </div> 
                                 </div> 

                                 <div class="col-md-6">                      
                                    <div class="form-group">
                                        <label for="pagseguro_email_sandbox">E-mail do pagseguro (AMBIENTE DE TESTES)</label>
                                        <input required type="text" name="pagseguro_email_sandbox" class="form-control" id="pagseguro_email_sandbox" value="<?php if($edit) echo $get->pagseguro_email_sandbox; ?>">
                                    </div> 
                                 </div>                                  

                                 <div class="col-md-6">                      
                                    <div class="form-group">
                                        <label for="pagseguro_token_sandbox">Pagseguro Token (AMBIENTE DE TESTES)</label>
                                        <input required type="text" name="pagseguro_token_sandbox" class="form-control" id="pagseguro_token_sandbox" value="<?php if($edit) echo $get->pagseguro_token_sandbox; ?>">
                                    </div> 
                                 </div> 

                                 <div class="col-md-4">                      
                                    <div class="form-group">
                                        <label for="modo">Você está em qual ambiente?</label>
                                        <select name="modo" class="form-control">
                                            <option <?php if($edit AND $get->modo == 1) echo "selected";?> value="1">AMBIENTE DE PRODUÇÃO</option>
                                            <option <?php if($edit AND $get->modo == 0) echo "selected";?> value="0">AMBIENTE DE TESTES</option>
                                        </select>
                                    </div> 
                                 </div> 
  
                                
                                <div class="row">                            
                                <div class="col-md-12">
                                    <div class="form-group text-right m-b-0">
                                        <input type="hidden" name="id" value="<?php if($edit) echo $_GET['id'];?>">
                                        <button class="btn btn-success waves-effect waves-light" type="submit">Salvar</button>
                                    </div>
                                </div>
                                </div><!--row-->



                                
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