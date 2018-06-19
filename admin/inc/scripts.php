<script>
    var resizefunc = [];
</script>

<!-- jQuery  -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/detect.js"></script>
<script src="assets/js/fastclick.js"></script>
<script src="assets/js/jquery.slimscroll.js"></script>
<script src="assets/js/jquery.blockUI.js"></script>
<script src="assets/js/waves.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/jquery.nicescroll.js"></script>
<script src="assets/js/jquery.scrollTo.min.js"></script>
<?php if($nestable){?> 
<script src="assets/plugins/nestable/jquery.nestable.js"></script>
<?php } ?>
<?php if($modal){?> 
<script src="assets/plugins/custombox/js/custombox.min.js"></script>
<script src="assets/plugins/custombox/js/legacy.min.js"></script>
<?php } ?>
<?php if($datatables){?> 
<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="assets/plugins/datatables/dataTables.bootstrap.js"></script>
<script src="assets/plugins/datatables/dataTables.buttons.min.js"></script>
<script src="assets/plugins/datatables/buttons.bootstrap.min.js"></script>
<script src="assets/plugins/datatables/jszip.min.js"></script>
<script src="assets/plugins/datatables/pdfmake.min.js"></script>
<script src="assets/plugins/datatables/vfs_fonts.js"></script>
<script src="assets/plugins/datatables/buttons.html5.min.js"></script>
<script src="assets/plugins/datatables/buttons.print.min.js"></script>
<script src="assets/plugins/datatables/dataTables.fixedHeader.min.js"></script>
<script src="assets/plugins/datatables/dataTables.keyTable.min.js"></script>
<script src="assets/plugins/datatables/dataTables.responsive.min.js"></script>
<script src="assets/plugins/datatables/responsive.bootstrap.min.js"></script>
<script src="assets/plugins/datatables/dataTables.scroller.min.js"></script>
<script src="assets/plugins/datatables/dataTables.colVis.js"></script>
<script src="assets/plugins/datatables/dataTables.fixedColumns.min.js"></script>
<?php } ?>
<script src="assets/plugins/bootstrap-sweetalert/sweet-alert.min.js"></script>
<script src="assets/pages/jquery.sweet-alert.init.js"></script>
<script src="assets/pages/datatables.init.js"></script>
<script src="assets/plugins/notifyjs/js/notify.js"></script>
<script src="assets/plugins/notifications/notify-metro.js"></script>
<script src="assets/plugins/switchery/js/switchery.min.js"></script>

<script src="assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js"></script>
<script src="assets/plugins/switchery/js/switchery.min.js"></script>
<script type="text/javascript" src="assets/plugins/multiselect/js/jquery.multi-select.js"></script>
<script src="assets/plugins/select2/js/select2.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap-select/js/bootstrap-select.min.js" type="text/javascript"></script>
<script src="assets/js/jquery.core.js"></script>
<script src="assets/js/jquery.app.js"></script>
<script src="assets/plugins/dropzone/dropzone.js"></script>

<script type="text/javascript" src="assets/plugins/parsleyjs/parsley.min.js"></script>
<script src="assets/plugins/bootstrap-inputmask/bootstrap-inputmask.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>
<script type="text/javascript" src="assets/pages/jquery.form-advanced.init.js"></script>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAGQJRz2t1kF70F5TJwP0ziLYk-lUv9tC8&sensor=false"></script>
<script src="assets/plugins/gmaps/gmaps.min.js"></script>
<script src="assets/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js" type="text/javascript"></script>
<script src="assets/js/maskMoney.min.js"></script>

<script src="assets/plugins/ckeditor/ckeditor.js"></script>


<?php if($chart){?> 
<script src="assets/plugins/chartist/js/chartist.min.js"></script>
<script src="assets/plugins/chartist/js/chartist-plugin-tooltip.min.js"></script>
<script src="assets/pages/jquery.chartist.init.js"></script>
<?php } ?>

<?php if($datepicker){?> 
<script src="assets/plugins/moment/moment.js"></script>
<script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.pt-BR.js"></script>
<script src="assets/plugins/timepicker/bootstrap-timepicker.js"></script>
<script src="assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="assets/plugins/clockpicker/js/bootstrap-clockpicker.min.js"></script>
<script src="assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>



<script type="text/javascript">

jQuery(document).ready(function(){
    // Date Picker
    jQuery('.datepicker').datepicker({
      format: 'dd/mm/yyyy',                
      language: 'pt-BR',
      todayHighlight: true,
      orientation: 'bottom'
    });
})


</script>
<?php } ?>


<script src="assets/js/slugify.js"></script>
<script src="assets/js/custom.js"></script>


<script type="text/javascript">
    $(document).ready(function () {

    //Display Datatables
    <?php if($datatables){?> 
    $('#datatable-responsive').dataTable({
        "language": 

            {
                "sEmptyTable": "Nenhum registro encontrado",
                "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
                "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
                "sInfoFiltered": "(Filtrados de _MAX_ registros)",
                "sInfoPostFix": "",
                "sInfoThousands": ".",
                "sLengthMenu": "_MENU_ &nbsp;&nbsp;resultados por página",
                "sLoadingRecords": "Carregando...",
                "sProcessing": "Processando...",
                "sZeroRecords": "Nenhum registro encontrado",
                "sSearch": "<span class='pesquisar-tadatable'>Pesquisar</span>",
                "oPaginate": {
                    "sNext": "Próximo",
                    "sPrevious": "Anterior",
                    "sFirst": "Primeiro",
                    "sLast": "Último"
                },
                "oAria": {
                    "sSortAscending": ": Ordenar colunas de forma ascendente",
                    "sSortDescending": ": Ordenar colunas de forma descendente"
                }
            }     
    });

    <?php } ?>

    });

</script>

<script src="assets/plugins/ladda-buttons/js/spin.min.js"></script>
<script src="assets/plugins/ladda-buttons/js/ladda.min.js"></script>
<script src="assets/plugins/ladda-buttons/js/ladda.jquery.min.js"></script>
        
<script type="text/javascript">
    
    <?php if($_SESSION['acao'] == "sucesso"){
        $_SESSION['acao'] = "";
    ?> 
    $.Notification.notify('success','top right','Sucesso!', 'Operação realizada com sucesso');

    <?php } ?> 

    <?php if($_SESSION['acao'] == "error"){
    $_SESSION['acao'] = "";
    ?> 
    $.Notification.notify('error','top right','Oops!', 'Ocorreu um erro, tente novamente.');
    <?php } ?>

    <?php if($_GET['acao'] == "password_not_equal"){?> 
    $.Notification.notify('error','top right','Oops!', 'As senhas informadas não são iguais.');
    <?php } ?>


    <?php if($_GET['acao'] == "email-in-use"){?> 
    $.Notification.notify('error','top right','Oops!', 'Já existe um usuário cadastrado com esse e-mail.');
    <?php } ?>    

</script>