<?php 
require_once("../../inc/header.php");
require_once("cursos.class.php");
$cursos = new Cursos();
$get = $cursos->get($_GET['id']);

require_once("cursos_instrutores.class.php");
$cursosInstrutores = new CursosInstrutores();
$getInstrutores = $cursosInstrutores->getListIdCurso($get->id);

require_once("../instrutores/instrutores.class.php");
$instrutores = new Instrutores();
$getAllInstrutores = $instrutores->getList();

$action = "add_instrutor";
$datatables = false;
$datepicker = false;
$chart = false;
$nestable = false;
$modal = false;
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
                    <h4 class="page-title">Adicionar instrutores para o curso <?php echo $get->nome; ?></h4>
                </div>

                <div class="col-sm-3 col-sx-12 text-right">
                     <a href="app/cursos" class="btn btn-danger waves-effect waves-light">
                     <i class="fa fa-backward m-l-5"></i>  
                     <span>Voltar para cursos</span></a>
                </div>   
            </div><!--row-->

            <br/>

            <div class="row">
                <form action="app/cursos/action.php?action=<?php echo $action; ?>" method="post" data-parsley-validate novalidate enctype="multipart/form-data">
                <div class="col-lg-12">
                <div class="card-box">
                
                    <div class="form-group">
                        <label for="nome">Adicionar Instrutor</label>
                        <select class="form-control" name="id_instrutor" required>
                                <option value="">Selecione um instrutor para víncular ao curso</option>
                            <?php foreach ($getAllInstrutores as $showAllInstrutores) {?>
                                <option value="<?php echo $showAllInstrutores->id; ?>"><?php echo $showAllInstrutores->nome; ?></option>
                            <?php } ?>
                        </select>
                    </div>         
                
                    <div class="form-group text-right m-b-0">
                        <input type="hidden" name="id_curso" value="<?php echo $_GET['id'];?>">
                        <button class="btn btn-success waves-effect waves-light" type="submit">Salvar</button>
                    </div>
                </div>
            </div>


            <?php foreach ($getInstrutores as $show) {
                $showInstrutor = $instrutores->get($show->id_instrutor); 
            ?>

            <div class="col-sm-6 col-lg-4">
                <div class="card-box">
                    <div class="contact-card">
                        <a class="pull-left" href="#">
                            <img class="img-circle" src="uploads/<?php echo $showInstrutor->foto; ?>" alt="<?php echo $showInstrutor->nome; ?>" title="<?php echo $showInstrutor->nome; ?>">
                        </a>
                        <div class="member-info">
                            <h4 class="m-t-0 m-b-5 header-title"><b><?php echo $showInstrutor->nome; ?></b></h4>
                            <p class="text-muted"><?php echo $showInstrutor->sobrenome; ?></p>
                            <p class="text-dark"><i class="md md-business m-r-10"></i><small><?php echo $showInstrutor->profissao; ?></small></p>
                            <div class="contact-action">
                                <a href="app/cursos/action.php?action=delete_instrutor&id=<?php echo $show->id; ?>&id_curso=<?php echo $get->id; ?>" class="btn btn-danger btn-sm confirm"><i class="md md-close"></i></a>
                            </div>
                        </div>
                        
                        <ul class="social-links list-inline m-0">
                            <?php if($showInstrutor->facebook){?> 
                            <li>
                                <a target="_blank" data-placement="top" data-toggle="tooltip" class="tooltips" href="<?php echo $showInstrutor->facebook; ?>" data-original-title="Facebook"><i class="fa fa-facebook"></i></a>
                            </li>
                            <?php } ?>
                            <?php if($showInstrutor->twitter){?> 
                            <li>
                                <a target="_blank" data-placement="top" data-toggle="tooltip" class="tooltips" href="<?php echo $showInstrutor->twitter; ?>" data-original-title="Twitter"><i class="fa fa-twitter"></i></a>
                            </li>
                            <?php } ?>
                            <?php if($showInstrutor->linkedin){?> 
                            <li>
                                <a target="_blank" data-placement="top" data-toggle="tooltip" class="tooltips" href="<?php echo $showInstrutor->linkedin; ?>" data-original-title="LinkedIn"><i class="fa fa-linkedin"></i></a>
                            </li>
                            <?php } ?>
                            <?php if($showInstrutor->youtube){?> 
                            <li>
                                <a target="_blank" data-placement="top" data-toggle="tooltip" class="tooltips" href="<?php echo $showInstrutor->youtube; ?>" data-original-title="Youtube"><i class="fa fa-youtube"></i></a>
                            </li>
                            <?php } ?>
                            <?php if($showInstrutor->website){?> 
                            <li>
                                <a target="_blank" data-placement="top" data-toggle="tooltip" class="tooltips" href="<?php echo $showInstrutor->website; ?>" data-original-title="Website"><i class="fa fa-envelope-o"></i></a>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div> <!-- end col -->
            <?php } ?>

            </div><!-- end row-->

            </div><!-- end row -->


        </div> <!-- container -->

    </div> <!-- content -->
    


<?php 
require_once("../../inc/scripts.php");
require_once("../../inc/footer.php");
?>