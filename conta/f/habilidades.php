<?php
session_start();
if(isset($_SESSION['idfreelancer'])){

  require_once 'includes/freelancer.php';
  $header=file_get_contents(realpath(dirname(__FILE__) . '/includes/header.php'));
  $menu=file_get_contents(realpath(dirname(__FILE__) . '/includes/menu.php'));
  $profissoes=file_get_contents(realpath(dirname(__FILE__) . '/includes/profissoes.html'));
  ?>         

  <!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>F.ree > Perfil Profissional</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="materialize/materialize.css">

    <link rel="stylesheet" type="text/css" href="upload/css/component.css" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <script src="plugins/select2/select2.full.min.js"></script>
    <link rel="stylesheet" href="plugins/select2/select2.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="pservices/css/component.css" />
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="plugins/iCheck/all.css">
    <link rel="stylesheet" type="text/css" href="modal/css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="tables/css/component.css" />
    <!-- common styles -->
    <link rel="stylesheet" type="text/css" href="modal/css/dialog.css" />
    <!-- individual effect -->
    <link rel="stylesheet" type="text/css" href="modal/css/dialog-sandra.css" />
    <script src="modal/js/modernizr.custom.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini fixed">

  <div class="fixed-action-btn vertical" style="right: 24px;">
    <a class="btn-floating btn-large red" style="background-color:#008D4C" href="#" data-dialog="somedialog" data-toggle="modal" data-target=".bd-example-modal-lg">

      <i class="fa fa-fw fa-plus"></i>

    </a>
  </div>



  <!-- Site wrapper -->
  <div class="wrapper">

    <?php


    require_once 'includes/header.php';
    require_once 'includes/aside.php';

    ?>


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">



      <!-- Main content -->
      <section class="content">


        <section class="pricing-section bg-8">

          <div class="pricing pricing--tashi">
            <?php 

            require_once '../php/class/habilidades.class.php';

            $habilidades=new habilidades();
            $habilidades->setIdFreelancer($idfreelancer);
            $resp=$habilidades->buscarTodos();


            if ($resp==NULL){?>


            <div class="alert alert-danger alert-dismissible" style="width:100%">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true" style="font-size:30px">&times;</button>
              <h4 style="text-align:center;padding-top:10px;font-size:25px;"> Adicione suas habilidades profissionais</h4>
            </div>

            <?php
          }
          if ($resp!=NULL) {


            foreach ($resp as $row) {


              ?>
              <div class="pricing__item">
                <h3 class="pricing__title" style="font-size: 40px"><?php echo $row ['nomehabilidade'] ?></h3>
                <p class="pricing__sentence" style="font-size: 30px"><?php echo $row ['nivel'] ?></p>
                
                
                <a  style="background-color:#D73925" href="#" class="pricing__action" onclick="javascript: if (confirm('Deseja excluir sua habilidade?'))location.href='../php/functions/excluirhabilidade.php?id=<?php echo $row['idhabilidade'] ?>'"><i style="padding-left:20px" class="fa fa-fw fa-trash"></i></a>


              </div>

              <?php }} ?>
            </div>
          </section>


        </div>

      </div>
      <!-- /.box -->

    </section>

    <div id="somedialog" class="dialog">
      <div class="dialog__overlay"></div><h2><strong> </strong></h2><div><button class="action" data-dialog-close></button></div>
      <div class="dialog__content">

        <form method="POST" action="../php/functions/inserirhabilidade.php">
          <input type="hidden" value="<?php echo $idfreelancer ?>" name="idfreelancer">
          <div class="row">
            <h1 style="text-align:center"></h1>
            <div class="col-md-12 col-xs-12">
              <div class="form-group">
                <label for="nomehabilidade">Nome da Habilidade</label>
                <input required id="nomefreelancer" class="form-control input-lg" name="nomehabilidade" type="text" placeholder="Habilidade">
              </div>
            </div>

            
            <div class="col-md-12 col-xs-12">
              <div class="form-group">
                <label for="nomefreelancer">Nível</label>
                <select class="form-control select2" name="nivel">
                  <option selected="selected">Selecione...</option>
                  <option>Noob</option>  
                  <option>Não manjo muito</option>
                  <option>Maômenos</option>
                  <option>Me viro bem</option>
                  <option>Manjo pakas</option>
                  <option>Hardcore</option>
                </select>

              </div>
            </div>

            
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="input-group" style="width:100%;">
                <button type="submit" class="btn btn-block btn-success btn-lg">Adicionar</button>
              </div>
            </div>
          </div>

        </form>


      </div>
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- Select2 -->
<script src="plugins/select2/select2.full.min.js"></script>
<!-- InputMask -->
<script src="plugins/input-mask/jquery.inputmask.js"></script>
<script src="plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- date-range-picker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- bootstrap color picker -->
<script src="plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>

<script src="upload/js/custom-file-input.js"></script>
<script src="modal/js/classie.js"></script>
<script src="modal/js/dialogFx.js"></script>
<!-- Page script -->
<script>
(function() {

  var dlgtrigger = document.querySelector( '[data-dialog]' ),
  somedialog = document.getElementById( dlgtrigger.getAttribute( 'data-dialog' ) ),
  dlg = new DialogFx( somedialog );

  dlgtrigger.addEventListener( 'click', dlg.toggle.bind(dlg) );

})();
</script>
<script>
$(function () {
    //Initialize Select2 Elements
    $(".select2").select2();

    //Datemask dd/mm/yyyy
    $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
    //Datemask2 mm/dd/yyyy
    $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
    //Money Euro
    $("[data-mask]").inputmask();

    //Date range picker
    $('#reservation').daterangepicker();
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
    //Date range as a button
    $('#daterange-btn').daterangepicker(
    {
      ranges: {
        'Today': [moment(), moment()],
        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
        'This Month': [moment().startOf('month'), moment().endOf('month')],
        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
      },
      startDate: moment().subtract(29, 'days'),
      endDate: moment()
    },
    function (start, end) {
      $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
    }
    );

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    });

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    });
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass: 'iradio_minimal-red'
    });
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass: 'iradio_flat-green'
    });

    //Colorpicker
    $(".my-colorpicker1").colorpicker();
    //color picker with addon
    $(".my-colorpicker2").colorpicker();

    //Timepicker
    $(".timepicker").timepicker({
      showInputs: false
    });
  });
</script>
<script src="pservices/js/toucheffects.js"></script>
</body>
</html>
<?php

}else{ 
  header("location:../../login");
}
?>
