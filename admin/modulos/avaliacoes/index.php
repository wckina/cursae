<?php 
session_start();
require_once("../../inc/header.php");
require_once("categorias.class.php");
$categorias = new Categorias();
$datatables = false;
$get = $categorias->getList();
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
                        <h4 class="page-title">Gerenciar Categorias</h4>
                    </div>

                    <div class="col-sm-3 col-sx-12 text-right">
                         <a href="app/categorias/add" class="btn btn-purple waves-effect waves-light">
                         <i class="fa fa-plus m-l-5"></i> 
                         <span>Adicionar</span></a>
                    </div>                    

                </div>

                <br/>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box table-responsive">
                            <table id="datatable-responsive" class="table table-hover table-bordered mails dt-responsive nowrap table-actions-bar" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th width="10" class="text-center">Icone</th>
                                    <th>Nome</th>
                                    <th>Ação</th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php foreach ($get as $show) {?>
                                <tr>
                                    <td class="text-center"><i class="<?php echo $show->icon;?>"></i></td>
                                    <td><?php echo $show->nome;?></td>
                                    <td>
                                    <a href="app/categorias/edit/<?php echo $show->id; ?>" class="table-action-btn"><i class="md md-edit"></i></a>
                                    <a href="app/categorias/delete/<?php echo $show->id; ?>" class="table-action-btn confirm"><i class="md md-close"></i></a>
                                    </td>
                                </tr>                        
                                <?php } ?>
                                
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                </div> <!-- container -->

            </div> <!-- content -->

<?php 
require_once("../../inc/scripts.php");
require_once("../../inc/footer.php");
?>