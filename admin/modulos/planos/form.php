<?php 
require_once("../../inc/header.php");
require_once("planos.class.php");
$planos = new Planos();
$action = "add";


//Edit data
if($_GET['id']){
  $edit = true;
  $get = $planos->get($_GET['id']);
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
                    <h4 class="page-title">Gerenciar planos</h4>
                </div>

                <div class="col-sm-3 col-sx-12 text-right">
                     <a href="app/planos/" class="btn btn-danger waves-effect waves-light">
                     <i class="fa fa-backward m-l-5"></i>  
                     <span>Voltar</span></a>
                </div>                    
            </div>

            <br/>

            <div class="row">
 
               <form action="app/planos/action.php?action=<?php echo $action; ?>" method="post" data-parsley-validate novalidate enctype="multipart/form-data">

                <div class="col-md-12">

                    <div class="card-box">
  
                                <div class="row">

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="nome">Nome</label>
                                            <input type="text" name="nome" required class="form-control" id="nome" value="<?php if($edit) echo $get->nome; ?>">
                                        </div> 
                                    </div>


                                     <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="valor">Valor</label>
                                            <input type="text" name="valor" data-prefix="R$ " data-thousands="." data-decimal="," placeholder="R$ 0.00" class="form-control money" id="valor" value="R$ <?php if($edit) echo number_format($get->valor, 2, ",", "."); ?>">
                                        </div> 
                                     </div>

                                     <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="valor">Periodicidade</label>
                                            <select name="periodo" class="form-control" required>
                                                <option <?php if($edit AND $get->periodo == "WEEKLY") echo "selected";?> value="WEEKLY">SEMANAL</option>
                                                <option <?php if($edit AND $get->periodo == "MONTHLY") echo "selected";?> value="MONTHLY">MENSAL</option>
                                                <option <?php if($edit AND $get->periodo == "BIMONTHLY") echo "selected";?> value="BIMONTHLY">BIMESTRAL</option>
                                                <option <?php if($edit AND $get->periodo == "TRIMONTHLY") echo "selected";?> value="TRIMONTHLY">TRIMESTRAL</option>
                                                <option <?php if($edit AND $get->periodo == "SEMIANNUALLY") echo "selected";?> value="SEMIANNUALLY">SEMESTRAL</option>
                                                <option <?php if($edit AND $get->periodo == "YEARLY") echo "selected";?> value="YEARLY">ANUAL</option>
                                            </select>
                                        </div> 
                                     </div>  

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="descricao">Descrição</label>
                                            <textarea required name="descricao" class="form-control"><?php if($edit) echo $get->descricao; ?></textarea>
                                        </div> 
                                    </div>                                     

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="url_assinatura">URL de redirecionamento - Adesão da assinatura</label>
                                             <input type="text" name="url_assinatura" required class="form-control" id="url_assinatura" value="<?php if($edit) echo $get->url_assinatura; ?>">
                                        </div> 
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="url_cancelamento">URL de redirecionamento - Cancelamento da assinatura</label>
                                             <input type="text" name="url_cancelamento" required class="form-control" id="url_cancelamento" value="<?php if($edit) echo $get->url_cancelamento; ?>">
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