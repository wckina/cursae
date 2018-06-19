<?php 
session_start();
require_once("../../inc/header.php");
require_once("planos.class.php");
$datatables = false;
$planos = new Planos();
$get = $planos->getList();
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
                        <h4 class="page-title">Gerenciar Planos</h4>
                    </div>

                    <div class="col-sm-3 col-sx-12 text-right">
                         <a href="app/planos/add" class="btn btn-purple waves-effect waves-light">
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
                                    <th>Nome</th>
                                    <th>Valor</th>
                                    <th>Período</th>
                                    <th>Qtd. de Assinaturas</th>
                                    <th>Ação</th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php foreach ($get as $show) {?>
                                <tr>
                                    <td><?php echo $show->nome;?></td>
                                    <td>R$ <?php echo number_format($show->valor, 2, ",", ".");?></td>
                                    <td>
                                    <?php 
                                    switch ($show->periodo) {
                                        case 'WEEKLY':
                                            echo "SEMANAL";
                                            break;
                                        case 'MONTHLY':
                                            echo "MENSAL";
                                            break;
                                        case 'BIMONTHLY':
                                            echo "BIMESTRAL";
                                            break;
                                        case 'TRIMONTHLY':
                                            echo "TRIMESTRAL";
                                            break;
                                        case 'SEMIANNUALLY':
                                            echo "SEMESTRAL";
                                            break;
                                        case 'YEARLY':
                                            echo "ANUAL";
                                            break;                                                                                                                                                                                                                        
                                    }
                                    ?>
                                    </td>
                                    <td>1000</td>
                                    <td>
                                    <a href="app/planos/edit/<?php echo $show->id; ?>" class="table-action-btn"><i class="md md-edit"></i></a>
                                    <a href="app/planos/delete/<?php echo $show->id; ?>" class="table-action-btn confirm"><i class="md md-close"></i></a>
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