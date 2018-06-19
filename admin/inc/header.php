<?php 
require_once("restrict.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Websix">
        <base href="/admin/">
        <link rel="shortcut icon" href="assets/images/favicon_1.ico">
        <title>Sistema - Administrativo</title>
        <?php if($datatables){?> 
        <link href="assets/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/datatables/dataTables.colVis.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/datatables/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/datatables/fixedColumns.dataTables.min.css" rel="stylesheet" type="text/css"/>
        <?php } ?>
        <link href="assets/plugins/nestable/jquery.nestable.css" rel="stylesheet" />
        <link href="assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
        <link href="assets/plugins/ladda-buttons/css/ladda-themeless.min.css" rel="stylesheet" type="text/css" />        
        <link href="assets/plugins/switchery/css/switchery.min.css" rel="stylesheet" />
        <link href="assets/plugins/bootstrap-sweetalert/sweet-alert.css" rel="stylesheet" type="text/css">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="assets/plugins/chartist/css/chartist.min.css">
        <link href="assets/css/core.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/components.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/custombox/css/custombox.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/plugins/morris/morris.css">
        <link href="assets/plugins/dropzone/dropzone.css" rel="stylesheet" type="text/css" />

        <link href="assets/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css" rel="stylesheet" />
        <link href="assets/plugins/multiselect/css/multi-select.css"  rel="stylesheet" type="text/css" />
        <link href="assets/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet" />


        <!--venobox lightbox-->
        <link rel="stylesheet" href="assets/plugins/magnific-popup/css/magnific-popup.css"/>

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
        <script src="assets/js/modernizr.min.js"></script>

    </head>

    <body class="fixed-left-void">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">

                    <div class="text-center">
                        <a href="/admin" class="logo"><i class="icon-magnet icon-c-logo"></i></a>
                       <!-- Image Logo here -->
                       <a href="/admin" class="logo">
                            <span><img src="assets/images/logo_dark.png" height="20"/></span>
                        </a>
                    </div>
                </div>

                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">
  
                              <div class="pull-right">
                                <button class="button-menu-mobile open-left waves-effect waves-light">
                                    <i class="md md-menu"></i>
                                </button>
                                <span class="clearfix"></span>
                                </div>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->

            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    <!--- Divider -->
                    <div id="sidebar-menu">
                        <ul>

                            <li>
                                <a href="/admin/" class="waves-effect"><i class="ti-home"></i> <span>Início</span></a>
                            </li>

                            <li>
                                <a href="app/cursos" class="waves-effect"><i class="ion-ios7-film"></i> <span> Cursos </span></a>
                            </li>    

                            <li>
                                <a href="app/instrutores" class="waves-effect"><i class="ion-person"></i> <span> Instrutores </span></a>
                            </li>   

                            <li>
                                <a href="app/categorias" class="waves-effect"><i class="ion-ios7-box-outline"></i> <span> Categorias de Curso</span></a>
                            </li>                                                                                      
                                                     
                            <li>
                                <a href="app/planos" class="waves-effect"><i class="ion-bag"></i> <span> Planos </span></a>
                            </li>                                                        

                            <li>
                                <a href="app/emails" class="waves-effect"><i class="ion-ios7-email"></i> <span> Emails Templates </span></a>
                            </li>     

                            <li>
                                <a href="app/estudantes" class="waves-effect"><i class="ion-university"></i> <span> Estudantes </span></a>
                            </li> 

                           
                            <li>
                                <a href="app/newsletter" class="waves-effect"><i class="ion-android-add-contact"></i> <span> Newsletter </span></a>
                            </li>

                            <li>
                                <a href="app/configuracoes" class="waves-effect"><i class="ion-settings"></i> <span> Configurações </span></a>
                            </li>  

                            <li>
                                <a href="app/usuarios" class="waves-effect"><i class="ion-android-add-contact"></i> <span> Usuários ADM </span></a>
                            </li>

                            
  

                                                                                     
                            <li>
                                <a href="logout.php" class="waves-effect"><i class="icon-logout"></i> <span> Sair </span></a>
                            </li>                            

                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- Left Sidebar End -->