<?php 
session_start();

$id=$_SESSION['idfreelancer'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Mentor Education Bootstrap Theme</title>
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/imagehover.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="conta/f/modal/css/normalize.css" />
  <link rel="stylesheet" type="text/css" href="conta/f/modal/css/dialog.css" />
  <link rel="stylesheet" type="text/css" href="conta/f/modal/css/dialog-sandra.css" />
  <script src="conta/f/modal/js/modernizr.custom.js"></script>

</head>
<body>

 <?php

 $idfreelancer=$_GET['idfreelancer'];
 require_once 'includs/perfilfreelancer.php';
 require_once'nav.php'; 

 ?>
 <section id ="pricing" class="section-padding">
  <div class="container">
    <div class="row">
      <div class="header-section text-center">


       <hr class="bottom-line" style="visibility:hidden">
     </div>
     <div class="row">
      <div class="col-md-3" style="text-align:center">
        <img src="conta/f/<?php echo $resp['urlavatar']?>" style="width:230px;height:230px;margin-bottom:20px;"class="img-circle" alt="Circular Image">
      </div>
      <div class="col-md-9">
       <h1 style="font-size:40px;"><?php  echo $resp['nome']; ?></h1>
       <div class="area">
         <?php foreach ($resp3 as $row) { ?>
         <?php echo $row['anosexperiencia'] . " anos "; echo $row['nomearea'] . "<br>"; ?>
         <?php  } ?>
       </div>
       <a href="#" data-dialog="somedialog" data-toggle="modal" data-target=".bd-example-modal-lg"><div class="contrateme">Contrate-me</div></a>
     </div>
   </div>

   <div class="row">
    <div class="col-md-12">
     <div class="titulo">Sobre Mim</div>
     <?php echo $resp['resumo'] ?>
   </div> 


   <div class="col-md-12">
    <div class="titulo">Meus Serviços</div>

    <?php foreach ($resp2 as $row2) {?>

    <div class="col-md-12" style="background-color:#1e3c50;color:#fff;padding:15px;margin:4px;">
      <div class="col-md-4">
        <div class="nomeservico" style="font-size:20px"><?php echo $row2['nomeservico'] ?></div>
      </div>
      <div class="col-md-4">
        <div class="nomeservico"><?php echo $row2['descricao'] ?></div>
      </div>
      <div class="col-md-4">
        <div class="nomeservico">R$<?php echo $row2['preco'] ?>,00 <?php echo $row2['tipo'] ?></div>
      </div>
    </div>


    <?php } ?>

  </div>  

  <div class="col-md-12">
    <div class="titulo">Habilidades</div>
    <ul>
     <?php foreach ($resp4 as $row4) {
      echo " <li class='tag-info'>". $row4['nomehabilidade'] ."</li>";
    } ?>
  </ul>
</div> 
</div>
<div class="row">
<div class="col-md-12">
  <div class="titulo" style="text-align:center;">Redes Sociais</div>
 <div class="col-md-4">
      <center><a target="_blank" href="<?php echo $resp['facebook'] ?>"><i class="fa fa-facebook-square" style="font-size:85px;"></i></a></center> 
    </div>
    <div class="col-md-4">
     <center><a target="_blank" href="<?php echo $resp['linkedin'] ?>"><i class="fa fa-linkedin-square" style="font-size:85px;"></i></a></center>
   </div>
   <div class="col-md-4">
    <center> <a target="_blank" href="<?php echo $resp['insta'] ?>"><i class="fa fa-instagram" style="font-size:85px;"></i></a></center>
</div>
</div>  
</div>
</div>
</section>
<div id="somedialog" class="dialog">
  <div class="dialog__overlay"></div><h2><strong> </strong></h2><div><button style="visibility:hidden" class="action" data-dialog-close></button></div>
  <div class="dialog__content">

    <form action="conta/php/functions/enviarpedido.php" method="POST">
      <input type="hidden" name="idfreelancer" value="<?php echo $resp['idfreelancer'] ?>">
      <div class="form-group">
        <input required id="nomefreelancer"  pattern="[a-z A-Z]+" class="form-control input-lg" name="nome" type="text" placeholder="Seu Nome" value="<?php echo $nomefreelancer?>">
      </div>

      <div class="form-group">
        <input required id="nomefreelancer" class="form-control input-lg" name="email" type="email" placeholder="Seu Email" value="<?php echo $nomefreelancer?>">
      </div>

      <div class="form-group">
        <select class="form-control" name="servico">
          <option disabled selected="selected">Selecione um Serviço</option>
          <?php foreach ($resp2 as $row2) {?>

          <option><?php echo $row2['nomeservico'] ?></option> 

          <?php } ?>
        </select>
      </div>
      <div class="form-group">
        <label for="nomefreelancer">Dê mais detalhes ao profissional</small></label>
        <textarea rows="5" id="nomefreelancer"  maxlength="1000" class="form-control input-lg" name="msg" type="text"></textarea>
      </div>
      <div class="form-group">
        <button type="submit" style="width:100%" class="btn btn-success"><b>Enviar Pedido</b></button>
      </div>
    </form>

   
  </div>


</div>
<script src="conta/f/modal/js/classie.js"></script>
<script src="conta/f/modal/js/dialogFx.js"></script>

<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- Select2 -->

<script>
(function() {

  var dlgtrigger = document.querySelector( '[data-dialog]' ),
  somedialog = document.getElementById( dlgtrigger.getAttribute( 'data-dialog' ) ),
  dlg = new DialogFx( somedialog );

  dlgtrigger.addEventListener( 'click', dlg.toggle.bind(dlg) );

})();
</script>



