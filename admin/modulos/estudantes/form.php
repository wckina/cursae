<?php 
require_once("../../inc/header.php");
require_once("estudantes.class.php");
$estudantes = new Estudantes();
$action = "add";

require_once("../produtos/produtos.class.php");
$produtos = new Produtos();
$getProdutos = $produtos->getList();

require_once("../codigos/codigos.class.php");
$codigos = new Codigos();
$getCodigos = $codigos->getList();

//Edit data
if($_GET['id']){
  $edit = true;
  $get = $estudantes->get($_GET['id']);
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
                    <h4 class="page-title">Gerenciar estudantes</h4>
                </div>

                <div class="col-sm-3 col-sx-12 text-right">
                     <a href="app/estudantes/" class="btn btn-danger waves-effect waves-light">
                     <i class="fa fa-backward m-l-5"></i>  
                     <span>Voltar</span></a>
                </div>                    
            </div>

            <br/>

            <div class="row">
 
               <form action="app/estudantes/action.php?action=<?php echo $action; ?>" method="post" data-parsley-validate novalidate enctype="multipart/form-data">

                <div class="col-md-12">

                    <div class="card-box">
  
                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="nome">Nome*</label>
                                            <input type="text" name="nome" placeholder="Nome" required class="form-control" id="nome" value="<?php if($edit) echo $get->nome; ?>">
                                        </div> 
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="email">E-mail*</label>
                                            <input type="text" name="email" placeholder="E-mail" required class="form-control" id="email" value="<?php if($edit) echo $get->email; ?>">
                                        </div> 
                                    </div>                                  
      

                                   <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="street">Rua</label>
                                            <input type="text" name="street" class="form-control" id="street" value="<?php if($edit) echo $get->street; ?>">
                                        </div> 
                                    </div>  

                                   <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="number">Número</label>
                                            <input type="text" name="number" class="form-control" id="number" value="<?php if($edit) echo $get->number; ?>">
                                        </div> 
                                    </div>  

                                   <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="district">Bairro</label>
                                            <input type="text" name="district" class="form-control" id="district" value="<?php if($edit) echo $get->district; ?>">
                                        </div> 
                                    </div>

                                   <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="city">Cidade</label>
                                            <input type="text" name="city" class="form-control" id="city" value="<?php if($edit) echo $get->city; ?>">
                                        </div> 
                                    </div>  

                                   <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="state">Estado</label>
                                            <input type="text" name="state" class="form-control" id="state" value="<?php if($edit) echo $get->state; ?>">
                                        </div> 
                                    </div> 

                                   <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="postalCode">CEP</label>
                                            <input type="text" name="postalCode" class="form-control" id="postalCode" value="<?php if($edit) echo $get->postalCode; ?>">
                                        </div> 
                                    </div> 

                                   <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="phoneAreaCode">DDD</label>
                                            <input type="text" name="phoneAreaCode" class="form-control" id="phoneAreaCode" value="<?php if($edit) echo $get->phoneAreaCode; ?>">
                                        </div> 
                                    </div>  

                                   <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="phone_number">Telefone</label>
                                            <input type="text" name="phone_number" class="form-control" id="phone_number" value="<?php if($edit) echo $get->phone_number; ?>">
                                        </div> 
                                    </div> 

                                   <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="ativo">Acesso restrito/ Acesso liberado</label>
                                            <br/>
                                            <input <?php if($edit AND $get->ativo) echo "checked"; ?>  id="ativo" type="checkbox" data-plugin="switchery" data-color="#81c868"  data-secondary-color="#333333" name="ativo" />
                                        </div>
                                    </div>    

                                   <div class="col-md-1">
                                        <div class="form-group">
                                            <label for="ordem">Ordem</label>
                                            <input type="number" name="ordem" class="form-control" id="ordem" value="<?php if($edit) echo $get->ordem; ?>">
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