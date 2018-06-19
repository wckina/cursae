<?php 
require_once("../../inc/header.php");
require_once("newsletter.class.php");
$newsletter = new Newsletter();
$action = "add";


//Edit data
if($_GET['id']){
  $edit = true;
  $get = $newsletter->get($_GET['id']);
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
                    <h4 class="page-title">Gerenciar Newsletter</h4>
                </div>

                <div class="col-sm-3 col-sx-12 text-right">
                     <a href="app/newsletter/" class="btn btn-danger waves-effect waves-light">
                     <i class="fa fa-backward m-l-5"></i>  
                     <span>Voltar</span></a>
                </div>                    
            </div>

            <br/>

            <div class="row">
 
               <form action="app/newsletter/action.php?action=<?php echo $action; ?>" method="post" data-parsley-validate novalidate enctype="multipart/form-data">

                <div class="col-md-12">

                    <div class="card-box">
  
                                <div class="row">

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="nome">Nome</label>
                                            <input type="text" name="nome" required class="form-control" id="nome" value="<?php if($edit) echo $get->nome; ?>">
                                        </div> 
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="email">E-mail</label>
                                            <input type="text" name="email" required class="form-control" id="email" value="<?php if($edit) echo $get->email; ?>">
                                        </div> 
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="data">Data de assinatura</label>
                                            <input disabled type="text" name="data" class="form-control" id="data" value="<?php if($edit) echo $get->data; ?>">
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