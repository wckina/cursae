<?php 
session_start();
require_once("../../inc/header.php");
require_once("usuarios.class.php");
$datatables = false;
$usuarios = new Usuarios();
$get = $usuarios->getList();
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
                         <a href="app/usuarios/add" class="btn btn-purple waves-effect waves-light">
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
                                    <th>Usuário</th>
                                    <th>Notificações do sistema</th>
                                    <th>Data de Cadastro</th>
                                    <th width="140">Ação</th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php foreach ($get as $show) {?>
                                <tr>
                                    <td><?php echo $show->nome;?></td>
                                    <td><?php echo $show->usuario;?></td>
                                    <td><?php if($show->notificar) echo "SIM"; else echo "NÃO";?></td>
                                    <td>
                                        <?php 
                                            $data = new \DateTime($show->data_cadastro); 
                                            echo $data->format('d/m/Y');
                                        ?>
                                    </td>
                                    <td>
                                    <a href="app/usuarios/edit/<?php echo $show->id; ?>" class="table-action-btn"><i class="md md-edit"></i></a>
                                    <a href="app/usuarios/delete/<?php echo $show->id; ?>" class="table-action-btn confirm"><i class="md md-close"></i></a>
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